/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const App = new Vue({
    el: '#app',
    data: {
        urls: []
    },
    methods: {
        openplayer(id) {
            let box = document.getElementById('videobox');
            box.style.display = "block";
            box.style.opacity = "1";
            let frame = document.querySelector('iframe');
            frame.src = 'https://player.vimeo.com/video/' + this.urls[id - 1]
        },
        tooglevideobox() {
            let box = document.getElementById('videobox');
            box.style.display = "none";
            box.style.opacity = "0";
            let frame = document.querySelector('iframe');
            frame.src = '';
        },
    },
    mounted: function() {
        axios.get('http://localhost:8000/api/getUrl')
            .then(response => {
                let urls = response.data.urls;
                this.urls = urls;
                console.log(this.urls);
            });
    }

});