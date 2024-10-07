import React, {useState} from "react";

import useImageOnLoad from '../hooks/ImageOnLoad'

const Thumb = ({post}) => {
    const [load, setLoad] = useState()
    return (
        <div className={"thumb"}>
            <a href={"uniwebview://action?type=post&post_id=" + post.id}>
                {!load && post.thumb && <img src={post.thumb.small} style={{opacity:0}}/>}
                <img
                    style={load ? {display: 'block'} : {display: 'none'}}
                    onLoad={() => {
                        setLoad(true)
                    }}
                    src={post.thumb["medium"]}
                    alt="fullImage"
                />


            </a>
        </div>
    );
};

export default Thumb;
