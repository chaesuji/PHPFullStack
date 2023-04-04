// let : 변수 선언 방식, 중복선언 불가/변수에 값 재할당 가능
// const : 함수(상수)
let ul = document.querySelector('ul');

const checkClick = (i) => {
    if(ul.children[i].querySelector('span').style.textDecorationLine === "line=througn"){
        ul.children[i].querySelector('span').style.textDecorationLine = '';
    }else{
        ul.children[i].querySelector('span').style.textDecorationLine = "line-through"
    }
}

for(let i = 0; i< ul.childElementCount; i++){
    ul.children[i].querySelector('input').value = i
    ul.children[i].querySelector('input').setAttribute('onClick', 'checkClick(${i})');
}