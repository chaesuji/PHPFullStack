// 타이머 함수

// 1. setTimeout() / clearTimeout()
const timeout = setTimeout(() => console.log("A"), 2000); // 콜백함수, 시간(밀리초 기준)
clearTimeout(timeout);

// 2. setInterval() / clearInterval() 일정시간마다 반복 
const myinterval = setInterval(() => console.log("B"), 1000);
clearInterval(myinterval);

// 1~5를 콘솔에 1초마다 출력해주세요
let i = 1;
// const num_interval = setInterval(() => console.log(i++), 1000);
// setInterval(() => clearInterval(num_interval), 5000);

// const interval1 = setInterval(() => {
//     console.log(i);
//     if(i++ === 5){
//         clearInterval(interval1);
//     }
// }, 1000)

// 현재 시간
const ppp = document.querySelector('#ppp');

// getClock() : setInterval()을 읽어들일 때 딜레이 방지
// padStart() : 문자열 길이만큼 있는 공백에 원하는 문자열 넣기
function getClock(){
    const now = new Date();
    // toLocaleString() : 접속하는 지역에 맞는 시간 포맷
    const AMPM = now.getHours() <= 12 || 0 < now.getHours() ? "오전" : "오후";
    const H = String(now.getHours()).padStart(2, "0");
    const M = String(now.getMinutes()).padStart(2, "0");
    const S = String(now.getSeconds()).padStart(2, "0");
    ppp.innerHTML = AMPM+" "+H+":"+M+":"+S;
}

getClock();
let nowtime = setInterval(() => getClock(), 1000);

const btn1 = document.querySelector('#btn1');
btn1.addEventListener('click', () => {
    clearInterval(nowtime);
});
const btn2 = document.querySelector('#btn2');
btn2.addEventListener('click', () => {
    getClock();
    nowtime = setInterval(() => getClock(), 1000);
});

// 콜백함수 (getClock(), ~~) X -> 함수로 인식하고 함수 실행한 값을 인수에 담음 
// (getClock, ~~) O