import axios from 'axios'
import { createStore } from 'vuex'

const store = createStore({
    state() {
        return {
            listData: '',
        }
    },
    mutations: {
        getList(state, data){
            state.listData = data;
        },
    },
    action: {
        getMainList(context){
            axios.get('http://localhost:8000/api/items')
            .then(res => {
                console.log(res.data);
                context.commit('getList', res.data);
            })
            .catch(err => {
                console.log(err);
            })
        },
    }
})

export default store