<template>
    <div>
        <h1>PostComponent</h1>
        <p>{{ propstest }}</p>
    </div>
    <!-- <div>
        <slot></slot>
    </div> -->
</template>
<script>
import { ref, toRefs } from 'vue';
export default {
    name: 'PostComponent',
    props: {
        propstest: Number
    },
    setup(props) {
        let { propstest } = toRefs(props);
        let data = ref({ propstest })
        console.log(propstest.value);

        return { data }
    },
    // props: {
    //     test: Number,
    // }
}
</script>
<style>
    
</style>