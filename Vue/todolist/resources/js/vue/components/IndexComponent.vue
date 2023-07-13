<template lang="">
    <div>
        <input id="postcontent" type="text">
        <button @click="$store.dispatch('writeList')">입력</button>
    </div>
</template>
<script>
export default {
    name: 'Index',
}
</script>
<style lang="">
    
</style>