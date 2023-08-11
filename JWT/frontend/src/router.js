import { createWebHistory, createRouter } from 'vue-router';
import Main from './components/MainComponent.vue';
import Login from './components/LoginComponent.vue';
import tc from './js/TokenController';

const configFlg = {
    main: true,
    login: false
}

const beforeAuth = path => (to, from, next) => {
    const isToken = tc.getToken();
    const flg = configFlg[path];

    if( ( flg && isToken ) || !flg ) {
        return next();
    } else {
        next('login');
    }
};

const routes = [
    {
        path: "/main",
        name: "main",
        component: Main,
        beforeEnter: beforeAuth('main')
        // beforeEnter : 라우터에 접속하기 전에 beforeAuth를 실행한 후 결과값에 따라 세팅
    },
    {
        path: "/login",
        name: "login",
        component: Login,
        beforeEnter: beforeAuth('login')
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;