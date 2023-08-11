import { createWebHistory, createRouter } from 'vue-router';
import Main from './components/MainComponent.vue';
import Login from './components/LoginComponent.vue';
import Home from './components/HomeComponent.vue';
import tc from './js/TokenController';

const configFlg = {
    main: true,
    login: false,
    home: false,
}

const beforeAuth = path => (to, from, next) => {
    const isToken = tc.getToken();
    const flg = configFlg[path];

    if( isToken ) {
        if( path == 'login' ) {
            next('/main');
        }
        return next();
    } else {
        if( flg ) { 
            next('/login');
        } else {
            return next();
        }
    }

    if( ( flg && isToken ) || !flg ) {
        return next();
    } else {
        next('/');
    }
};

const routes = [
    {
        path: "/",
        name: "home",
        component: Home,
        beforeEnter: beforeAuth('home')
    },
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