// inline event 등록
// onclick : 클릭 시 동작

// document : 웹 페이지에 존재하는 HTML 요소에 접근하고자 할 때 사용하는 객체
// if문에 처리해야 할 일이 하나만 있을 때 중괄호 생략 가능
if(true) console.log('tt');

// 프로퍼티 리스너
const google = document.querySelector('#btn1');
google.onclick = function() {
    location.href = "https://www.google.com";
}

// addEventListener
// const daum = document.querySelector('#btn2');
const daum = document.getElementById('btn2');

// 인자(=인수) : 메소드에 넘겨주는 값

// 현재 창에서 열기
// daum.addEventListener('click', () => {
//     location.href = 'https://www.daum.net';
// });

// 새로운 창에서 열기
// daum.addEventListener('click', () => {
//     open('https://www.daum.net', 'test', 'width=500 height=500');
// });

let newwindow = null;
daum.addEventListener('click', () => {
    newwindow = open('https://www.daum.net', 'test', 'width=500 height=500');
});
// const closebtn = document.getElementById('btn3');
// closebtn.addEventListener('click', () => { // -> 창 닫기
//     newwindow.close();
// });
// btn3.addEventListener('click', () => {
//     newwindow.close();
// });

// 이벤트 삭제
// removeEventListener(eventType, function)
// addEventListenet()로 등록한 이벤트의 인수와 같은 인수를 셋팅해야 삭제됨

// btn3.addEventListener('click', popUpClose(newwindow));
// btn3.removeEventListener('click', popUpClose(newwindow));
function popUpClose(win){
    win.close();
}

// 이벤트 타입
// const div = document.getElementsByClassName('div1'); 
// div => div1이라는 클래스를 가진 요소들을 배열 형식으로 가져옴, div[0]

const div = document.querySelector('.div1');
div.addEventListener('mousedown', () => alert('div클릭'));
div.addEventListener('mouseenter', () => alert('div진입'));
