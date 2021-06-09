<template>
  <div class="flex w-full mt-20 mb-32">

    <!-- Show Movie -->
    <show-movie :movie="movie" />

    <!-- Recommended -->
    <show-movies-related :related-movies="relatedMovies.results" />

  </div>
</template>

<script>
import { genres } from '../../data/movie-genres.js';

export default {
  props:{
    movie:{
      type: Object,
      required: true
    },
    relatedMovies:{
      type: Object,
      required: true
    }
  },
  data(){
    return{
      genres: genres
    }
  }
}
</script>
