// 함수

// 함수 선언문
function add( a, b ){
    return a + b;
}
// ---------------------

// 함수 표현식
let add2 = function(a,b){ // > add2(2,2) = 4
    return a+b;
};
// ---------------------

// 화살표 함수 : 리턴 값만 있는 경우 한 줄로 표현 가능
// 함수 내부의 내용이 반환값(return)만 있다면 코드블록과 return을 생략 가능함 
// 인자를 하나만 받는다면 매개변수의 괄호도 생략가능 -> 인자가 없으면 생략할 수 없음
let test1 = () => "안녕";
// ↑ === ↓
// function test1(){
//     return "안녕";
// }
// ---------------------

let add3 = (a,b) => a+b;

// 익명 함수
// function(a, b){
//     return a+b;
// }
// ---------------------

// Function 생성자 함수
let add4 = new Function('a', 'b','return a+b;');
// ---------------------