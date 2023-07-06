<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <!-- <HelloWorld msg="ㅎㅇ?"/> -->
  <!-- index.html 수정 X / vue 파일을 수정 O -->
  <!-- no 반복문 -->
  <div>
    <h4>{{product1}}</h4>
    <p>{{price1}}원</p>
  </div>
  <div>
    <h4 :style="styleR">{{product2}}</h4>
    <p>{{price2}}원</p>
  </div>
  <hr>
  <div v-for="item in products" :key="item">
    <!-- 배열의 index 값 출력 -->
    <!-- <h4 v-for="(name, i) in products" :key="i">{{i}}</h4> -->
    <!-- 배열의 값 출력 -->
    <!-- <h4 v-for="name in products" :key="name">{{name}}</h4>
    <h4 v-for="item in products" :key="item">{{item.name}}</h4> -->
    <h4>{{item.name}}</h4>
    <p>{{item.price}}원</p>
  </div>
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'App',
  data() { // 데이터 바인딩
    return {
      products: [
        {name: '티셔츠', price: '1800'},
        {name: '바지', price: '1800'},
        {name: '외투', price: '1800'}
      ],
      // products: [
      //   '티셔츠', '바지', '외투'
      // ],
      product1: '티셔츠',
      price1: '18000',
      product2: '바지',
      price2: '27000',
      styleR: 'color:red'
    }
  },
  // components: {
  //   HelloWorld
  // }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
