<template>
    <div>
        <h1>MainComponent</h1>
        <button type="button" @click="login()" v-if="!$store.state.isToken">Login</button>
        <button type="button" @click="logout()" v-if="$store.state.isToken">Logout</button>
        <!-- {{ $store.state.isToken }} -->
    </div>
</template>
<script>
export default {
    name: "MainComponent",
}
</script>
<style>
    
</style>