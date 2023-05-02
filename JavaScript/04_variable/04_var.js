// ---------------------
// 변수 
// var : 중복 선언 가능, 재할당 가능, 함수레벨 스코프
// let : 중복 선언 불가능, 재할당 가능, 블록레벨 스코프
// ---------------------
// var u_name = "홍길동";

// var u_name = "갑순이"; // 중복 선언
// u_name = "갑돌이"; // 재할당(변수의 값 변경)
// console.log( u_name );

// let u_age = 20;

// u_age = 30; // 재할당
// console.log( u_age );

// ---------------------
// 상수(const) : 변하지 않는 값, 재할당 불가능, 블록레벨 스코프
// ---------------------

// const gender = "남자";
// gender = "여자";

// ---------------------
// 스코프 : 변수에 접근할 수 있는 범위
// 함수 : 함수 내에서만 유효, 함수 외부에서는 참조할 수 없음 (함수 내부 : 지역변수 / 함수 외부 : 전역변수)
// 블록 : 모든 코드 블록(중괄호 : {}, 함수/if/for/while/try-catch)내에서 선언된 변수는 코드 블록 내에서만 유효, 코드 블록 외부에서는 참조할 수 없음(코드 블록 내 : 지역변수)
// ---------------------

// 전역 스코프
let u_name = "홍길동";

// 함수 레벨 스코프 : 함수 내에서만 접근할 수 있는 변수
function test(){
    console.log(u_name);
    let u_age = 30;
    console.log(u_age);
}

// 블록레벨 스코프 : 블록({}) 안에서 선언된 변수는 블록 안에서만 사용 가능한 변수
function test1(){
    if( true ){
        let v_test1 = "함수 테스트1";
        var v_var1 = "var로 선언";
    }
    // console.log(v_test1);
    console.log(v_var1);
}

// 호이스팅 (hoisting) : 인터프리터가 변수와 함수의 메모리 공간을 선언 전에 미리 할당하는 것
// (인터프리터 : 프로그래밍 언어의 소스 코드를 바로 실행하는 컴퓨터 프로그램 또는 환경)
// 코드가 실행되기 전에 변수와 함수를 최상단에 끌어올려지는 것

// 변수의 생명주기
function var_test(){
    let var_test = 0; // 선언(생성), 값 할당
    console.log(var_test);
    return var_test; // 소멸 
}
// 선언 - 초기화 - 할당
// 1 선언 : var/let/const 중 필요한 선언 키워드를 통해 선언 -> 키워드에 따라 변수 특성이 결정
// 2 초기화 : 선언 키워드를 통해 이름이 정해진 변수에 값을 저장하기 위한 메모리 공간을 확보하고 암묵적으로 undefined를 할당함
// 3 할당 : 할당 연산자(=) 을 통해 이루어지며 모든 선언 키워드의 할당은 런 타임 과정에서 이루어짐

console.log(htest());
// console.log("55행 : " + vartest);
// console.log("56행 : " + lettest);
// console.log("57행 : " + consttest);
function htest(){
    return "함수 : htest";
}

var vartest = "var => var 변수";
console.log("55행 : " + vartest);

// TDZ의 제약을 받음 -> let, const
// TDZ(Temporal Dead Zone, 일시적인 사각지대) : 스코프의 시작 지점부터 초기화 시작 지점까지의 구간
let lettest = "let => let 변수"; // 메모리가 할당되지 않아 참조 에러 발생
const consttest = "const => const 상수";