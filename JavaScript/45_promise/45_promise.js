
const promise1 = new Promise((resolve, reject) => {
    // resolve, reject -> promise 객체에서 자동 생성
    const data = true;
    if(data){
        resolve('성공'); // 에러 없이 성공했을 때
    }else{
        reject('error'); // 예외, 에러 시
    }
});

promise1
.then(data => {console.log(data);}) // 성공적으로 수행했을 때 실행되는 코드
.catch(error => {console.log(error);}) // 실패했을 때 실행되는 코드
.finally(() => {console.log('finally')}) // 성공하든 실패하든 무조건 실행되는 코드

// 함수 등록해서 promise 사용
function myPromise() {
    return new Promise((resolve, reject) => {
        const data = true;
        if(data){
            resolve('성공'); // 에러 없이 성공했을 때
        }else{
            reject('error'); // 예외, 에러 시
        }
    });
}
myPromise()
.then(data => {console.log(data);})
.catch(error => {console.log(error);})
.finally(() => {console.log('finally')})

// 로그인 콜백 지옥이였던 것을 promise로 구현
const login = {
    chkinput(id, pw) {
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                if(id !== '' && pw !== ''){
                    resolve({chkid: id, chkpw: pw});
                }else{
                    reject(new Error('잘못 입력 하셨습니다.'));
                }
            }, 500);
        });
    },
    loginuser(id, pw) {
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                if(id === 'php506' && pw === '506'){
                    resolve(id);
                }else{
                    reject(new Error('없는 유저 입니다.'));
                }
            }, 500);
        });
    },
    chkAuth(id) {
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                if(id === 'php506'){
                    resolve({authid: id, auth: 'admin'});
                }else{
                    reject(new Error('권한이 없습니다.'));
                }
            }, 500);
        });
    }
}

const id = 'php506';
const pw = '506';

login.chkinput(id, pw)
.then(chkdata => login.loginuser(chkdata.chkid, chkdata.chkpw))
.then(loginid => login.chkAuth(loginid))
.then(authdata => console.log(`${authdata.authid}유저님, ${authdata.auth}권한입니다.`))
.catch(error => console.log(error.message))