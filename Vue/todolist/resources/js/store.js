import axios from 'axios'
import { createStore } from 'vuex'

const store = createStore({
    state() {
        return {
            listData: [],
            content: ''
        }
    },
    mutations: {
        getList(state, data){
            state.listData = data;
        },
        setList(state, content){
            state.content = content;
        }
    },
    actions: {
        getMainList(context){
            axios.get('/api/items')
            .then(res => {
                console.log(res.data);
                context.commit('getList', res.data);
            })
            .catch(err => {
                console.log(err);
            })
        },
        writeList(context){

            const header = {
                headers: {
                    'Content-Type' : 'multipart/form-data',
                }
            };

            axios.get('/api/items', {
                content: context.state.content
            }, header)
            .then(res => {
                console.log(res.data);
                context.commit('getList', res.data);
            })
            .catch(err => {
                console.log(err);
            })
        }
    }
})

export default store