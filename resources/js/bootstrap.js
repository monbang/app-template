import axios from 'axios';
import Vue from 'vue';
import Turbolinks from 'turbolinks';
import TurbolinksAdapter from 'vue-turbolinks'

window.axios = axios;
window.Vue = Vue;
window.Turbolinks = Turbolinks;
window.TurbolinksAdapter = TurbolinksAdapter;

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.App.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};
