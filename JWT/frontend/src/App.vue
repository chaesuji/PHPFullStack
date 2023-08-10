<template>
  <div>
    <router-view></router-view>
  </div>
</template>

<script>
// import axios from "axios";
import router from './router.js'

export default {
  name: 'App',
  methods: {
    // login(id) {
    //   axios.get('http://localhost:8000/api/token?id=' + id)
    //   .then(res => {
    //     console.log(res.data);
    //     this.$store.state.token = res.data.token;
    //   })
    //   .catch(err => {
    //     if(err.status >= 400) [
    //       console.log(err)
    //     ]
    //   })
    // },
    login() {
      router.push('main');
    },
    logout() {
      router.push('login');
    },
  },
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
