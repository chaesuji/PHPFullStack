<template>
    <div v-for="data in $store.state.listData" :key="data">
        <div v-if="data.complated == false">
            <input type="checkbox" @click="$store.dispatch('comList', data.id)" value="">
            <span>{{data.content}}</span>
            <button @click="$store.dispatch('deletedList', data.id)">X</button>
        </div>
        <div v-if="data.complated == true">
            <input type="checkbox" @click="$store.dispatch('canList', data.id)" value="" checked>
            <span class="truecom">{{data.content}}</span>
            <button @click="$store.dispatch('deletedList', data.id)">X</button>
        </div>
    </div>
</template>
<script>
export default {
    name: 'List',
}
</script>
<style>
    .truecom {text-decoration:line-through}
</style>