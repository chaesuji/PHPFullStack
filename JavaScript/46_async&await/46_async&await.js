// function delay(){
//     const delayTime = Date.now() +2000;
//     while(Date.now() < delayTime){
//         console.log('B');
//     }
// }
// console.log('A');
// delay();
// console.log('C');

// function delay(){
//     return new Promise((resolve, reject) => {
//         setTimeout(() => {
//             console.log('A');
//             resolve();
//         }, 1000);
//     });
// }
// function BBB(){
//     return new Promise((resolve) => {
//         setTimeout(() => {
//             console.log('B');
//             resolve();
//         }, 2000);
//     })
// }
// delay()
// .then(BBB)
// .then(() => console.log('C'))

// function delay(){
//     return new Promise((resolve) => {
//         const delayTime = Date.now() +2000;
//         while(Date.now() < delayTime){}
//         resolve('B');
//     })
// }
// console.log('A');
// delay()
// .then(b => console.log(b)) // 성공했을 때 resolve()안에 있는 값을 b에 담음
// console.log('C')
// => A C B

// jse -> 스택구조
// settimeout() -> 브라우저 -> jse

// asyne로 비동기 처리
// async function delay1(){
//     const delayTime = Date.now() +2000;
//     while(Date.now() < delayTime) {}
//     return 'B';
// }
// console.log('A');
// delay1()
// .then(b => console.log(b));
// console.log('C')

// await : async가 붙은 함수 안에서만 사용 가능
// function ddelay(ms){
//     // return new Promise(resolve => setTimeout(resolve, ms));
//     setTimeout(() => {}, ms)
// }
// function getA() {
//     ddelay(1000); // 
//     return 'A';
// }
// function getB() {
//     ddelay(2000);
//     return 'B';
// }
function ddelay(ms){
    return new Promise(resolve => setTimeout(resolve, ms))
}
async function getA() { 
    await ddelay(2000); 
    return 'A'; // Promise 객체로 리턴
}
async function getB() {
    await ddelay(5000);
    return 'B';
}
// awiat : 기다리는 함수 / promise를 반환하고 async인 함수에 쓰여야 함
// 코드를 실행하고 결과를 받아올 때까지 코드를 실행하지 않고 기다림

// console.log(getA() + getB());

// getA()
// .then(a => console.log(a))
// getB()
// .then(b => console.log(b))

// promise 방식으로 출력
// getA()
// .then(a => {
//     return getB()
//     .then(b => console.log(`${a} : ${b}`))
// });

// async를 이용할 경우
async function getAll(){
    const strA = await getA();
    const strB = await getB();

    console.log(`${strA} : ${strB}`);
}

// getAll();
// .catch() // > 에러가 날 경우 reject를 사용하지 않아도 바로 catch

// 병렬 처리 방법
async function getAllll(){
    Promise.all([getA(), getB()])
    .then(all => console.log(all.join(' : '))); // join() : 여러 개의 값을 하나로 이어줌
}
// all() : promise 객체를 배열 형태로 저장됨
// join() : all() 메서드를 통해 배열 형태로 저장된 값을 ()안의 값으로 이어줌

getAllll();

