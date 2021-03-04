import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);



import Home from '../pages/home.vue';
import CategoryList from '../pages/category/index.vue';
import CreateCategory from '../pages/category/create.vue';
import EditCategory from '../pages/category/edit.vue';
import Login from '../pages/auth/login.vue';
import Register from '../pages/auth/register.vue';
import UserProfile from '../pages/auth/userprofile.vue';




const routes = new VueRouter({
    mode:'history',
    routes: [
        {
            path:'/',
            component: Home,
            base: process.env.BASE_URL,
            name:'home'
        },
        {
            path:'/category',
            component: CategoryList,
            name:'category-list'
        },
        {
            path:'/category/create',
            component: CreateCategory,
            name:'create-category'
        },
        {
            path:'/category/edit/:id',
            component: EditCategory,
            name:'edit-category'
        },
        {
            path:'/auth/login',
            component: Login,
            name:'login'
        },
        {
            path:'/auth/register',
            component: Register,
            name:'register'
        },
        {
            path:'/auth/userprofile',
            component: Register,
            name:'userprofile'
        },
    ]
});

export default routes;
