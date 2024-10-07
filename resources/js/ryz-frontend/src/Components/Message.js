import React from 'react';
import ProfilePicture from './ProfilePicture';

const Message = ({message}) => {


    return (
        <div className={'comment-item'}>
            <div className="profile-picture-container">

                <ProfilePicture user={message.sender} showUsername={false}/>

            </div>

            <div className={"comment-body"}>
                <div className={"comment-body-inner"}>

                    <span style={{fontWeight:800}}> {message.sender.name}</span> {message.body}<small>{message.diffForHumans.replace(" ago" ,"")}</small>

                </div>
            </div>
        </div>
    )
}

export default Message;
