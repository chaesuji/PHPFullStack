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

function sdf(){
    const now = new Date();
    const H = now.getHours();
    const M = now.getMinutes();
    const S = now.getSeconds();
    const ppp = document.querySelector('#ppp');
    ppp.innerHTML = H+":"+M+":"+S;
}

const nowtime = setInterval(() => sdf(), 500);

const btn = document.querySelector('#btn1');
btn.addEventListener('click', () => {
    clearInterval(nowtime);
});