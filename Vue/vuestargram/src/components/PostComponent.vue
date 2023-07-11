<template lang="">
    <div class="post" v-for="(data,i) in $store.state.boardData" :key="i">
        <div class="post-img" :style="{ backgroundImage : `url(${data.img})`}"></div>
        <div class="post-content">
            <p>❤ {{data.likes}}</p>
            <p><strong>{{data.name}}</strong> {{data.content}}</p>
            <p>{{data.created_at}}</p>
        </div>
    </div>
</template>
<script>
export default {
    name: 'PostComponent',
}
</script>
<style lang="">
    
</style>