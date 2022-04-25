require('./bootstrap')
import Vue from 'vue/dist/vue.js';
window.Vue = Vue

import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(VueAxios, axios)

axios.interceptors.response.use(
    function (response) { return response },
    function (error) {
        Vue.swal({ type: 'error', icon: 'error', title: 'Error', text: 'Something went wrong, please try again later.', heightAuto: false })
        console.log(error)
    }
);
