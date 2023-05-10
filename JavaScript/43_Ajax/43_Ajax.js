// const ipt = document.querySelector('#ttt');
// const url = "https://picsum.photos/v2/list?page=1&limit=5";

// api 가져오기
// fetch(url)
// .then(res => {return console.log(res.json())})

// .then(res => {return res.json()})
// .then(data => makeList(data))
// .catch(console.log);
const btn = document.querySelector('#bbb');
const div = document.querySelector('#ddd');
// const img = document.getElementsByTagName('img');
function makeList(data){
    div.replaceChildren();
    // div.innerHTML = '';
    data.forEach(item => {
        // console.log(item);
        const img = document.createElement('img');
        div.appendChild(img);
        img.setAttribute('src', item.download_url);
    });
}

btn.addEventListener('click', function(){
    let ipt = document.getElementById('ttt').value;
        if(document.getElementById('ttt').value === ""){
            alert("URL을 입력해주세요.");
        }else{
            // console.log(ipt);
            fetch(ipt)
            .then(res => {return res.json()})
            .then(data => makeList(data))
            // .catch(console.log);
            .catch(() => alert('aaaa'));
        }
});