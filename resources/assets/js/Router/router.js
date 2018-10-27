import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Login from '../components/login/Login';
import SearchWorkspace from '../components/login/SearchWorkspace';

const routes = [
  { path: '/login', component: Login },
  { path: '/search_workspace', component: SearchWorkspace },
];

const router = new VueRouter({
  routes, // `routes: routes` の短縮表記
  hashbang: false, // urlの#を消す
  mode: 'history'
});

export default router;
