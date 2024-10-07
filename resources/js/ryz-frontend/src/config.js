// export const url ='http://192.168.1.45/api/v1/';
// export const url ='http://72.167.43.229/api/v1/';
// export const url ="http://02b8-191-85-122-144.ngrok.io/api/v1/"


export const url = localStorage.getItem("host");
export const theme = "dark";
export const themeConfig = {
    dark:{
        inputBorderColor: '#ADAEB0',
        inputBorderColorActive: '#FFFFFF',

    },
    light:{

        inputBorderColor: '#090814',
        inputBorderColorActive: '#3C3B8E',
    }

}

