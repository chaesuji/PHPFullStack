<template>
  <div v-if="flg == false">
    <h1>Login</h1>
    <input type="text" @input="id = $event.target.value;">
    <button @click="login(id)">login</button>
  </div>
  <div v-if="flg == true">
    <h1>List</h1>
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
        this.chk();
      })
    },
    chk() {
      const header = 
      {
        headers: {
          'Authorization' : this.token,
        }
      };
          
      axios.get('http://localhost:8000/api/chk', header)
      .then(res => {
        console.log(res.data);
        console.log(res.data.msg);
        if(res.data.msg == 'OK') {
          this.flg = true;
        }
        
      })
      .catch(err => {
        console.log(err);
      })
    }
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
