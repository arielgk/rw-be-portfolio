import React, {useEffect} from "react";
import * as config from "../../config";
import {useNavigate, Link} from "react-router-dom";


const Navbar= () =>{

    const navigate = useNavigate();

    useEffect(() => {

        if(localStorage.getItem("token") === null) {
            navigate("/login");
        }
    }, []);

    function logout() {
        const headers = new Headers();
        headers.append('Authorization', "Bearer " + localStorage.getItem('token'));

        const requestOptions = {
            method: 'GET',
            headers,
            redirect: 'follow'
        };
        fetch(config.API_URL + '/users/logout', requestOptions)
            .then(res => res.json())
            .then(result => {
                    localStorage.removeItem('token');
                    navigate('/login');
                }
            )
    }

    return (
    <div>
        <ul id="nav">
          <li>
            <Link to="/">Posts</Link>
          </li>
          <li>
            <Link to="/restore">Restore</Link>
          </li>
          <li>
            <Link to="" onClick={logout}>Logout</Link>
          </li>
        </ul>
    </div>
    );
}
export default Navbar;