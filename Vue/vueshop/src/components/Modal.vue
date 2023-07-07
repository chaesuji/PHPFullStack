<template>
    <!-- 모달 -->
    <div class="bg_black" v-if="modalflg">
        <div class="bg_white">
            <img :src="products[pnum].src">
            <h4>{{products[pnum].name}}</h4>
            <p>{{products[pnum].price * products[pnum].count}}원</p>
            <p>{{products[pnum].content}}</p>

            <button @click="$emit('plus')">+</button>
            <span>{{products[pnum].count}}</span>
            <button @click="$emit('minus')">-</button>

            <br><br>

            <button @click="$emit('closeModal');">X</button>
        </div>
    </div>
</template>
<script>
export default {
    name: 'Modal',
    props: {
        modalflg: Boolean,
        products: Object,
        pnum: Number,
    }
}
</script>
<style>
    
</style>