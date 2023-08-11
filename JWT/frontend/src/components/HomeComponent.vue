<template>
    <div>
        <h1>HomeComponent</h1>
        <button @click="btn('login')">Login</button>
        <button @click="btn('main')">Main</button>

        <!-- 
        <router-link to='/login'>Login</router-link>
        <router-link to='/main'>Main</router-link>
        -->
    </div>
</template>
<script>
export default {
    name: "HomeComponent",
    methods: {
        btn(path) {
            router.push(path);
        }
    },
}
</script>
<style>
    
</style>