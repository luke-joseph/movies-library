<template>
  <div class="flex w-full mt-20 mb-32">

    <!-- Show Movie -->
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

    <!-- Recommended -->

    <div class="w-1/4 pl-10">

      <h2 class="text-3xl font-bold text-indigo-300 mb-8">// Most Anticipated</h2>
  <!-- Mini movie -->
      <div class="mini-movie mt-6">
        <div class="flex">

          <div class="w-16">

            <img class="" src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
          </div>

          <div class="movie-info ml-4">

            <h3 class="text-xl tracking-wider">Movie Title</h3>

            <p class="text-sm mt-1 text-gray-400">Action, Thriller</p>

            <p class="mt-1 font-semibold text-gray-300">08/06/2021</p>

          </div>


        </div>
      </div>

      <div class="mini-movie mt-6">
        <div class="flex">

          <div class="w-16">

            <img class="" src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
          </div>

          <div class="movie-info ml-4">

            <h3 class="text-xl tracking-wider">Movie Title</h3>

            <p class="text-sm mt-1 text-gray-400">Action, Thriller</p>

            <p class="mt-1 font-semibold text-gray-300">08/06/2021</p>

          </div>


        </div>
      </div>

      <div class="mini-movie mt-6">
        <div class="flex">

          <div class="w-16">

            <img class="" src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
          </div>

          <div class="movie-info ml-4">

            <h3 class="text-xl tracking-wider">Movie Title</h3>

            <p class="text-sm mt-1 text-gray-400">Action, Thriller</p>

            <p class="mt-1 font-semibold text-gray-300">08/06/2021</p>

          </div>


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
