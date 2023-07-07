<template>
    <div>
        <img :src='product.src'>
        <h4 @click="$emit('openModal');">{{product.name}}</h4>
        <p>{{product.price}}원</p>
        <p>{{product.count}}개</p>
    </div>
</template>
<script>

export default {
    name: 'productList',
    props: {
        product: Object,
        modalflg: Boolean,
        // js {} -> 객체 / [] -> 배열
    },
}
</script>
<style>
    
</style>