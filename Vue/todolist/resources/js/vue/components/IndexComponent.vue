<template lang="">
    <div>
        <input type="text" @input="content = $event.target.value">
        <button type="button" @click="$store.commit('setList', this.content)">입력</button>
    </div>
</template>
<script>
export default {
    name: 'Index',
    data() {
        return{
            content: '',
        }
    }, 
}
</script>
<style lang="">
    
</style>