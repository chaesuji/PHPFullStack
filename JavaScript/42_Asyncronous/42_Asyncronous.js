// 비동기 처리 방식 
// 비동기 : 요청이 끝날 때까지 기다리는 것이 아니라 응답에 관계없이 바로 다음 동작이 실행되는 것
// 동기 : 한 작업이 실행되는 동안 다른 작업은 멈춘 상태를 유지하고 다음 실행의 차례를 기다리는 것 
// console.log('A');
// console.log('B');
// console.log('C');
// console.log('D');
// => A B C D

// console.log('A'); // 1(js)
// setTimeout(() => { // 2(browser)
//     console.log('B'); // 4(브라우저에서 1초가 지난 후에 js)
// }, 1000);
// console.log('C'); // 3(js)
// => A C B

// const a = 2;
// const b = 3;
// const sum = function() {
//     setTimeout(() => {
//         return a + b;
//     }, 1000);
// }
// console.log(sum());
// => undefined

// 비동기 처리에서의 콜백 지옥
setTimeout(() => {
    console.log('A');
    setTimeout(() => {
        console.log('B');
        setTimeout(() => {
            console.log('C');
        }, 1000);
    }, 2000);
}, 3000);
// => A B C

// 로그인 콜백 지옥 체험

// const login = {
//     chkinput(id, pw, success, error) {
//         setTimeout(() => {
//             if(id !== '' && pw !== ''){
//                 success({chkid: id, chkpw: pw});
//             }else{
//                 // new Error : 새로운 에러 객체 생성
//                 error(new Error('잘못 입력 하셨습니다.'));
//             }
//         }, 500);
//     },
//     loginuser(id, pw, success, error) {
//         setTimeout(() => {
//             if(id === 'php506' && pw === '506'){
//                 success(id);
//             }else{
//                 error(new Error('없는 유저 입니다.'));
//             }
//         }, 500);
//     },
//     chkAuth() {
//         setTimeout(() => {
//             if(id === 'php506'){
//                 success({authid: id, auth: 'admin'});
//             }else{
//                 error(new Error('권한이 없습니다.'));
//             }
//         }, 500);
//     }
// }

// const id = 'php506';
// const pw = '506';
// login.chkinput(
//     id
//     ,pw
//     ,chkdata => {
//         login.loginuser(
//             chkdata.chkid
//             ,chkdata.chkpw
//             ,loginid => {
//                 login.chkAuth(
//                     loginid
//                     ,authdata => { console.log(`${authdata.authid}유저님, 권한은 ${authdata.auth}`); }
//                     ,loginerror => {
//                         console.log(autherror.message);
//                     } 
//                 )
//             }
//             ,loginerror => { console.log(loginerror.message); }
//         )
//     }
//     ,chkerror => {console.log(chkerror.message);}
//     );

// 콜백 함수
function myCallBack(i) {
    return i + 1;
}

function printNum(fn) {
    console.log(fn(2));
}

printNum(myCallBack);