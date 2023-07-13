<template>
    <Index />
    <List />
    <div>
        <!-- <p>App.vue</p> -->
    </div>
</template>
<script>
import Index from './components/IndexComponent.vue';
import List from './components/ListComponent.vue';
export default {
    name: 'App',
    created(){
        this.$store.dispatch('getMainList');
    },
    components: {
        Index,
        List,
    },
}
</script>
<style>
    
</style>