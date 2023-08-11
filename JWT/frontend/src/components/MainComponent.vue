<template>
    <div>
        <h1>MainComponent</h1>
        <button type="button" @click="$store.dispatch('logout')">Logout</button>
    </div>
</template>
<script>
export default {
    name: "MainComponent",
}
</script>
<style>
    
</style>