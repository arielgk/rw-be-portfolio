import React, {useEffect, useState, useRef} from "react";
import * as config from "../config";
import ProfilePicture from "./ProfilePicture";
import queryString from 'query-string'
import Select, {components} from "react-select";
import * as helpers from "../Helpers";

const getProfileIcon = (icon) => {
    switch (icon) {
        case 'icon1':
            return apple;
        case 'icon2':
            return apple2;
        case 'icon3':
            return box;
        case 'icon4':
            return cassette;
        case 'icon5':
            return circle;
        case 'icon6':
            return duck;
        case 'icon7':
            return pineapple;
        case 'icon8':
            return ray;
        default:
            return apple;
    }
}
const CustomOption = (props) => {
    return (

        <components.Option {...props}>
            <div className={"flex-username menu"}>
                <ProfilePicture user={props.data.value}/>
            </div>
        </components.Option>
    )
}
const CustomMultiValue = (props) => {

    const style = {backgroundColor: props.data.value.profilecolor}
    return (
        <components.MultiValue {...props}>
            <div className={"flex-username"}>
                <ProfilePicture user={props.data.value}/>
            </div>
        </components.MultiValue>
    )
}

const CustomSingleValue = (props) => {
    const style = {backgroundColor: props.data.value.profilecolor}
    return (
        <components.SingleValue {...props}>
            <div className={"flex-username"}>
                <ProfilePicture user={props.data.value}/>
            </div>
        </components.SingleValue>
    )
}
const placeholder = () => {
    return (
        <div>
            No more users
        </div>
    )
}
const SelectUsers = ({handleSelectedIds, setDisabled, label, followings, multi = true}) => {

    const [users, setUsers] = useState([]);
    const [selected, setSelected] = useState([]);
    const value = queryString.parse(window.location.search);
    const inputEl = useRef(null);
    const [enableSelect, setEnableSelect] = useState(false);


    const handleSingleChange = () => {

    }

    const handleChange = (selectedOption) => {




        if (multi) {
            if (selectedOption.length > 0) {
                setDisabled(false);
            } else {
                setDisabled(true);
            }
            const values = selectedOption.map(i => i.value.id);


            handleSelectedIds(values)
            setSelected(values)
        } else {

            console.log(selectedOption);
            handleSelectedIds(selectedOption.value)


            setDisabled(false);
        }

    };
    const customStyles = {

        dropdownIndicator: (provided, state) => ({
            display: 'none',
        }),
        control: (provided, state) => ({
            ...provided,
            background: 'transparent',
            color: 'white',
            borderColor: state.isFocused ? config.themeConfig[config.theme].inputBorderColorActive : config.themeConfig[config.theme].inputBorderColor,
            borderWidth: state.isFocused ? '1px' : '1px',
            boxShadow: state.isFocused ? 'none' : 'none',
        }),
        valueContainer: (provided, state) => ({
            ...provided,
            color: 'white',
            borderColor: state.isFocused ? config.themeConfig[config.theme].inputBorderColorActive : config.themeConfig[config.theme].inputBorderColor,
            borderWidth: state.isFocused ? '1px' : '1px',

            boxShadow: state.isFocused ? 'none' : 'none',


        }),
        placeholder: (provided, state) => ({
            ...provided,
            color: '#ADAEB0',
        }),
        menuList: (provided, state) => {
            console.log(state.children.length)

            return (
                {
                    ...provided,
                    // background: '#1c8faa',

                    background: '#ffffff',
                    color: 'white',
                    display: 'flex',
                })
        },
        singleValue: (provided, state) => ({
            ...provided,
            background: 'white',
            borderRadius: '2px',
            border: '1px solid #ADAEB0',
            padding: '2px',
            boxShadow: state.isFocused ? 'none' : 'none',


        }),
        menu: (provided, state) => ({
            ...provided,
            background: 'blue',
            margin: 0,
            color: "white"
        }),
        noOptionsMessage: (provided, state) => ({
            ...provided,
            color: 'black',
            fontSize: '14px',
            width: '100%',
        }),
        loadingMessage: (provided, state) => ({
            ...provided,
            color: 'white'
        }),
        option: (provided, state) => ({
            ...provided,
            // background: '#1c8faa',
            background: '#ffffff',
            width: '50%',

        }),
        input: (provided, state) => ({
            ...provided,
            color: 'white',
        }),
        multiValue: (provided, state) => ({
            ...provided,
            // background: 'transparent',
            border: '1px solid #3a3a3a'


        }),
        multiValueLabel: (provided, state) => ({
            ...provided,
            color: 'white'
        }),
        indicatorSeparator: (provided, state) => ({
            ...provided,
            display: 'none',
        })


    }

    useEffect(() => {

        let userid = localStorage.getItem("user_id");
        // console.log(userid)

        var requestOptions = {
            method: "GET",
            headers: helpers.getHeaders(),
            redirect: "follow",
        };

        fetch(
            config.url + "users",
            requestOptions
        )
            .then((response) => response.json())
            .then((result) => {
                if (result.success) {
                    let names = result.users.map(u => {

                        return {value: u, label: u.name};

                    }).filter(u => u.value.id != userid);

                    setUsers(names);
                }
            })
            .catch((error) => {
                    location.href = "uniwebview://action?type=error?message=" + error;
                    console.log("error", error)
                }
            );
    }, []);


    return (
        <div>
            {enableSelect || <div className={"select-overlay"} onClick={() => {
                setEnableSelect(true);
                inputEl.current.focus();
            }}>< /div>}
            <Select
                ref={inputEl}
                noOptionsMessage={placeholder}
                placeholder={users.length == 0 ? "Fetching users..." : "Select users..."}
                styles={customStyles}
                isMulti={multi}
                width={"80%"}
                // menuIsOpen={true}
                options={users}
                onChange={handleChange}
                components={{Option: CustomOption, MultiValue: CustomMultiValue, SingleValue: CustomSingleValue}}
            />


        </div>
    )
}


export default SelectUsers
;
