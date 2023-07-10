<template>
    <!-- 모달 -->
    <div class="bg_black" v-if="modalflg">
        <div class="bg_white">
            <img :src="products[pnum].src">
            <h4>{{products[pnum].name}}</h4>
            <p>{{products[pnum].price * this.onlyNumber}}원</p>
            <!-- <p>{{products[pnum].price * products[pnum].count}}원</p> -->
            <p>{{products[pnum].content}}</p>

            <input type="text" @input="onlyNumber = $event.target.value">
            <br>
            <span>{{ onlyNumber }}</span>
            <!-- <button @click="$emit('plus')">+</button> -->
            <!-- <span>{{products[pnum].count}}</span> -->
            <!-- <button @click="$emit('minus')">-</button> -->

            <br><br>

            <button @click="$emit('closeModal'); this.onlyNumber = ''">X</button>
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
    },
    data() {
        return {
            onlyNumber: 0,
        }
    },
    watch: {
        onlyNumber(onlyNumber){
            this.onlyNumber = this.onlyNumber.replace(/[^0-9]/g, '');
            if(onlyNumber >= 11){
                alert('최대 선택 가능한 수량은 10개입니다.');
                this.onlyNumber = '10';
            }
        }
    }
}
</script>
<style>
    
</style>