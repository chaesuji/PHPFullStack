// 요소를 선택하는 방법
// 1. ID로 요소를 선택하는 방법
//  document.getElement.ById();
const TITLE = document.getElementById('title');
TITLE.style.color = 'blue';

// 2. 태그 명으로 요소를 선택하는 방법
const li = document.getElementsByTagName('li');

// 탕수육은 노란색, 짬뽕은 빨간색
li[1].style.color = 'yellow';
li[2].style.color = 'red';

// 탕수육, 볶음밥, 깐풍기는 배경색상을 오렌지색 짜장면,짬뽕,라조기는 배경 색상을 베이지색
for(let i=0; i<li.length; i++){
    if(i % 2 === 0){
        li[i].style.backgroundColor = '#fffafa';
    }else{
        li[i].style.backgroundColor = '#ff7f50';
    }
}

// for(let i=0; i<li.length; i+=2){
//     li[i].style.backgroundColor = '#fffafa';
//     li[i+1].style.backgroundColor = '#ff7f50';
// }

// 3. Class로 요소를 선택하는 방법
const noneli = document.getElementsByClassName('none-li');

// 4. CSS 선택자로 요소를 선택하는 방법
// querySelector : 복수의 요소가 있다면 가장 첫번째 것만 선택
const title_id = document.querySelector('#title');
const li2 = document.querySelector('.none-li');

// querySelectorAll : 복수의 요소라면 전부 선택
const noneliall = document.querySelectorAll('.none-li');

// 요소 조작하기
// 1. 콘텐츠를 조작하는 방법
// 선택한 요소.textContent : 순수한 텍스트 데이터를 전달
TITLE.textContent = '바꿨다';
TITLE.textContent = '<span>바꿨다</span>'; // 태그로 인식하지 않고 문자로 인식

// 선택한 요소.innerHTML() : html 태그는 태그로 인식해서 전달
TITLE.innerHTML = '<span>asdfdfdfsd</span>'; // span 태그로 변경

const div1 = document.querySelector('#div1');
// innerHTML, testContent 원래있던 데이터, 요소들을 삭제하고 데이터 추가
div1.innerHTML = 'innerrrrrr';
div1.textContent = 'hiiii';

// 요소에 속성을 추가 : setAttribute()
const it = document.getElementById('it');
it.setAttribute('placeholder', 'set attribute');

const aa = document.getElementById('aaa');
aa.setAttribute('href', 'https://www.naver.com/');

// 요소의 속성을 제거 : removeAttribute()
it.removeAttribute('placeholder');

it.addEventListener('mouseover', function(){
    it.setAttribute('placeholder', 'asdf')
})
it.addEventListener('mouseleave', function(){
    it.removeAttribute('placeholder');
})

// 요소의 스타일링
// 태그에 스타일 바로 적용 -> 인라인 스타일 적용
// aa.style.textDecoration = 'none'; 
// aa.style.color = 'skyblue';

// 클래스로 스타일 적용
aa.classList.add('aaa1','aaa2','aaa3');

// 새로운 요소 만들기
// 요소 만들기
const cli = document.createElement('li');

// 요소 안에 데이터 넣기
cli.innerHTML = '야끼우동';

// 요소를 자식요소의 가장 마지막에 삽입
const ul = document.getElementsByTagName('ul');
// ul[0].appendChild(cli);

// 요소를 특정 위치에 삽입하는 방법
// li[1].appendChild(cli);
// li[2].appendChild(cli);
const zzam = document.querySelector('li:nth-child(3)');
ul[0].insertBefore(cli, zzam);

// html상 화면에 표시되는 해당 요소를 지우는 방법
// cli.remove();

// 라조기와 깐풍기 사이에 '잡채밥', '동파육'을 순서대로 넣고
// 배경을 스트라이프로 변경
const job = document.createElement('li');
const dong = document.createElement('li');

job.innerHTML ='잡채밥';
dong.innerHTML ='동파육';

const ggan = document.querySelector('li:nth-child(7)');
ul[0].insertBefore(job, ggan);
ul[0].insertBefore(dong, ggan);

for(let i=0; i<li.length; i++){
    if(i % 2 === 0){
        li[i].style.backgroundColor = '#FBFBEF';
    }else{
        li[i].style.backgroundColor = '#F6CED8';
    }
}