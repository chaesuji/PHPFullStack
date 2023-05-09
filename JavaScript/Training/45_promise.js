// 콜백 함수를 이용해서 A, B, C 순서로 콘솔에 출력해주세요
// setTimeout(() => {
//     console.log('A')
//     setTimeout(() => {
//         console.log('B')
//         setTimeout(() => {
//             console.log('C')
//         }, 3000);
//     }, 2000);
// }, 1000);

// promise를 이용해서 A, B, C 순서로 콘솔에 출력해주세요
// (promise를 함수로 등록해서 구현)
// function printDelay(ms, str){
//     return new Promise((resolve) => {
//         setTimeout(() => {
//             console.log(str);
//             resolve();
//         }, ms);
//     });
// }
// printDelay(3000, 'A')
// .then(() => printDelay(2000, 'B'))
// .then(() => printDelay(1000, 'C'))

function myA(){
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            console.log('A');
            resolve(); 
            // reject('myA fail');
        }, 1000);
    });
}

function myB(){
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            console.log('B');
            resolve();
        }, 2000);
    });
}

function myC(){
    console.log('C');
}

// promise chaining : 프로미스에서 실행한 값을 받아옴, 연쇄적으로 코드가 실행될 때 바로 전 값을 받아오는 것
myA()
.then(myB)
.then(myC)

// resolve() : 비동기 처리가 수행된 상태(성공)에서 ()안에 있는 코드 실행
// reject() : 비동기 처리가 수행된 상태(실패)에서 ()안에 있는 코드 실행
// .then : 비동기 처리가 성공한 상태에서 처리 결과를 인수로 전달 받음, 프로미스 반환

//https://ljtaek2.tistory.com/142 동기비동기
//https://joshua1988.github.io/web-development/javascript/promise-for-beginners/#promise%EA%B0%80-%EB%AD%94%EA%B0%80%EC%9A%94 프로미스
//https://velog.io/@rejoelve/%EB%B4%90%EB%8F%84-%EB%B4%90%EB%8F%84-%ED%97%B7%EA%B0%88%EB%A6%AC%EB%8A%94-resolve-reject resolve, reject