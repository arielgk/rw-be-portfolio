import React, {useEffect, useState} from 'react';
import * as config from '../../config';
import {useNavigate} from "react-router-dom";

const Login = () => {
    const [user, setUser] = useState('');
    const [password, setPassword] = useState('');
    const navigate = useNavigate();

    useEffect(() => {
        if (localStorage.getItem('token')) {
            navigate('/');
        }
    }, []);


    const handleSubmit = (e) => {
        e.preventDefault();
        fetch(config.API_URL + '/users/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                email: user + "@ikin.com",
                password
            })
        })
            .then(res => res.json())
            .then((result) => {
                console.log(result);

                if (result.success) {
                    console.log(result.token)
                    localStorage.setItem('token', result.token);
                    localStorage.setItem('username', user);
                    navigate('/');

                }
            }).catch((error) => {
            console.log(error);
        });

    }

    const setValue = (e) => {
        if (e.target.name === 'user') {
            setUser(e.target.value);

        } else if (e.target.name === 'password') {
            setPassword(e.target.value);
        }
    }

    return (
        <div>

            <h1>Login</h1>
            <input name="user" type="text" onChange={setValue}/>
            <input name="password" onChange={setValue} type="password"/>

            <button onClick={handleSubmit}>Send</button>
        </div>
    )
}


export default Login;



