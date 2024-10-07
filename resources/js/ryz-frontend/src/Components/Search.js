import React, {useDebugValue, useEffect, useState} from 'react';
import Tag from './Tag';
import MasonryGrid from './MasonryGrid';
import * as config from '../config';
import * as helpers from '../Helpers';
import SearchSelectUsers from './SearchSelectUsers';
import searchIcon from '../Search.svg'

function useStateWithLabel(initialValue, name) {
    const [value, setValue] = useState(initialValue);
    useDebugValue(`${name}: ${value}`);
    return [value, setValue];
}

const Search = () => {
    const [disabled, setDisabled] = useStateWithLabel(true, "disabled");
    const [tags, setTags] = useStateWithLabel([], 'tags');
    const [selectedTags, setSelectedTags] = useStateWithLabel([], 'selectedTags');
    const [results, setResults] = useStateWithLabel([], 'results');
    const [selectedUser, setSelectedUser] = useStateWithLabel(null, 'selectedUsers');
    const [posts, setPosts] = useStateWithLabel([], 'posts');
    const [inputValue, setInputValue] = useStateWithLabel('', 'inputValue');
    const [hasSearch, setHasSearch] = useStateWithLabel(false, 'hasSearch');

    useEffect(() => {

        var raw = JSON.stringify({
            tags: selectedTags.map(tag => tag.name),
        });

        var requestOptions = {
            method: "POST",
            headers: helpers.getHeaders(),
            redirect: "follow",
            body: raw,


        };

        fetch(
            config.url + "search",
            requestOptions
        )
            .then((response) => response.json())
            .then((result) => {

                // if (!result.success)
                //     location.href = "uniwebview://action?type=error?message=" + error;

                if (result.success) {
                    console.log(result.posts);
                    setPosts(result.posts);

                }

            })
            .catch((error) => {
                    // location.href = "uniwebview://action?type=error?message=" + error;
                    console.log("error", error)
                }
            );


    }, [selectedTags])

    useEffect(() => {

        console.log(selectedUser)
        if (selectedUser)
            location.href= "uniwebview://action?type=user&user_id=" + selectedUser.id
        //
    }, [selectedUser])
    useEffect(() => {
        var raw = JSON.stringify({
            keyword: inputValue,
        });

        var requestOptions = {
            method: "POST",
            headers: helpers.getHeaders(),
            redirect: "follow",
            body: raw,


        };
        // if(inputValue.length === 0 && inputValue.length > 3) {


            fetch(
                config.url + "search/keyword",
                requestOptions
            )
                .then((response) => response.json())
                .then((result) => {

                    // if (!result.success)
                    //     location.href = "uniwebview://action?type=error?message=" + error;

                    if (result.success) {

                        setPosts(result.posts);

                    }

                })
                .catch((error) => {
                        // location.href = "uniwebview://action?type=error?message=" + error;
                        console.log("error", error)
                    }
                );
        // }
    }, [inputValue])


    useEffect(() => {


        var requestOptions = {
            method: "GET",
            headers: helpers.getHeaders(),
            redirect: "follow",

        };

        fetch(
            config.url + "tags",
            requestOptions
        )
            .then((response) => response.json())
            .then((result) => {

                if (!result.success)
                    location.href = "uniwebview://action?type=error?message=" + error;

                if (result.success) {

                    const tags = result.tags.map((item) => {
                        console.log(item.name.en);

                        // return item;
                        return Object.assign({}, item, {name: item.name.en, slug: item.slug.en});

                    })
                    console.log(tags)
                    setTags(tags);

                }

            })
            .catch((error) => {
                    location.href = "uniwebview://action?type=error?message=" + error;
                    console.log("error", error)
                }
            );
    }, []);


    const handleSearch = () => {


    }

    return (
        <div className={"search " + config.theme}>
            <div className={"search-users-container"}>
                <div className={"search-icon"}><img src={searchIcon.substring(1)} alt=""/></div>
                <div className="select-control-container">
                    <SearchSelectUsers setDisabled={setDisabled} handleSelectedIds={setSelectedUser}
                                       setInputValue={setInputValue} multi={false}/>
                    {/*<div className={"search-button"}>*/}

                    {/*    {disabled || <span onClick={handleSearch}>*/}
                    {/*    Search*/}
                    {/*</span>}*/}
                    {/*</div>*/}
                </div>
            </div>
            {tags.length > 0 &&
                <div className={"tags-container"}>

                    {tags.map((tag, index) => {
                        return <Tag key={index} setSelectedTags={setSelectedTags} selectedTags={selectedTags}
                                    tag={tag}/>
                    })}

                </div>
            }
            <div className={"results-container"}>

                {(posts.length == 0 && hasSearch) &&
                    <div>
                        <div className={"no-results"}>No results</div>
                    </div>

                }
                <MasonryGrid posts={posts}/>
            </div>
        </div>
    )
}

export default Search;
