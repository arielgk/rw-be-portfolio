export const getHeaders = () => {
    var headers = new Headers();
    headers.append("accept", "application/json");
    headers.append("Content-Type", "application/json");
    headers.append(
        "Authorization",
        "Bearer " + localStorage.getItem("token")
    );

    return headers;
}

export const b64EncodeUnicode = (str) => {
    // first we use encodeURIComponent to get percent-encoded UTF-8,
    // then we convert the percent encodings into raw bytes which
    // can be fed into btoa.
    return btoa(encodeURIComponent(str).replace(/%([0-9A-F]{2})/g,
        function toSolidBytes(match, p1) {
            return String.fromCharCode('0x' + p1);
        }));
}

export const replaceInvalidCharacters = (string) => {
    return string.replaceAll("_", "/").replaceAll("-", "=").replaceAll(".", "+");
};
export const b64DecodeUnicode = (str) => {
    // Going backwards: from bytestream, to percent-encoding, to original string.
    return decodeURIComponent(atob(str).split('').map(function (c) {
        return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
    }).join(''));
}


