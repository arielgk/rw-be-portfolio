import React from 'react';
import p1 from '../defaultProfileIcons/p1.png';
import p2 from '../defaultProfileIcons/p2.png';
import p3 from '../defaultProfileIcons/p3.png';
import p4 from '../defaultProfileIcons/p4.png';
import p5 from '../defaultProfileIcons/p5.png';
import p6 from '../defaultProfileIcons/p6.png';
import p7 from '../defaultProfileIcons/p7.png';
import p8 from '../defaultProfileIcons/p8.png';



const ProfilePicture = ({user, showUsername=true}) => {
    const getProfileIcon = (icon) => {
        switch (icon) {
            case 'icon1':
                return p1;
            case 'icon2':
                return p2;
            case 'icon3':
                return p3;
            case 'icon4':
                return p4;
            case 'icon5':
                return p5;
            case 'icon6':
                return p6;
            case 'icon7':
                return p7;
            case 'icon8':
                return p8;
            default:
                return p1;
        }
    }
    return (

        <div className={'profile-picture'}>

            <div className={user.profileImage && user.profileImage.small !== "" ? "profileImage": "profileIcon"} style={{background: user.profilecolor}}>
                { user.profileImage && user.profileImage.small !== ""
                    ? <img src={user.profileImage.small} alt="profile image"/>
                    : <img src={getProfileIcon(user.profilepicture).substring(1)} alt="profile image"/>
                }

            </div>
            {showUsername &&
                <div className={"user"}>
                    <span> {user.name}</span> @{user.email.replace('@ikin.com', "")}
                </div>
            }


        </div>


    )
}
export default ProfilePicture;
