<template>
<div class="w-full xl:w-3/4">
      <div class="flex flex-col sm:flex-row">

        <!-- Poster Exists -->
        <img v-if="movie.poster_path"
        :src="'https://image.tmdb.org/t/p/w342' + movie.poster_path"
        :alt="movie.original_title + ' poster'"
        class="cursor-pointer w-4/5 sm:w-auto rounded">

        <!-- Poster Doesn't Exist - Show placeholder -->
        <img v-else src="https://via.placeholder.com/342" class="rounded"
        :alt="movie.original_title + ' no poster found'">

        <rating :ratingPercent="movie.vote_average * 10"
        class="-mt-8 ml-1 lg:-ml-8 lg:-mt-4 lg:-mb-0"/>

        <div class="movie-info md:ml-6 md:mr-2 xl:ml-12 xl:mr-12">

          <h3 class="text-4xl mt-2 sm:mt-0 sm:tracking-wider text-white">{{ movie.original_title }}</h3>

          <p class="mt-4 tracking-wide font-semibold text-gray-300 text-xl">
            <span>{{ movie.genres }} |</span>
            <span>{{ movie.release_date }}</span>
          </p>

          <p class="mt-4 text-gray-300 text-lg">
            {{ movie.overview }}
          </p>

          <trailer-button
          v-if="movie.videos"
          :video="movie.videos[0]" />

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
