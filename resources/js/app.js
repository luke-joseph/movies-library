require('./bootstrap');

//general
Vue.component('nav-bar', require('./components/NavBar.vue').default);
//movies
Vue.component('popular-movies', require('./components/movies/PopularMovies.vue').default);
Vue.component('index-secondary-section', require('./components/movies/IndexSecondarySection.vue').default);
Vue.component('show-movies-component', require('./components/movies/show-movies/ShowMoviesComponent.vue').default);
Vue.component('show-movie', require('./components/movies/show-movies/ShowMovie.vue').default);
Vue.component('show-movies-related', require('./components/movies/show-movies/ShowMoviesRelated.vue').default);


const app = new Vue({
    el: '#app'
});

const nav = new Vue({
    el: '#nav'
});
