require('./bootstrap');

Vue.component('popular-movies', require('./components/PopularMovies.vue').default);

const app = new Vue({
    el: '#app'
});
