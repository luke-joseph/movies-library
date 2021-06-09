<template>

    <div class="w-1/4 pl-10">

      <h2 v-if="relatedMovies.length" class="text-3xl font-bold text-indigo-300 mb-8">// Related Movies</h2>

      <!-- Mini movie -->

      <div v-for="movie in relatedMovies" class="mini-movie mt-6">

        <div class="flex">

          <div class="">

            <a :href="'/show/' + movie.id">

              <img :src="'https://image.tmdb.org/t/p/w92/' + movie.poster_path"
              :alt="movie.original_title + ' movie poster'" class="hover:opacity-75 small-poster">

            </a>

          </div>

          <div class="movie-info ml-4">

            <a :href="'/show/' + movie.id">

              <h3 class="text-xl tracking-wider hover:underline">{{ movie.original_title }}</h3>

            </a>

            <p class="text-sm mt-1 text-gray-400">{{ movie.genres }}</p>

            <p class="mt-1 font-semibold text-gray-300">{{ movie.release_date }}</p>

          </div>

        </div>

      </div>

    </div>
</template>

<script>

export default {
  props:{
    relatedMovies:{
      type: Array,
      required: true
    }
  }
}
</script>
