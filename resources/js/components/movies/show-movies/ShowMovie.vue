<template>
<div class="w-full lg:w-3/4">
      <div class="flex flex-col sm:flex-row">

        <img :src="'https://image.tmdb.org/t/p/w342' + movie.poster_path"
        :alt="movie.original_title + ' movie poster'">

        <div class="movie-info md:ml-6 md:mr-2 lg:ml-12 lg:mr-12">

          <h3 class="text-4xl mt-2 sm:mt-0 sm:tracking-wider text-white">{{ movie.original_title }}</h3>

          <p class="mt-4 tracking-wide font-semibold text-gray-300 text-xl">
            {{ (movie.vote_average * 10) + '%' }}
            |
            <span>{{ movie.genres }}</span>
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

export default {
  props:{
    movie:{
      type: Object,
      required: true
    }
  }
}
</script>
