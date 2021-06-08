<template>
  <div class="mt-16">
    <h2 class="text-3xl font-bold text-indigo-300">// Popular Movies</h2>

    <div class="movie-poster-container mt-12 grid grid-flow-col grid-cols-4 grid-rows-2 gap-x-4 gap-y-16">

      <div v-for="(movie, index) in popularMovies.results" v-if="index < moviesToShow" class="">
        <img :src="'https://image.tmdb.org/t/p/w342/' + movie.poster_path" alt="">
        <h3 class="text-3xl mt-2 tracking-wider">{{ movie.original_title }}</h3>
        <p class="mt-1 tracking-wide font-semibold text-gray-300">{{ (movie.vote_average * 10) + '%' }} | {{ movie.release_date }}</p>
        <p class="text-sm mt-1 text-gray-400"><span v-for="genre in movie.genre_ids">{{ genres[genre] }}, </span></p>
      </div>

    </div>
  </div>
</template>

<script>
export default {
  props:{
    popularMovies:{
      type: Object,
      required: true
    }
  },
  data(){
    return{
      moviesToShow: 8,
      genres: genres
    }
  },
  computed:{
    movies: function(){
      let movies = this.popularMovies.results;
      return movies;
    }
  }
}
</script>
