<template>
  <div class="flex flex-col lg:flex-row w-full mt-20 mb-24 lg:mb-64">

    <!-- Todays Recommended -->
    <div class="w-full lg:w-2/3">

      <h2 class="text-3xl font-bold text-indigo-300">// Today's Recommended Movies</h2>

      <div v-for="movie in topRatedMovies" class="recommended-movie-container mt-8 flex flex-col sm:flex-row sm:bg-gray-900 sm:p-6 rounded">

          <img @click="showMovie(movie.id)"
          :src="'https://image.tmdb.org/t/p/w300/' + movie.poster_path"
          :alt="movie.original_title + ' film poster'"
          class="hover:opacity-75 cursor-pointer">

          <!-- mobile devices info -->
          <div class="sm:hidden">

              <a :href="'/movie/' + movie.id">

                <h3 class="text-3xl mt-2 tracking-wider hover:underline">{{ movie.original_title }}</h3>

              </a>

              <p class="mt-1 tracking-wide font-semibold text-gray-300">{{ (movie.vote_average * 10) + '%' }} | {{ movie.release_date }}</p>

              <p class="text-sm mt-1 text-gray-400">{{ movie.genres }}</p>

          </div>

          <!-- md screens up info -->
        <div class="hidden sm:flex flex-col movie-info mx-12">

          <a :href="'/movie/' + movie.id">

            <h3 class="text-4xl tracking-wider hover:underline">{{ movie.original_title }}</h3>

          </a>

          <p class="text-sm mt-1 text-gray-400">{{ movie.genres }}</p>

          <p class="mt-1 tracking-wide font-semibold text-gray-300">{{ (movie.vote_average * 10) + '%' }} | Released {{ movie.release_date }}</p>

          <p class="mt-4 text-gray-300">
            {{ movie.overview }}
          </p>

          <div class="trailer mt-6">
            <button class="uppercase text-base font-semibold tracking-wider bg-indigo-700 px-4 py-2 rounded">
              Watch Trailer
            </button>
          </div>
        </div>

      </div>

    </div>

  <!-- Coming Soon -->
    <div class="mt-8 lg:mt-0 lg:w-1/3">
      <div class="lg:w-3/4 lg:ml-auto h-full">
      <h2 class="text-3xl font-bold text-indigo-300 mb-12 sm:mb-8">// Upcoming Movies</h2>
  <!-- Mini movie -->
      <div v-for="movie in upcomingMovies" class="mini-movie mt-6">
        <div class="flex">

          <div class="">

            <img @click="showMovie(movie.id)"
            :src="'https://image.tmdb.org/t/p/w92/' + movie.poster_path"
            :alt="movie.original_title + ' film poster'"
            class="hover:opacity-75 cursor-pointer small-poster">

          </div>

          <div class="movie-info ml-4">

            <a :href="'/movie/' + movie.id">

              <h3 class="text-xl md:text-4xl lg:text-xl tracking-wider hover:underline">{{ movie.original_title }}</h3>

            </a>

            <p class="text-sm md:text-lg lg:text-sm mt-1 md:mt-1 lg:mt-1 text-gray-400">{{ movie.genres }}</p>

            <p class="text-sm md:text-lg lg:text-sm mt-1 md:mt-2 lg:mt-1 font-semibold text-gray-300">{{ movie.release_date }}</p>

          </div>


        </div>
      </div>
      </div>
    </div>

  </div>
</template>

<script>

export default {
  props:{
    topRatedMovies:{
      type: Array,
      required: true
    },
    upcomingMovies:{
      type: Object,
      required: true
    }
  },
  data(){
    return{
      amountToShow: 8
    }
  },
  methods:{
    showMovie(movieId){
     window.location.href = window.location.href + 'movie/' + movieId;
    }
  }
}
</script>
