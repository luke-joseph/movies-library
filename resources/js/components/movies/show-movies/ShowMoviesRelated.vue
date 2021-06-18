<template>

    <div class="w-full xl:w-1/4 xl:pl-10 mt-16 xl:mt-0">

      <h2 v-if="relatedMovies.length" class="text-3xl font-semibold text-gray-400 mb-8">Related Movies</h2>

      <!-- Mini movie -->
      <div class="flex flex-col lg:flex-row xl:flex-col">

        <div v-for="movie in relatedMovies" class="mini-movie mt-6 lg:w-1/4 xl:w-auto">

          <div class="flex">

            <div class="">

              <a :href="'/movie/show/' + movie.id">

                <img :src="'https://image.tmdb.org/t/p/w92' + movie.poster_path"
                :alt="movie.original_title + ' poster'" class="hover:opacity-75 small-poster">

              </a>

            </div>

            <div class="movie-info ml-4">

              <a :href="'/movie/show/' + movie.id">

                <h3 class="text-xl md:text-4xl lg:text-xl hover:underline">{{ movie.original_title }}</h3>

              </a>

              <p class="text-sm md:text-lg lg:text-sm mt-1 md:mt-1 lg:mt-1 text-gray-500">{{ movie.genres }}</p>

              <p class="text-sm md:text-lg lg:text-sm mt-1 md:mt-2 lg:mt-1 text-gray-400">{{ movie.release_date }}</p>

            </div>

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
