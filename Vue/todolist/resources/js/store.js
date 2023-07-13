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
            state.listData.unshift(content);
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
            let content = document.getElementById('postcontent')
            const data = 
            {
                "item" : {
                    "content" : content.value,
                }
            }
            console.log(data);
            axios.post('/api/items', data)
            .then(res => {
                console.log(res.data);
                context.commit('getList', res.data);
                content.value = '';
                location.reload();
            })
            .catch(err => {
                console.log(err);
            })
        },
        deletedList(context, id) {
            axios.delete('/api/items/' + id)
            .then(res => {
                console.log(res.data);
                context.dispatch('getMainList');
            })
            .catch(err => {
                console.log(err);
            })
        },
        comList(context, id){
            const data = 
            {
                "item" : {
                    "complated" : true,
                }
            }
            axios.put('/api/items/' + id, data)
            .then(res => {
                console.log(res.data);
                // context.dispatch('getMainList');
                location.reload();
            })
            .catch(err => {
                console.log(err);
            })
        },
        canList(context, id){
            const data = 
            {
                "item" : {
                    "complated" : false,
                }
            }
            axios.put('/api/items/' + id, data)
            .then(res => {
                console.log(res.data);
                // context.dispatch('getMainList');
                location.reload();
            })
            .catch(err => {
                console.log(err);
            })
        }
    }
})

export default store