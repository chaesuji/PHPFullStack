// token 저장 및 수정, 가져오기 수행

const TOKEN_ID = "php506_token";

// 토큰 가져오기
const getToken = () => {
    return window.localStorage.getItem(TOKEN_ID);
};

// 토큰 저장
const setToken = (token) => {
    window.localStorage.setItem(TOKEN_ID, token);
    return true;
};

// 토큰 삭제
const destroyToken = () => {
    window.localStorage.removeItem(TOKEN_ID);
    return true;
};

export default {
    getToken,
    setToken,
    destroyToken
};