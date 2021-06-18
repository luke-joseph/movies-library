<template>
  <div class="w-full lg:w-2/3">

    <h2 class="text-3xl font-bold text-gray-800">Today's Recommended Movies</h2>

    <div v-for="movie in topRatedMovies" class="recommended-movie-container mt-8 flex flex-col sm:flex-row sm:bg-gray-100 sm:p-6 rounded">

        <img @click="showMovie(movie.id)"
        :src="'https://image.tmdb.org/t/p/w300' + movie.poster_path"
        :alt="movie.original_title + ' film poster'"
        class="hover:opacity-75 cursor-pointer w-4/5 sm:w-auto">

        <!-- mobile devices info -->
        <div class="sm:hidden">

            <a :href="'/movie/show/' + movie.id">

              <h3 class="text-3xl mt-2 tracking-wider hover:underline">{{ movie.original_title }}</h3>

            </a>

            <p class="mt-1 tracking-wide font-semibold text-gray-400">{{ (movie.vote_average * 10) + '%' }} | {{ movie.release_date }}</p>

            <p class="text-sm mt-1 text-gray-600">{{ movie.genres }}</p>

        </div>

        <!-- md screens up info -->
      <div class="hidden sm:flex flex-col movie-info mx-12">

        <a :href="'/movie/show/' + movie.id">

          <h3 class="text-4xl tracking-wider hover:underline">{{ movie.original_title }}</h3>

        </a>

        <p class="text-sm mt-1 text-gray-600">{{ movie.genres }}</p>

        <p class="mt-1 tracking-wide font-semibold text-gray-400">Released {{ movie.release_date }}</p>

        <p class="mt-4 text-gray-700">
          {{ movie.overview }}
        </p>

        <rating class="mt-4" :rating-percent="movie.vote_average * 10"/>

      </div>

    </div>

  </div>
</template>

<script>
export default {
  props:{
    topRatedMovies: {
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
