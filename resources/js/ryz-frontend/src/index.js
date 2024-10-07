import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import {
    BrowserRouter,
    Routes,
    Route
} from "react-router-dom";
import Home from "./Components/Home";
import Share from "./Components/Share";
import queryString from 'query-string'
import Posts from "./Components/Posts";
import Messages from "./Components/Messages";
import Search from "./Components/Search";
import * as helpers from './Helpers';
// const query = new URLSearchParams(this.props.location.search);


const value = queryString.parse(window.location.search);
// const token=value.token;


localStorage.clear();
localStorage.setItem('token', value.token);
localStorage.setItem('user_id', value.user_id);

if (value.post_id) {
    localStorage.setItem('post_id', value.post_id);
}
if (value.following) {
    localStorage.setItem('following', value.following);

}
if(value.receiver_id ){
    localStorage.setItem('receiver_id', value.receiver_id);
}

if(value.host){
    console.log(helpers.replaceInvalidCharacters(value.host));
    localStorage.setItem('host', helpers.b64DecodeUnicode(helpers.replaceInvalidCharacters(value.host)));
}

if(value.theme){
    localStorage.setItem('theme', value.theme);
}


const section = document.getElementById('root').getAttribute('data-section');


let r = <Home/>;
let base = "/frontend"

switch (section) {
    case 'home':
        r = <Home/>;
        base = "/home.html/";
        break;
    case 'share':
        r = <Share/>;
        // base = "/share.html?user_id="+ value.user_id + "&post_id=" + value.post_id + "&token=" + value.token;
        base = "/share.html/";
        break;

    case 'posts':
        r = <Posts/>;
        base = "/posts.html/";
        break;
    case 'messages':
        r = <Messages/>;
        base = "/messages.html/";
        break;
    case 'search':
        r =<Search />;
        base = "/search.html/";
    default:
        base = "/frontend"
        break;
}


if(section){
    ReactDOM.render(
        <React.StrictMode>
            {r}
        </React.StrictMode>,
        document.getElementById('root')
    );
}else {


    ReactDOM.render(
        <React.StrictMode>
            <BrowserRouter basename={base}>
                <Routes>
                    {section != null ?

                        <Route path="/" element={r}/>
                        :
                        <>
                            <Route path="/" element={<Home/>}/>
                            <Route path="share" element={<Share/>}/>
                            <Route path="posts" element={<Posts/>}/>
                            <Route path="messages" element={<Messages/>}/>
                            <Route path="search" element={<Search/>}/>
                        </>
                    }
                </Routes>
            </BrowserRouter>
        </React.StrictMode>,
        document.getElementById('root')
    );
}
