import React, {useState} from "react";
import * as config from "../config.js";
import SelectUsers from './SelectUsers';
import * as helpers from '../Helpers'

const Share = () => {
    const [disabled, setDisabled] = useState(true);
    const [selectedIds, setSelectedIds] = useState([]);

    const handleSubmit = () => {
        console.log(selectedIds)
        if (selectedIds.length > 0) {
            SharePost();
        }
    }


    const SharePost = () => {
        var raw = JSON.stringify({
            "user_id": localStorage.getItem("user_id"),
            "post_id": localStorage.getItem("post_id"),
            "user_ids": selectedIds,
        });


        var requestOptions = {
            method: "POST",
            headers: helpers.getHeaders(),
            redirect: "follow",
            body: raw,

        };

        fetch(
            config.url + "share",
            requestOptions
        )
            .then((response) => response.json())
            .then((result) => {
                if (result.success) {
                    console.log("success")
                    location.href = "uniwebview://action?type=share?success=1";

                } else {
                    location.href = "uniwebview://action?type=error?message=" + error;
                    console.log("error", error)
                }

            })
            .catch((error) => {
                    location.href = "uniwebview://action?type=error?message=" + error;
                    console.log("error", error)
                }
            );


    }
    const createFollow = (recipientId) => {

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
                    console.log("success")

                } else {
                    location.href = "uniwebview://action?type=error?message=" + error;
                    console.log("error", error)
                }

            })
            .catch((error) => {
                location.href = "uniwebview://action?type=error?message=" + error;
                console.log("error", error)

            });

    }
    return (
        <div className={config.theme}>
            <SelectUsers handleSelectedIds={setSelectedIds} setDisabled={setDisabled}/>
            <div className={"button send-button "} onClick={handleSubmit}
                 style={disabled ? {opacity: 0} : {background: "#fff", opacity: 1}}>
                <div className={"label"}>Send</div>
                <img src="images/Send.svg" alt="send button"/>
            </div>


        </div>
    )
}


export default Share;
