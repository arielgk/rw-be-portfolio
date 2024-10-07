import React, {useEffect} from "react";
import * as config from "../../config";
import {useNavigate} from "react-router-dom";

const Posts = () => {


    const [posts, setPosts] = React.useState([]);
    const navigate = useNavigate();


    useEffect(() => {

        if(localStorage.getItem("token") === null) {
            navigate("/login");
        }
        getPosts();
    }, []);


    const getPosts = () => {


        const headers = new Headers();
        headers.append('Authorization', "Bearer " + localStorage.getItem('token'));

        const requestOptions = {
            method: 'GET',
            headers,
            redirect: 'follow'
        };


        fetch(config.API_URL + '/posts', requestOptions)
            .then(res => res.json())
            .then(result =>
                (
                    setPosts(result.posts)
                )
            )
    }

    function deletePost(post) {
        const headers = new Headers();
        headers.append('Authorization', "Bearer " + localStorage.getItem('token'));

        const requestOptions = {
            method: 'DELETE',
            headers,
            redirect: 'follow'
        };
        fetch(config.API_URL + '/posts/' + post.id, requestOptions)
            .then(res => res.json())
            .then(result =>
                (
                    getPosts()
                )
            )
    }

    return (
        <div>
            {posts.length > 0 ?
                <table className="min-w-full table-auto">
                    <thead className="justify-between">
                    <tr className="bg-gray-800">
                        <th className="px-16 py-2">
                            <span className="text-gray-300">id</span>
                        </th>
                        <th className="px-16 py-2">
                            <span className="text-gray-300">username</span>
                        </th>
                        <th className="px-16 py-2">
                            <span className="text-gray-300">description</span>
                        </th>


                        <th className="px-16 py-2">
                            <span className="text-gray-300">image</span>
                        </th>
                        <th className="px-16 py-2">
                            <span className="text-gray-300">Actions</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody className="bg-gray-200">

                    {posts.map(post => (

                        <tr key={post.id} className="bg-white border-4 border-gray-200">
                            <td>{post.id}</td>

                            <td>{post.user.email}</td>
                            <td>{post.description}</td>
                            <td> { post.thumb && <img src={post.thumb['small']} alt=""/>}</td>
                            <td>
                                <button onClick={() => {
                                    deletePost(post)
                                }}>Delete
                                </button>
                            </td>
                        </tr>
                    ))
                    }
                    </tbody>
                </table>


                : <div>No posts</div>}


        </div>
    )
}

export default Posts;
