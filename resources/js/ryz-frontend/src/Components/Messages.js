import React, {useDebugValue, useEffect, useRef, useState} from 'react';
import SelectUsers from './SelectUsers';
import ProfilePicture from './ProfilePicture';
import * as config from '../config';
import * as helpers from '../Helpers';
import Message from './Message';
import send from '../Send.svg';
import sendLight from '../SendLight.svg';
import BackArrow from '../BackArrow.svg';

// import Arrow from './Arrow';
function useStateWithLabel(initialValue, name) {
    const [value, setValue] = useState(initialValue);
    useDebugValue(`${name}: ${value}`);
    return [value, setValue];
}

const Messages = () => {
    const [receiver, setReceiver] = useStateWithLabel(null, 'receiver');
    const [disabled, setDisabled] = useStateWithLabel(true, 'disabled');
    const [showSendButton, setShowSendButton] = useStateWithLabel(false, 'sendButtonDisabled');
    const [loggedUser, setLoggedUser] = useStateWithLabel(null, 'loggedUser');
    const [messages, setMessages] = useStateWithLabel([], 'messages');
    const inputEl = useRef(null);
    const [selectedUser, setSelectedUser] = useStateWithLabel(null, 'selectedUser')
    const chatContainer = useRef(null);
    const containerRef = useRef(null);
    const handleSubmit = () => {
        console.log("selectedUser", selectedUser)
        setReceiver(selectedUser)
    }

    const scrollToMyRef = () => {

        const scroll = chatContainer.current.scrollHeight - chatContainer.current.clientHeight;
        // chatContainer.current.scrollTo(0, scroll);
        chatContainer.current.scroll({top: scroll, behavior: 'smooth'});
    };
    useEffect(() => {
        const timer = setInterval(() => {

            getMessages();

        }, 5000);
        // clearing interval
        return () => clearInterval(timer);
    });


    useEffect(() => {
        if (messages.length > 0 && receiver && loggedUser) {
            scrollToMyRef();
        }
    }, [messages])

    useEffect(() => {
        if (receiver && loggedUser) {
            getMessages(loggedUser.id, receiver.id)
        }

    }, [receiver, loggedUser]);


    const generateSession = () => {

        return loggedUser.id > receiver.id
            ? `${receiver.id}_${loggedUser.id}`
            : `${loggedUser.id}_${receiver.id}`
    }

    const onChangeHandler = (event) => {

        const val = event.target.value;
        console.log("val", val)
        setShowSendButton(val != '')
    }


    const getMessages = () => {
        var requestOptions = {
            method: "GET",
            headers: helpers.getHeaders(),
            redirect: "follow",
        };

        fetch(
            config.url + "messages/session/" + generateSession(),
            requestOptions
        )
            .then((response) => response.json())
            .then((result) => {

                if (!result.success)
                    location.href = "uniwebview://action?key=error&message=" + error;

                if (result.success)
                    setMessages(result.messages)


            })
            .catch((error) => {
                    console.log("error", error)
                    location.href = "uniwebview://action?key=error&message=" + error;

                }
            );


    }

    const sendMessage = () => {
        setShowSendButton(false);
        var raw = JSON.stringify({
            "sender_id": loggedUser.id,
            "recipient_id": receiver.id,
            "body": inputEl.current.value,
            "session": generateSession(),
            "status": "unread",
        });

        var requestOptions = {
            method: "POST",
            headers: helpers.getHeaders(),
            redirect: "follow",
            body: raw,
        };

        fetch(
            config.url + "messages",
            requestOptions
        )
            .then((response) => response.json())
            .then((result) => {

                    if (!result.success)
                        location.href = "uniwebview://action?key=error&message=" + error;

                    if (result.success) {

                        // setMessages(result.messages)
                        getMessages()
                        inputEl.current.value = '';
                        setShowSendButton(false)
                    }
                }
            )
            .catch((error) => {
                    console.log("error", error)
                    location.href = "uniwebview://action?key=error&message=" + error;

                }
            );


// 'sender_id' => 'required',
        //     'recipient_id' => 'required',
        //     'body' => 'required',
        //     'status' => 'required'


    }


    useEffect(() => {
        if (localStorage.getItem("user_id"))
            getUser(localStorage.getItem("user_id"), setLoggedUser);
        if (localStorage.getItem("receiver_id"))
            getUser(localStorage.getItem("receiver_id"), setReceiver);

    }, []);

    const processBackButtonClick = () => {
        console.log("back")
        location.href = "uniwebview://action?key=back";
    }
    const getUser = (userId, setCallback) => {


        var requestOptions = {
            method: "GET",
            headers: helpers.getHeaders(),
            redirect: "follow",
        };

        fetch(
            config.url + "users/" + userId,
            requestOptions
        )
            .then((response) => response.json())
            .then((result) => {
                if (result.success)
                    setCallback(result.user);
            })
            .catch((error) => {
                    location.href = "uniwebview://action?type=error?message=" + error;
                    console.log("error", error)
                }
            );
    }

    const handleKeyDown = (e) => {
        if (e.key === 'Enter') {
            window.focus();

// Remove focus from any focused element
            if (document.activeElement) {
                document.activeElement.blur();
            }


        }
    }

    return (<div className={"messages " + config.theme}>

            {
                receiver && loggedUser ?
                    <div ref={containerRef}>
                        <div className={"messages-header"}>
                            <div className={"back-arrow-container"} onClick={() => {
                                processBackButtonClick();
                            }
                            }>
                                <img src={BackArrow.substring(1)} alt=""/>
                            </div>
                            <aside>
                                <a href={"uniwebview://action?type=user&user_id=" + receiver.id}>
                                    <ProfilePicture user={receiver} showUsername={false}/>
                                </a>
                            </aside>
                            <main>
                                <span> {receiver.name}</span>
                                <span>@{receiver.email.replace('@ikin.com', "")}</span>
                            </main>
                        </div>

                        <div className={"messages-container"} ref={chatContainer}>
                            {
                                messages.length > 0 ?
                                    <div>
                                        {
                                            messages.map((message, index) => {
                                                return <Message key={index} message={message}/>
                                            })
                                        }
                                    </div>
                                    : <div className={"no-messages-container"}>
                                        <span>
                                            Send a message. Say hi.
                                        </span>
                                    </div>

                            }
                        </div>
                        <div className={'send-box-container'}>
                            <ProfilePicture user={loggedUser} showUsername={false}></ProfilePicture>
                            <input ref={inputEl} placeholder={"Send Message"} type="text" onChange={onChangeHandler}
                                   onKeyDown={handleKeyDown}/>


                            {showSendButton &&
                                <div onClick={sendMessage} className={"message-send-button"}>

                                    <img src={sendLight.substring(1)} alt="send button"/>

                                </div>
                            }
                            {showSendButton ||
                                <div className={"message-send-button"}>

                                    <img src={send.substring(1)} alt="send button"/>
                                </div>
                            }
                        </div>
                    </div>
                    :
                    <div>

                        <SelectUsers setDisabled={setDisabled} handleSelectedIds={setSelectedUser} multi={false}/>
                        <div className={"button message-button"} onClick={handleSubmit}
                             style={disabled ? {opacity: 0} : {background: config.theme === "light" ? "#FFF": "#1C8FAA", opacity: 1}}>
                            <div className={"label"}>Message</div>
                        </div>
                    </div>
            }
        </div>
    );
}

export default Messages;
