<template>
  <!-- <img alt="Vue logo" src="./assets/logo.png"> -->
  <!--  07/06 -->
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
  <!-- component -->
  <Navi :product1="product1" :navList="navList" />
  <ProductList @openModal="modalflg=true; pnum=i" :product="product" :modalflg="modalflg" v-for="(product, i) in products" :key="i" />
  <Modal @closeModal="modalflg = false" @plus="products[pnum].count++" @minus="products[pnum].count--" :modalflg="modalflg" :products="products" :pnum="pnum" />
  <!--  네비 -->
  <!-- <div class="nav">
    <a href="">홈</a>
    <a href="">상품</a>
    <a href="">기타</a>
  </div> -->

  <!--  모달 -->
  <!-- <template v-for="(item,i) in products" :key="i">
    <div class="bg_black" v-if="item.modalflg">
      <div class="bg_white" >
        <img :src="item.src">
        <h4>{{item.name}}</h4>
        <p>{{item.price}}</p>
        <p>{{item.content}}</p>
        <button v-on:click="item.modalflg = false">X</button>
      </div>
    </div>
  </template> -->
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
  <!-- 배열의 index 값 출력 -->
  <!-- <h4 v-for="(name, i) in products" :key="i">{{i}}</h4> -->
  <!-- 배열의 값 출력 -->
  <!-- <h4 v-for="name in products" :key="name">{{name}}</h4>
  <h4 v-for="item in products" :key="item">{{item.name}}</h4> -->
  <!-- <div v-for="(item,i) in products" :key="i"> -->
    <!-- <img src={{item.src}}> -->
    <!-- <img :src='item.src'> -->
    <!-- <h4 v-on:click="item.modalflg = true; pnum = i;">{{item.name}}</h4> -->
    <!-- <h4 v-on:click="openmodal(i)">{{item.name}}</h4> -->
    <!-- <p>{{item.price}}원</p> -->
    <!--  event -->
    <!-- <button v-on:click="item.count++">+</button><span>{{item.count}}</span> -->
    <!-- <button v-on:click="plus(i)">+</button><span>{{item.count}}</span>
    <button v-on:click="minus(i)">-</button> -->
  <!-- </div> -->
  <hr>
  <!--  07/07 -->
  <!--  if -->
  <!-- <p v-if="1 == 1">if</p> -->
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'
// * js import 
import data from './assets/JS/data.js'

import Navi from './components/Navi.vue'
import ProductList from './components/ProductList.vue'
import Modal from './components/Modal.vue'

export default {
  name: 'App',
  data() { // 데이터 바인딩
    return {
      // count: 1,
      products: data, // * js import 
      modalflg: false,
      pnum: 0,
      pprice: 0,
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
/* * css import */
@import url('./assets/CSS/app.css');
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
