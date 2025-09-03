export const url = localStorage.getItem("host") || process.env.REACT_APP_API_URL || 'http://localhost:8000/api/v1/';
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

