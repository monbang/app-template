require('./bootstrap');

Turbolinks.start();

Vue.use(TurbolinksAdapter);

document.addEventListener('turbolinks:load', () => {
    var app = new Vue({
        el: '#app',
    });
});
