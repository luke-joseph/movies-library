<template>
<div class="w-3/4">
      <div class="flex">

        <img :src="'https://image.tmdb.org/t/p/w342/' + movie.poster_path" alt="">

        <div class="movie-info mx-12">

          <h3 class="text-4xl tracking-wider">{{ movie.original_title }}</h3>

          <p class="mt-4 tracking-wide font-semibold text-gray-300 text-xl">
            {{ (movie.vote_average * 10) + '%' }}
            |
            <span v-for="genre in movie.genre_ids">{{ genres[genre] }}, </span>
            | {{ movie.release_date }}
          </p>

          <p class="mt-4 text-gray-300 text-lg">
            {{ movie.overview }}
          </p>

          <div class="trailer mt-10">
            <button class="uppercase text-lg font-semibold tracking-wider bg-indigo-700 px-6 py-3 rounded">
              Watch Trailer
            </button>
          </div>
        </div>

      </div>
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
