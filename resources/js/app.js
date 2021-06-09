require('./bootstrap');

Vue.component('popular-movies', require('./components/movies/PopularMovies.vue').default);
Vue.component('show-movies-component', require('./components/movies/ShowMoviesComponent.vue').default);
Vue.component('show-movie', require('./components/movies/ShowMovie.vue').default);
Vue.component('show-movies-related', require('./components/movies/ShowMoviesRelated.vue').default);

const app = new Vue({
    el: '#app'
});
