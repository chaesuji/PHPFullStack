<template lang="">
    <div v-for="data in $store.state.listData" :key="data">
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