<template>
  <!-- 헤더 -->
  <div class="header">
    <ul>
      <li @click="$store.commit('changeTabFlg', 0); $store.commit('clearState')" v-if="$store.state.tabflg != 0" class="header-button header-button-left">취소</li>
      <li>
        <img class="logo" alt="Vue logo" src="./assets/logo.png">
      </li>
      <li @click="$store.commit('changeTabFlg', 2)" v-if="$store.state.tabflg == 1" class="header-button header-button-right">다음</li>
    </ul>
  </div>
  
  {{ $store.state.lastId }}
  <!-- 컨텐츠 -->
  <ConteinerComponent />
  <button v-if="$store.state.tabflg == 0" id="morebtn" @click="$store.dispatch('getMoreList');">더보기</button>
  
  <!-- 푸터 -->
  <div class="footer">
    <div class="footer-button-store">
      <label for="file" class="label-store">+</label>
      <input @change="updateimg" accept="image/*" type="file" id="file" class="input-file">
      <!-- @change="$store.commit('changeTabFlg', 1)" -->
      <!-- accept="image/*" > 파일 탐색기 창에서 이미지만 보이게하는 속성(다른 폴더로 이동하는 경로로 뜸(폴더)) -->
    </div>
  </div>
</template>

<script>
import ConteinerComponent from './components/ConteinerComponent'

export default {
  name: 'App',
  created() {
    this.$store.dispatch('getMainList');
  },
  methods: {
    updateimg(e) {
      let file = e.target.files;
      let imgUrl = URL.createObjectURL(file[0]);
      this.$store.commit('changeImgUrl', imgUrl);
      this.$store.commit('changeTabFlg', '1')
      e.target.value = '';
    },
    removefiles(){
      this.$store.state.imgUrl.value = '';
    }
  },
  components: {
    ConteinerComponent,
  }
}
</script>
<style>
@import url('./assets/css/common.css');
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>