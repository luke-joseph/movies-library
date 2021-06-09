<template>
  <div class="flex w-full mt-20 mb-32">

    <!-- Show Movie -->
    <show-movie :movie="movie"></show-movie>

    <!-- Recommended -->
    <show-movies-related :movie="movie"></show-movies-related>

  </div>
</template>

<script>
import { genres } from '../../data/movie-genres.js';

export default {
  props:{
    movie:{
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
