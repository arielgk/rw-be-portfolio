import React, {useEffect} from "react";
import * as config from "../../config";
import {useNavigate} from "react-router-dom";


const Restore= () =>{

    const navigate = useNavigate();

    useEffect(() => {

        if(localStorage.getItem("token") === null) {
            navigate("/login");
        }
    }, []);

    function RestorePosts() {
        const headers = new Headers();
        headers.append('Authorization', "Bearer " + localStorage.getItem('token'));

        const requestOptions = {
            method: 'POST',
            headers,
            redirect: 'follow'
        };
        fetch(config.API_URL + '/posts/restore', requestOptions)
            .then(res => res.json())
    }

    function RestoreUsers() {
        const headers = new Headers();
        headers.append('Authorization', "Bearer " + localStorage.getItem('token'));

        const requestOptions = {
            method: 'POST',
            headers,
            redirect: 'follow'
        };
        fetch(config.API_URL + '/users/restore', requestOptions)
            .then(res => res.json())
    }

    function RestoreComments() {
        const headers = new Headers();
        headers.append('Authorization', "Bearer " + localStorage.getItem('token'));

        const requestOptions = {
            method: 'POST',
            headers,
            redirect: 'follow'
        };
        fetch(config.API_URL + '/comments/restore', requestOptions)
            .then(res => res.json())
    }

    function RestoreLikes() {
        const headers = new Headers();
        headers.append('Authorization', "Bearer " + localStorage.getItem('token'));

        const requestOptions = {
            method: 'POST',
            headers,
            redirect: 'follow'
        };
        fetch(config.API_URL + '/likes/restore', requestOptions)
            .then(res => res.json())
    }

    function RestoreRelations() {
        const headers = new Headers();
        headers.append('Authorization', "Bearer " + localStorage.getItem('token'));

        const requestOptions = {
            method: 'POST',
            headers,
            redirect: 'follow'
        };
        fetch(config.API_URL + '/relations/restore', requestOptions)
            .then(res => res.json())
    }

    function RestoreThumbs() {
        const headers = new Headers();
        headers.append('Authorization', "Bearer " + localStorage.getItem('token'));

        const requestOptions = {
            method: 'POST',
            headers,
            redirect: 'follow'
        };
        fetch(config.API_URL + '/thumbs/restore', requestOptions)
            .then(res => res.json())
    }

    function RestoreMessages() {
        const headers = new Headers();
        headers.append('Authorization', "Bearer " + localStorage.getItem('token'));

        const requestOptions = {
            method: 'POST',
            headers,
            redirect: 'follow'
        };
        fetch(config.API_URL + '/messages/restore', requestOptions)
            .then(res => res.json())
    }

    function RestoreShare() {
        const headers = new Headers();
        headers.append('Authorization', "Bearer " + localStorage.getItem('token'));

        const requestOptions = {
            method: 'POST',
            headers,
            redirect: 'follow'
        };
        fetch(config.API_URL + '/share/restore', requestOptions)
            .then(res => res.json())
    }

    function RestoreTags() {
        const headers = new Headers();
        headers.append('Authorization', "Bearer " + localStorage.getItem('token'));

        const requestOptions = {
            method: 'POST',
            headers,
            redirect: 'follow'
        };
        fetch(config.API_URL + '/tags/restore', requestOptions)
            .then(res => res.json())
    }

    function RestoreShare() {
        const headers = new Headers();
        headers.append('Authorization', "Bearer " + localStorage.getItem('token'));

        const requestOptions = {
            method: 'POST',
            headers,
            redirect: 'follow'
        };
        fetch(config.API_URL + '/share/restore', requestOptions)
            .then(res => res.json())
    }

    function RestoreLikes() {
        const headers = new Headers();
        headers.append('Authorization', "Bearer " + localStorage.getItem('token'));

        const requestOptions = {
            method: 'POST',
            headers,
            redirect: 'follow'
        };
        fetch(config.API_URL + '/likes/restore', requestOptions)
            .then(res => res.json())
    }

    function RestoreFeeds() {
        const headers = new Headers();
        headers.append('Authorization', "Bearer " + localStorage.getItem('token'));

        const requestOptions = {
            method: 'POST',
            headers,
            redirect: 'follow'
        };
        fetch(config.API_URL + '/feeds/restore', requestOptions)
            .then(res => res.json())
    }

    function RestoreVideos() {
        const headers = new Headers();
        headers.append('Authorization', "Bearer " + localStorage.getItem('token'));

        const requestOptions = {
            method: 'POST',
            headers,
            redirect: 'follow'
        };
        fetch(config.API_URL + '/videos/restore', requestOptions)
            .then(res => res.json())
    }

    function RestoreImages() {
        const headers = new Headers();
        headers.append('Authorization', "Bearer " + localStorage.getItem('token'));

        const requestOptions = {
            method: 'POST',
            headers,
            redirect: 'follow'
        };
        fetch(config.API_URL + '/images/restore', requestOptions)
            .then(res => res.json())
    }

    function DumpDB() {
        const headers = new Headers();
        headers.append('Authorization', "Bearer " + localStorage.getItem('token'));

        const requestOptions = {
            method: 'POST',
            headers,
            redirect: 'follow'
        };
        fetch(config.API_URL + '/restore/dumpdb', requestOptions)
            .then(res => res.json())
            .then((res) => {
                window.open(res.sql_url);
            })
    }

    function RestoreAll() {
        RestorePosts();
        RestoreComments();
        RestoreImages();
        RestoreVideos();
        RestoreFeeds();
        RestoreLikes();
        RestoreRelations();
        RestoreThumbs();
        RestoreMessages();
        RestoreShare();
        RestoreTags();
        // RestoreUsers();
    }

    return (
    <div>
        <ul id="restore">
            <li>
                <button onClick={DumpDB}> Dump Database </button>
            </li>
            <li>
                <button onClick={RestoreAll}> Restore Factory Defaults</button>
            </li>
        </ul>

    </div>
    );
}
export default Restore;
