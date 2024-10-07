import React, {useState, useEffect} from 'react';
import * as config from '../config';
import ProfilePicture from './ProfilePicture';
import FriendPlus from '../icons/FriendPlus.svg';
import FriendPlusLight from '../icons/FriendPlusLight.svg';


const Following = ({setShowFollowingSelect, reload, setReload, setFollowings}) => {
    const [followingUsers, setFollowingUsers] = useState([]);

    useEffect(() => {

        fetchFollowings();
    }, []);
    useEffect(() => {
        if (reload) {
            fetchFollowings();
            setReload(false);
        }
    }, [reload]);

    const fetchFollowings = () => {
        var headers = new Headers();
        headers.append(
            "Authorization",
            "Bearer " + localStorage.getItem("token")
        );

        var requestOptions = {
            method: 'GET',
            headers,
            redirect: 'follow'
        };

        fetch(config.url + "users/" + localStorage.getItem('user_id') + "/followins?offset=0&limit=40", requestOptions)
            .then((response) => response.json())

            .then(result => {
                if (result.success) {
                    setFollowingUsers(result.user.followins)
                    console.log("done fetchFollowings")
                    setFollowings(result.user.followins)
                }
            })
            .catch(error => {
                console.log('error', error)

                setTimeout(() => {
                    window.location.reload();
                }, 1000);


            });

    }
    return (

        <div>

            <div className={"following-scroll"}>

                {followingUsers.length > 0 ? followingUsers.map((following, index) => (
                        <a href={"uniwebview://action?type=user&user_id=" + following.user.id} key={'user-' + index}
                           className={"following-user"}>

                            <ProfilePicture user={following.user} showUsername={false}/>

                            <div className={"username"}>
                                @{following.user.email.replace('@ikin.com', "")}
                            </div>
                        </a>
                    ))
                    : <></>
                }

                <div className={"follow-placeholder"} onClick={() => {
                    setShowFollowingSelect(true)
                }}>
                    <div className={"image-container"}>
                        {config.theme == "light" ?
                            <img src={FriendPlusLight.substring(1)} alt="add friend"/>
                            :
                            <img src={FriendPlus.substring(1)} alt="add friend"/>
                        }
                    </div>

                    <span className={"placeholder-leyend"}>add friend</span>
                </div>


            </div>
            <div className={"separator"}></div>
        </div>
    )
}

export default Following;
