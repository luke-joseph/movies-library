<template>

    <div class="w-1/4 pl-10">

      <h2 class="text-3xl font-bold text-indigo-300 mb-8">// Related Movies</h2>

  <!-- Mini movie -->

      <div v-for="movie in relatedMovies" class="mini-movie mt-6">

        <div class="flex">

          <div class="w-16">

            <a :href="'/show/' + movie.id">

              <img :src="'https://image.tmdb.org/t/p/w92/' + movie.poster_path"
              :alt="movie.original_title + ' movie poster'">

            </a>

          </div>

          <div class="movie-info ml-4">

            <a :href="'/show/' + movie.id">

              <h3 class="text-xl tracking-wider hover:underline">{{ movie.original_title }}</h3>

            </a>

            <p class="text-sm mt-1 text-gray-400">FIX ME - GENRES</p>

            <p class="mt-1 font-semibold text-gray-300">{{ movie.release_date }}</p>

          </div>

        </div>

      </div>

    </div>
</template>

<script>
import { genres } from '../../data/movie-genres.js';

export default {
  props:{
    relatedMovies:{
      type: Array,
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
