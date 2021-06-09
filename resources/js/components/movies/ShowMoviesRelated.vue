<template>

    <div class="w-1/4 pl-10">

      <h2 class="text-3xl font-bold text-indigo-300 mb-8">// Related Movies</h2>
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
