<template>
  <div class="mt-16">

    <h2 class="text-3xl font-bold text-indigo-300">// Popular Movies</h2>

    <div class="movie-poster-container mt-12 grid grid-flow-col grid-cols-4 grid-rows-2 gap-x-4 gap-y-16">

      <div v-for="movie in movies" class="">

          <a :href="'/show/' + movie.id">

            <img :src="'https://image.tmdb.org/t/p/w342/' + movie.poster_path"
            :alt="movie.original_title + ' film poster'"
            class="hover:opacity-75">

          </a>

          <a :href="'/show/' + movie.id">

            <h3 class="text-3xl mt-2 tracking-wider hover:underline">{{ movie.original_title }}</h3>

          </a>

          <p class="mt-1 tracking-wide font-semibold text-gray-300">{{ (movie.vote_average * 10) + '%' }} | {{ movie.release_date }}</p>

          <p class="text-sm mt-1 text-gray-400">
            
            <span v-for="genre in movie.genre_ids">{{ genres[genre] }}, </span>

          </p>

      </div>

    </div>

  </div>
</template>

<script>
import { genres } from '../../data/movie-genres.js';

export default {
  props:{
    popularMovies:{
      type: Object,
      required: true
    }
  },
  data(){
    return{
      amountToShow: 8,
      genres: genres
    }
  },
  computed:{
    movies: function(){
      let movies = this.popularMovies.results;
      movies.length = this.amountToShow;
      return movies;
    }
  }
}
</script>
