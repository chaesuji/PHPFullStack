// const now = new Date('2023-04-30 15:20:30'); 날짜 지정 가능
const now = new Date();

// 년도만 가져오는 메소드 : getFullYear()
console.log(now.getFullYear() + "년");

// 월을 가져오는 메소드 : getMonth(), +1을 해줘야 현재 월과 같아짐
console.log((now.getMonth() + 1) + "월");

// 날짜를 가져오는 메소드 : getDate()
console.log(now.getDate() + "일");

// 요일을 가져오는 메소드 : getDay() / 일요일 0 ~ 토요일 6
console.log(now.getDay() + "요일");

// 리눅스 시간을 가져오는 메소드 : getTime() / 1970.01.01 기준으로 몇 초가 지났는지 가져옴
console.log("1970.01.01 ~ " + now.getTime());

// 시간을 가져오는 메소드 : getHours()
console.log(now.getHours() + "시");

// 분을 가져오는 메소드 : getminutes()
console.log(now.getMinutes() + "분");

// 초를 가져오는 메소드 : getSeconds();
console.log(now.getSeconds() + "초");

// 밀리초를 가져오는 메소드 : getMilliseconds();
console.log(now.getMilliseconds() + "밀리초");

// 기준일 : 2022.09.30 19:20:10
// 현재 기준으로 몇일 전인지 출력하기
let start = new Date('2022-09-30 19:20:10');
let end = new Date();

let ddd = end.getTime() - start.getTime();
// let result = Math.ceil(ddd / (1000*60*60*24)); // 1000*60*60*24 = 1일 ms
let result = Math.round(ddd / (1000*60*60*24*30));

console.log(result);