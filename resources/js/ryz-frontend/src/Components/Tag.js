import React from 'react';



const Tag = ({tag, selectedTags, setSelectedTags})=>{


    const handleClick = ()=>{
        if(selectedTags.includes(tag)){
            setSelectedTags(selectedTags.filter(t=>t!==tag))
        }else{
            setSelectedTags([...selectedTags, tag])
        }
    }

    return(
        <div  onClick={handleClick}  className={selectedTags.includes(tag) ? "tag selected" : "tag" }>
            #{tag.name}
        </div>
    )
}
export default Tag;
