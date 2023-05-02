// 데이터 타입

// ---------------------
// 기본 데이터 타입
// ---------------------

// 1. 숫자 (number)
let num = 1;

// 2. 문자열 (string)
let str = "안녕";

// 3. 불리언 (boolean)
let bool = true;

// 4. null
let v_null = null;

// 5. undefined : 값이 없는 상태의 변수
let test;

// 6. 심볼 (symbol) : 변경이 불가능한 원시 값
// S_CONST1 === S_CONST2 > false
const S_CONST1 = Symbol("심볼입니다.");
const S_CONST2 = Symbol("심볼입니다.");

// ---------------------
// 객체 타입
// ---------------------
// 0. JSON
let obj1 = {
    u_name: "홍길동",
    u_age: 30,
    u_gender: "남자",
    test: function test(){
        console.log("객체 함수 테스트");
    },
    test1: function(){
        console.log("객체 함수 테스트-익명함수");
    },
    addr: {
        addr1: "대구",
        addr2: "중구"
    }
};
// > obj1.u_name = '홍길동' 

// 1. 배열 (Array)
// arr[0] = 탕수육
let arr = ["탕수육", "짜장면", "짬뽕"];

// ---------------------
// 2. Date
// 3. Object
