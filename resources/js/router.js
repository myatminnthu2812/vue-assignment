import Login from './components/LoginForm.vue';
import PostList from './components/PostList.vue';
import PostCreate from "./components/PostCreate.vue";
import PostDetail from "./components/PostDetail.vue";


export default [
    {
        path: '/vue/login',
        name: 'login',
        component: Login
    },
    {
        path: '/vue/posts',
        name: 'posts',
        component: PostList,
    },
    {
        path: '/vue/create',
        name: 'create',
        component: PostCreate,
    },
    {
        path: '/vue/post/detail/:post_id',
        name: 'detail',
        component: PostDetail,
        props: true,
    },

]
