<template>
  <div class="mt-8 sm:mt-16">

    <h2 class="text-3xl font-bold text-indigo-300 leading-tight">// Popular Movies</h2>

    <div class="movie-poster-container mt-12 grid sm:grid-flow-col grid-cols-1 grid-rows-8 sm:grid-cols-2 sm:grid-rows-4 lg:grid-cols-4 lg:grid-rows-2 gap-x-4 gap-y-16">

      <div v-for="movie in popularMovies" class="">

          <a :href="'/movie/' + movie.id">

            <img :src="'https://image.tmdb.org/t/p/w342/' + movie.poster_path"
            :alt="movie.original_title + ' film poster'"
            class="hover:opacity-75">

          </a>

          <a :href="'/movie/' + movie.id">

            <h3 class="text-4xl sm:text-3xl mt-2 sm:tracking-wider hover:underline text-white">{{ movie.original_title }}</h3>

          </a>

          <p class="mt-2 sm:mt-1 text-lg sm:text-base sm:tracking-wide font-semibold text-gray-300">{{ (movie.vote_average * 10) + '%' }} | {{ movie.release_date }}</p>

          <p class="text-sm mt-1 text-gray-400 text-lg sm:text-base">{{ movie.genres }}</p>

      </div>

    </div>

  </div>
</template>

<script>

export default {
  props:{
    popularMovies:{
      type: Array,
      required: true
    }
  }
}
</script>
