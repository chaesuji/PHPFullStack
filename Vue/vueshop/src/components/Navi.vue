<!-- vueinit -->
<template lang="">
    <!-- 네비 -->
    
    <div class="nav" >
        <!-- <a href="">{{navList[0]}}</a> -->
        <!-- <a href="">{{navList[1]}}</a>
        <a href="">{{navList[2]}}</a> -->
        <a href="" v-for="(item,i) in navList" :key="i">{{item}}</a>
        <a href="" >{{product1}}</a>
    </div>
</template>
<script>
export default {
    name: 'Navi',
    props: {
        product1: String,
        navList: Array,
    }
}
</script>
<style lang="">
    
</style>