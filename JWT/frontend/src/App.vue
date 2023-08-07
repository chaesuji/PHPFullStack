<template>
  <div>
    <button type="button" @click="login()">Login</button>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: 'App',
  data() {
    return {
      token: '',
      flg: false,
    }
  },
  methods: {
    login(id) {
      axios.get('http://localhost:8000/api/token?id=' + id)
      .then(res => {
        console.log(res.data);
        this.token = res.data.token;
      })
      .catch(err => {
        if(err.status >= 400) [
          console.log(err)
        ]
      })
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
