import React, {useEffect, useState} from "react";
import * as config from "../config";
import Following from "./Following";
import SelectUsers from "./SelectUsers";
import send from '../Send.svg';
import * as helpers from '../Helpers';
import MasonryGrid from "./MasonryGrid";

function useWindowSize() {
    // Initialize state with undefined width/height so server and client renders match
    // Learn more here: https://joshwcomeau.com/react/the-perils-of-rehydration/
    const [windowSize, setWindowSize] = useState({
        width: undefined,
        height: undefined,
    });


    useEffect(() => {
        // Handler to call on window resize
        function handleResize() {
            // Set window width/height to state
            setWindowSize({
                width: window.innerWidth,
                height: window.innerHeight,
            });
        }

        // Add event listener
        window.addEventListener("resize", handleResize);
        // Call handler right away so state gets updated with initial window size
        handleResize();
        // Remove event listener on cleanup
        return () => window.removeEventListener("resize", handleResize);
    }, []); // Empty array ensures that effect is only run on mount
    return windowSize;
}

const getUser = () => {

}
const Posts = () => {
    const size = useWindowSize();

    const [posts, setPosts] = useState([]);
    const [showFollowingSelect, setShowFollowingSelect] = useState(false);
    const [disabled, setDisabled] = useState(true);
    const [selectedIds, setSelectedIds] = useState([]);
    const [count, setCount] = useState(0);
    const [showFollowings, setShowFollowings] = useState(true);
    const [reload, setReload] = useState(false);
    const [followings, setFollowings] = useState([]);


    useEffect(() => {
        if (count == selectedIds.length) {
            // Processing complete
        }
    }, [count])

    const handleSubmit = () => {

        selectedIds.map((id, index) => {

            createFollow(id, index);
        })

        setSelectedIds([]);
        setShowFollowingSelect(false)
        setReload(true)


    }

    const createFollow = (recipientId, index) => {
        setCount(count + 1)
        let userid = localStorage.getItem("user_id");
        var raw = JSON.stringify({
            "sender_id": userid,
            "recipient_id": recipientId
        });


        var requestOptions = {
            method: "POST",
            headers: helpers.getHeaders(),
            redirect: "follow",
            body: raw,

        };

        fetch(
            config.url + "relations/",
            requestOptions
        )
            .then((response) => response.json())
            .then((result) => {
                if (result.success) {
                    // Success handled
                } else {
                    let ef = "uniwebview://action?type=error?message=" + error;
                }

            })
            .catch((error) => {
                let ef = "uniwebview://action?type=error?message=" + error;
            });

    }
    useEffect(() => {
        var headers = new Headers();
        headers.append("accept", "application/json");
        headers.append("Content-Type", "application/json");
        headers.append(
            "Authorization",
            "Bearer " + localStorage.getItem("token")
        );

        var requestOptions = {
            method: "GET",
            headers: headers,
            redirect: "follow",
        };

        fetch(
            config.url + "posts-by-user-id/" + localStorage.getItem("user_id"),
            requestOptions
        )
            .then((response) => response.json())
            .then((result) => {

                if (result.success) {
                    setPosts(result.posts.filter(i => i.is_profile == 0));
                }
            })
            .catch((error) => {
                    location.href = "uniwebview://action?type=error?message=" + error;
                }
            );
    }, []);
    return (
        <div className={"posts "+ config.theme}>


            {showFollowingSelect ?
                <div>
                    <SelectUsers setDisabled={setDisabled} handleSelectedIds={setSelectedIds} followings={followings}/>
                    <div className={"buttons-container"}>

                        <div className={"button send-button "} onClick={handleSubmit}
                             style={disabled ? {display: "none"} : { display: "flex"}}>
                            <div className={"label"}>{selectedIds.length > 1 ? "Add friends" : "Add friend"} </div>
                            <img src={send.substring(1)} alt="send button"/>


                        </div>
                        <div className={'button cancel-button'} onClick={() => setShowFollowingSelect(false)}>
                            <div className={"label"}>Cancel</div>

                        </div>
                    </div>
                </div>
                :
                <>

                    {localStorage.getItem("following") == 1 && <div>
                        <Following setShowFollowingSelect={setShowFollowingSelect}
                                   reload={reload}
                                   setReload={setReload}
                                   setFollowings={setFollowings}/>

                    </div>
                    }
                    <MasonryGrid posts={posts}/>
                </>
            }
        </div>
    );
};

export default Posts;
