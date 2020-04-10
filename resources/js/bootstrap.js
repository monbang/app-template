import axios from 'axios';
import Vue from 'vue';

window.axios = axios;
window.Vue = Vue;

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.App.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};
