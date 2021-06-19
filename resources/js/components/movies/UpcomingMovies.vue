<template>
  <div class="mt-8 lg:mt-0 lg:w-1/3">

    <div class="lg:w-3/4 lg:ml-auto h-full">

      <h2 class="text-3xl font-semibold text-gray-800 mb-12 sm:mb-8">Upcoming Movies</h2>

      <!-- Mini movie poster & info -->
      <div v-for="movie in upcomingMovies" class="mini-movie mt-6">

        <div class="flex">

          <div>

            <img @click="showMovie(movie.id)"
            :src="'https://image.tmdb.org/t/p/w92' + movie.poster_path"
            :alt="movie.original_title + ' poster'"
            class="hover:opacity-75 cursor-pointer small-poster">

          </div>

          <div class="movie-info ml-4">

            <a :href="'/movie/show/' + movie.id">

              <h3 class="text-xl md:text-4xl lg:text-xl tracking-wider hover:underline">{{ movie.original_title }}</h3>

            </a>

            <p class="text-sm md:text-lg lg:text-sm mt-1 md:mt-1 lg:mt-1 text-gray-600">{{ movie.genres }}</p>

            <p class="text-sm md:text-lg lg:text-sm mt-1 md:mt-2 lg:mt-1 font-semibold text-gray-700">{{ movie.release_date }}</p>

          </div>


        </div>
      </div>

   </div>

  </div>
</template>

<script>
export default {
  props:{
    upcomingMovies: {
      type: Array,
      required: true
    }
  },
  methods:{
    showMovie(movieId){
     window.location.href = window.location.href + 'movie/show/' + movieId;
    }
  }
}
</script>
