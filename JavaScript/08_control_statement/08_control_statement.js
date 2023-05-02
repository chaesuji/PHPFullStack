// 제어문

// 조건문( if, switch )
if( 1 > 0 ){
    console.log("1은 0보다 크다");
}else if( 1 < 0 ){
    console.log("1은 0보다 작다");
}else{
    console.log("기타 등등");
}

let u_age = 30;
switch (u_age) {
    case 20:
        console.log("20살");
        break;

    default:
        console.log(u_age + "살");
        break;
}
// ---------------------

// 반복문( do-while, while, for, foreach, for...in, for...of )
let num = 0;
while ( num <= 3 ) {
    console.log(num);
    num++;
}

let dan = 1;
do {
    console.log("2 * " + dan + " = " + 2*dan);
    dan++;
} while ( dan <= 9 );

for(let i=1; i<=9; i++){
    console.log("2 * " + i + " = " + 2*i);
}

// foreach : 배열만 가능
let arr = [1,2,3,4];
arr.forEach(function(val){
    console.log(val);
});

arr = {
    u_name: "홍길동"
    ,u_age: 0
}

// for...in : 모든 객체를 루프 가능
for( let i in arr){
    console.log(i + " : " + arr[i]);
}

// for...of : iterable을 루프하면서 iterable의 요소들을 변수에 할당

// symbol.iterator : iterator protocol 을 준수한 객체 / Symbol.iterator가 반환한 이터레이터는 next 메서드를 가짐
// iterator protocol : 객체에 next 메소드가 존재, 그 메소드가 done과 value 속성을 가지는 객체 반환
// iterable : iterator protocol을 준수한 객체(= symbol.iterator를 프로퍼티 키로 사용한 메서드를 직접 구현하거나 프로토 타입 체인을 통해 상속받은 객체)
// next 메소드 : 순차적으로 index를 증가시키며 객체의 값을 리턴해주는 역할(index에 해당하는 값이 있을 경우 값을 리턴)
// done : 순서 상 값이 존재하지 않으면 true, 값이 존재하면 false
// value : 순서상의 값을 의미, 순서상의 값은 어떻게 정의하는가에 따라 달라짐
arr = [5,6,7,8];
arr.num = 9;
for( let z of arr){
    console.log(z); // 인덱스 배열만 순차적으로 배열에 할당
}
// ---------------------