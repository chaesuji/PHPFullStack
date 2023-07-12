<template lang="">
    <!-- 리스트   -->
    <div v-if="$store.state.tabflg == 0">
        
        <PostComponent />
    </div>

    <!-- 이미지 필터 -->
    <div v-if="$store.state.tabflg == 1">
        <div class="upload-img" :style="{ backgroundImage : `url(${$store.state.imgUrl})`}" :class="$store.state.filter"></div>
        <div class="filter-box">
            <div class="filter" @click="$store.commit('changeFilter', item)" :class="item" v-for="item in filterlist" :key="item" :style="{ backgroundImage : `url(${$store.state.imgUrl})`}">
                {{item}}
            </div>
        </div>
    </div>

    <!-- 글 작성 -->
    <div v-if="$store.state.tabflg == 2">
        <div class="upload-img" :style="{ backgroundImage : `url(${$store.state.imgUrl})`}" :class="$store.state.filter"></div>
        <div>
            <textarea @input="content = $event.target.value; $store.commit('setcontent', content)" class="write-box" name="content" id="content" placeholder="써써써써써써써"></textarea>
        </div>
    </div>

</template>
<script>
import PostComponent from './PostComponent.vue'
export default {
    name: 'ContainerComponent',
    data() {
        return{
            filterlist: [ "aden", "_1977", "brannan", "brooklyn", "clarendon", "earlybird", "gingham", "hudson", "inkwell", "kelvin", "lark", "lofi", "maven", "mayfair", "moon", "nashville", "perpetua", "reyes", "rise", "slumber", "stinson", "toaster", "valencia", "walden", "willow", "xpro2"],
            content: '',
        }
    }, 
    components: {
        PostComponent,
    },
}
</script>
<style lang="">
    
</style>