<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <h1>App.vue</h1>
  <h1>{{ data.name }}</h1>
  <button @click="data.name='김김ㄱ미'">data.ref</button>

  <h1>{{ data2.name }}</h1>
  <button @click="data2.name='짱구'">data2.reactive</button>

  <PostComponent :propstest="1"></PostComponent>
  <!-- <h1>{{ test }}</h1>
  <button @click="test='sad'">sad</button> -->

  <!-- slot -->
  <!-- <router-view>
    <span>222</span>
  </router-view> -->
<!-- <router-view :test="222"></router-view> -->

  <!-- router -->
  <!-- <router-link to="/">홈으로</router-link>
  <br>
  <router-link to="/post">POST로</router-link>
  <router-view></router-view> -->

  <!-- button -->
  <!-- <ContainerComponent v-if="flg"></ContainerComponent>
  <PostComponent v-if="!flg"></PostComponent>
  <button @click="flg = !flg"></button> -->
</template>

<script>
import PostComponent from './components/PostComponent.vue';
import { ref, reactive } from 'vue';
// import ContainerComponent from './components/ContainerComponent.vue'
// import PostComponent from './components/PostComponent.vue'

export default {
  name: 'App',
  setup() {
    let data = ref({name: '홍길동', age: 20});
    let data2 = reactive({
      name:'철수',
      age: 5
    })
    let test = 'aaa'; // 데이터 바인딩 안됨

    // setup > create 단계에서 실행됨 / 초기 데이터 가져올려면 axios로 바로 가져오기 가능

    return { test, data, data2 } 
  },
  // data() {
  //   return {
  //     // flg: true
  //   }
  // },
  components: {
    // ContainerComponent,
    PostComponent,
  }
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
