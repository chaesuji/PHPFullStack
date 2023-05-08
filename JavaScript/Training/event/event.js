// 버튼을 클릭 시 아래 내용의 alert가 나옴
// 안녕하세요
// 숨어있는 div를 찾아보세요

// 특정 영역에 마우스 포인터가 진입하면 아래 내용의 alert가 나옴
// 두근두근

// 2번의 영역을 클릭하면 배경색이 베이지 색으로 바뀌어 나타남
// 3번의 상태에서 다시 한 번 더 클릭하면 배경색이 흰색으로 바뀌어 안 보이게 되며 아래 내용의 alert가 나옴
// 다시 숨는다

const btn = document.querySelector('#btn');
const div = document.querySelector('#div');

btn.addEventListener('click', () => alert('안녕하세요.\n숨어있는 div를 찾아보세요.'));

div.addEventListener('mouseenter', function(){
    if(document.getElementById("div").style.backgroundColor !== 'beige'){
        alert('두근두근')
    }
});

let rand_1 = Math.floor(Math.random() * 1000);
let rand_2 = Math.floor(Math.random() * 1000);
let rand_3 = Math.floor(Math.random() * 1000);
let rand_4 = Math.floor(Math.random() * 1000);
// console.log(rand_1);
// console.log(rand_2);
// console.log(rand_3);
// console.log(rand_4);

window.onload = function(){
    div.style.marginTop = rand_1 + "px";
    div.style.marginBottom = rand_2 + "px";
    div.style.marginLeft = rand_3 + "px";
    div.style.marginRight = rand_4 + "px";
}

div.addEventListener('click', function(){
    if(document.getElementById("div").style.backgroundColor === 'green'){
        div.style.background = "transparent";
        alert('다시 숨는다');
        let rand_5 = Math.floor(Math.random() * 1000);
        let rand_6 = Math.floor(Math.random() * 1000);
        let rand_7 = Math.floor(Math.random() * 1000);
        let rand_8 = Math.floor(Math.random() * 1000);
        div.style.marginTop = rand_5 + "px";
        div.style.marginBottom = rand_6 + "px";
        div.style.marginLeft = rand_7 + "px";
        div.style.marginRight = rand_8 + "px";
    }else{
        div.style.backgroundColor = "green";
        alert('들켰다!');
    }
});



