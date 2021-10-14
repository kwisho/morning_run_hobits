require('alpinejs');
import './bootstrap'
import Vue from 'vue'
import Time from './components/Time'
import '@mdi/font/css/materialdesignicons.css'
import 'vuetify/dist/vuetify.min.css'
import Vuetify from 'vuetify'

Vue.component('time-component',require('./components/Time.vue').default);

const app = new Vue({
    el: '#app',
    components: {
        Time
    }
});
