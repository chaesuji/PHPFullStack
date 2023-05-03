// 데이터타입 - 객체

// 배열
let arr = [1,2,3,4,5];

// push() 메소드 : 배열에 값 추가
arr.push(6);

// delete() 메소드 : 배열의 값만 삭제(값이 있던 공간은 남아있음)
delete arr[5];

// splice() 메소드 : 배열의 요소 삭제 또는 교체
// splice(배열 방 번호, 자를 값의 수)
arr.splice(3, 1);

// splice(값을 넣을 앞의 값 방 번호, 삭제할 값의 개수, 삭제한 값의 공간에 들어갈 값)
arr.splice(2,0,3); // 배열에서 arr[2]에 값 3을 추가
arr.splice(3,1,4); // 배열의 arr[2]의 값을 3으로 변경

arr.splice(0,0,0); // 배열 맨 앞에 값 넣기
arr.splice(arr.length, 0, arr.length); // 배열 맨 끝에 값 넣기, arr.length : 배열의 크기
arr.splice(6,0,6);
arr.splice(2,1,3,5,6,7); // 3번째 매개변수부터는 가변파라미터로 모든 값을 추가

// indexOf() 메소드 : 배열에서 특정 요소를 찾는데 사용
arr.indexOf(4); // - > 7
// arr.indexOf(10); // -> -1
arr.lastIndexOf(7); // - > 11 

// arr.IndexOf(7,6); // (찾을 값, 찾을 위치)

// slice(시작값, 끝값) 메소드 : 배열 자르기
let str = 'abcdefg';
str.slice(2);

let filename = 'javascript.log.php';
let a = filename.slice(0,filename.indexOf('.')); // 0 ~ .
let b = filename.slice(filename.indexOf('.')+1, filename.lastIndexOf('.')); // 두번쨰 .(.제외를 위한 +1) ~ 마지막 .
let c = filename.slice(filename.lastIndexOf('.')+1); 

console.log(a);
console.log(b);
console.log(c);

// concat() 메소드 : 배열들의 값을 기존 배열에 합쳐서 새배열을 반환
let arr1 = [1,2,3];
let arr2 = [10,20,30];
let arr4 = [100,200,300];
let arr3 = arr1.concat(arr2, arr4);
console.log(arr3);

// includes() 메소드 : 배열이 특정 요소를 가지고 있는지 판별
let arr_ic = [1,2,3,4];
console.log(arr_ic.includes(2)); // 값이 있으면 true
console.log(arr_ic.includes(5)); // 값이 없으면 false

// sort() 메소드 : 배열의 요소를 아스키코드 기준으로 정렬해서 반환
const arrsort = [6,3,5,1,9,100,15,80,40];
// sort : 오름차순으로 정렬, 앞글자부터 오름차순으로 정렬
// arrsort.sort( // sort 실행 후 함수 호출
//     function(a,b){ // sort로 정렬된 배열 값을 각각 a,b에 차례대로 담음
//         return a - b; // a에서 b를 뺀 값이 양수이면 자리 바꿈, 음수면 자리 그대로
//     }
// );
arrsort.sort((a,b) => a-b);
arrsort.sort((a,b) => b-a); // 내림차순

// join() 메소드 : 배열의 모든 요소를 연결해서 하나의 문자열로 만듬
const arr_join = ["안녕","하세","요"];
arr_join.join(''); // 기본 쉼표를 빈 문자열로 대체 > 안녕하세요
arr_join.join('/'); // 안녕/하세/요
arr_join.join(); // 안녕,하세,요

// every() 메소드 : 배열의 모든 요소들이 주어진 함수의 조건에 통과하는지 판별 ( and )
const arr_every = [1,2,3,4,5];
// let result = arr_every.every(
//     function(val) {
//         return val <= 5;
//     }
// );
let result = arr_every.every(val => val <= 5)
console.log(result);

//모든 요소의 2로 나눈 나머지가 0인지 판별
// let result_1 = arr_every.every(
//     function(val){
//         return val % 2 === 0;
//     }
// )

let result_1 = arr_every.every(val => val % 2 === 0);

// some() 메소드 : 배열 안에 어떤 요소라도 주어진 함수를 통과하는지 판별 ( or )
const arrsome = [1,2,3,4,5];
// 요소 중 하나만 맞아도 true, 요소 중 조건에 맞는 요소가 하나도 없으면 false
let result_2 = arrsome.some(val => val >= 5);

// filter() 메소드 : 주어진 함수를 통과하는 모든 요소를 모아서 새로운 배열로 반환
const arrfilter = [1,2,3,4,5];
let result_3 = arrfilter.filter(val => val >= 3);