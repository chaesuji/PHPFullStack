<template>
    <Index />
    <List />
    <div>
        <!-- <p>App.vue</p> -->
    </div>
    {{ $store.state.test }}
</template>
<script>
import Index from './components/IndexComponent.vue';
import List from './components/ListComponent.vue';
export default {
    name: 'App',
    components: {
        Index,
        List,
    },
}
</script>
<style>
    
</style>