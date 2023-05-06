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