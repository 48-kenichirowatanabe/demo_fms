import Vue from 'vue';
import App from './App.vue';
import router from './router/';
import store from './store/';
import { sync } from 'vuex-router-sync';
import VueProgressiveImage from 'vue-progressive-image';

Vue.use(VueProgressiveImage, {
    blur: 30
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

sync(store, router);

const app = new Vue({
    store,
    router,
    store,
    render: h => h(App)
}).$mount('#app');


