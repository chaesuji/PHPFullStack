<template lang="">
    <div v-for="data in $store.state.getList" :key="data">
        <p>{{data.content}}</p>
    </div>
</template>
<script>
export default {
    name: 'List',
}
</script>
<style lang="">
    
</style>