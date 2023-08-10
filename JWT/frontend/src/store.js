import { createStore } from 'vuex'
import router from './router';
import TokenController from './js/TokenController';
import ApiController from './js/ApiController';

const store = createStore({
    state() {
        // 데이터 관리(원본 데이터)
        return {
            isToken: false,
        }
    },
    mutations: {
        // state에 정의된 데이터 재할당(=갱신) (데이터 수정)
        setToken(state, token) {
            TokenController.setToken(token);
            state.isToken = true;
        },
    },
    actions: {
        // js 함수 정의
        login(context, id) {
            ApiController.post('/api/token', {id: id})
            .then(res => {
                let token = res.data['token'];
                console.log(token);
                context.commit('setToken', token);
                router.push('main');
            })
            .catch(err => {
                console.log(err);
            })
        },
    },
})

export default store