<template>
<div class="w-full xl:w-3/4">
      <div class="flex flex-col md:flex-row">

        <!-- Poster Exists -->
        <img v-if="movie.poster_path"
        :src="'https://image.tmdb.org/t/p/w342' + movie.poster_path"
        :alt="movie.original_title + ' poster'"
        class="cursor-pointer w-4/5 sm:w-auto rounded object-contain object-top">

        <!-- Poster Doesn't Exist - Show placeholder -->
        <img v-else src="https://via.placeholder.com/342" class="rounded object-contain object-top"
        :alt="movie.original_title + ' no poster found'">

        <rating :ratingPercent="movie.vote_average * 10"
        class="-mt-8 ml-1 md:-ml-8 md:-mt-4 md:-mb-0"/>

        <div class="movie-info md:ml-6 md:mr-2 xl:ml-12 xl:mr-12">

          <h3 class="text-2xl sm:text-4xl mt-2 sm:mt-0 sm:tracking-wider text-white">{{ movie.original_title }}</h3>

          <div class="flex flex-col mt-4 tracking-wide font-semibold text-gray-300 text-xl">
            <p>{{ movie.genres }}</p>
            <p class="text-sm mt-1 text-gray-400">{{ movie.release_date }}</p>
          </div>

          <p class="mt-4 text-gray-300 text-lg">
            {{ movie.overview }}
          </p>

          <trailer-button
          v-if="movie.videos"
          :video="movie.videos[0]" />

        </div>

      </div>

      <!-- Cast -->
      <div class="mt-20 mb-20">
        <h4 class="text-3xl mb-4">Cast</h4>
        <div class="flex w-full grid grid-flow-col grid-cols-5 grid-rows-1 gap-4">

          <div v-for="actor in cast" class="flex flex-col">

            <img v-if="actor.profile_path" :src="'https://image.tmdb.org/t/p/original' + actor.profile_path"
            :alt="actor.original_name + ' profile picture'"
            class="w-4/5 sm:w-auto rounded object-contain object-top">

            <div v-else class="w-4/5 flex sm:w-auto rounded object-contain object-top bg-gray-700 h-full">
              <p class="m-auto text-gray-200">No Image Found</p>
            </div>

            <h4 class="mt-2 text-lg">{{ actor.original_name }}</h4>

            <p class="mt-1 text-gray-400">{{ actor.character }}</p>

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
  },
  data(){
    return{
      castAmount: 5
    }
  },
  computed: {
    cast: function(){
      return this.movie.credits.cast.filter((actor, index) => {
        return index < this.castAmount;
      });
    }
  }
}
</script>
