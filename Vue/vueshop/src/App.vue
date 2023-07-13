<template>
  <!-- ! 07/06 -->
  <!-- <img alt="Vue logo" src="./assets/logo.png"> -->
  <!-- <HelloWorld msg="ㅎㅇ?"/> -->
  <!-- index.html 수정 X / vue 파일을 수정 O -->
  <!-- no 반복문 -->
  <!-- <div>
    <h4>{{product1}}</h4>
    <p>{{price1}}원</p>
  </div>
  <div>
    <h4 :style="styleR">{{product2}}</h4>
    <p>{{price2}}원</p>
  </div> -->
  <!-- <hr> -->
  <!-- ! 0707 component -->
  <Navi :product1="product1" :navList="navList" />
  <!-- ! 0710 -->
  <!-- <br> -->
  <!-- input 태그에 입력된 값을 변수에 실시간으로 자동 저장 -->
  <!-- <input type="text" @input="inputtest = $event.target.value;"> -->
  <!-- v-model -->
  <!-- v-model을 사용하면 글자가 완성되어야 모든 글자가 나옴 -->
  <!-- <input type="text" v-model="inputtest"> -->
  <!-- <br> -->
  <!-- 자동 저장 변수 -->
  <!-- <span>{{ inputtest }}</span>
  <br> -->
  <!-- <div class="discount" v-if="flg"> -->
  <div class="discount">
    <!-- <p>🔥 지금 구매 시 20% 할인 🔥</p> -->
    <p>🔥 지금 구매 시 {{count}}% 할인 🔥</p>
  </div>
  <br>
  <!-- <button @click="hookTest = !hookTest">훅 테스트</button> -->
  <!-- ! 0707 -->
  <ProductList @openModal="modalflg=true; pnum=i" :product="product" :modalflg="modalflg" v-for="(product, i) in products" :key="i" />
  <!-- <div class="startTransition" :class="{endTransition : modalflg}">  -->
    <!-- modalflg가 참일 때만 클래스 적용 / 닫기 버튼을 누를 때도 다시 class 지정해줘야 함-->
    <!-- <Modal 
    @closeModal="modalflg = false" 
    :modalflg="modalflg" 
    :products="products" 
    :pnum="pnum" />
  </div> -->
  <transition name="modalTransition">
    <Modal 
    @closeModal="modalflg = false" 
    :modalflg="modalflg" 
    :products="products" 
    :pnum="pnum" />
  </transition>
  <!-- @plus="products[pnum].count++" 
  @minus="products[pnum].count--"  -->
  <!-- * 네비 -->
  <!-- <div class="nav">
    <a href="">홈</a>
    <a href="">상품</a>
    <a href="">기타</a>
  </div> -->
  <!-- * 모달 -->
  <!-- <div class="bg_black" v-if="modalflg">
    <div class="bg_white" >
      <img :src="products[pnum].src">
      <h4>{{products[pnum].name}}</h4>
      <p>{{pprice}}</p>
      <p>{{products[pnum].content}}</p>
      <button v-on:click="plus(pnum);">+</button><span>{{products[pnum].count}}</span>
      <button v-on:click="minus(pnum);">-</button>
      <br><br>
      <button v-on:click="modalflg = false">X</button>
    </div>
  </div> -->
  <!-- ! 0706 -->
  <!-- 배열의 index 값 출력 -->
  <!-- <h4 v-for="(name, i) in products" :key="i">{{i}}</h4> -->
  <!-- 배열의 값 출력 -->
  <!-- <h4 v-for="name in products" :key="name">{{name}}</h4>
  <h4 v-for="item in products" :key="item">{{item.name}}</h4> -->
  <!-- <div v-for="(item,i) in products" :key="i">
    <img src={{item.src}}>
    <img :src='item.src'>
    <h4 v-on:click="item.modalflg = true; pnum = i;">{{item.name}}</h4>
    <h4 v-on:click="openmodal(i)">{{item.name}}</h4>
    <p>{{item.price}}원</p>
    <button v-on:click="item.count++">+</button><span>{{item.count}}</span>
    <button v-on:click="plus(i)">+</button><span>{{item.count}}</span>
    <button v-on:click="minus(i)">-</button>
  </div> -->
  <hr>
  <!-- ! 07/07 -->
  <!--  if -->
  <!-- <p v-if="1 == 1">if</p> -->
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'
// * js import 
import data from './assets/JS/data.js'
// component import
import Navi from './components/Navi.vue'
import ProductList from './components/ProductList.vue'
import Modal from './components/Modal.vue'

export default {
  name: 'App',
  data() { // 데이터 바인딩
    return {
      // count: 1,
      inputtest: '',
      products: data, // * js import 
      modalflg: false,
      pnum: 0,
      pprice: 0,
      hookTest: false,
      flg: false,
      count: 20,
      navList: ['홈', '상품', '기타'],
      // [
      //   {name: '양파', price: '500', count: 1, src: require('@/assets/양파손.png')}, // img src 데이터바인딩
      //   {name: '양파', price: '1800', count: 1, src: require('@/assets/양파손.png')},
      //   {name: '그냥 양파', price: '1800', count: 1, src: require('@/assets/양파손.png')}
      // ],
      
      // products: [
      //   '티셔츠', '바지', '외투'
      // ],
      product1: '계란',
      price1: '18000',
      product2: '바지',
      price2: '27000',
      styleR: 'color:red'
    }
  },
  mounted() {
    const counted = setInterval(() => {
      this.count--
      if(this.count == 0){
        clearInterval(counted);
      }
    }, 1000);
  },
  // updated() {
  //   this.flg = true;
  // },
  // ! 0710
  watch: { // 실시간 감시 함수 정의 영역
    inputtest(input) {
      if(input == 3) {
        alert('3333');
        this.inputtest = '';
      }
    }
  },
  // ! 0707
  // methods: { // 함수를 설정하는 영역
  //   plus(i){
  //     this.products[i].count++;
  //     this.pprice = this.products[i].count * this.products[i].price;
  //   },
  //   minus(i){
  //     this.products[i].count--;
  //     this.pprice = this.pprice - this.products[i].price;
  //   },
  //   openmodal(i){
  //     this.modalflg = true;
  //     this.pnum = i;
  //   },
  // },
  // ! 0707s
  components: {
    // HelloWorld
    Navi,
    ProductList,
    Modal,
    // 이름이 같으면 생략 가능함
  }
}
</script>

<style>
/* 0707 css import */
@import url('./assets/CSS/app.css');
/* 0706 */
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
