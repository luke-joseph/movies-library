<template>
  <div class="w-full xl:w-2/3 mt-8 sm:mt-16">

    <h2 class="text-3xl font-bold text-gray-800 mb-8">Search Results</h2>

    <p class="mb-10" v-if="searchResults.length">Your search returned {{ totalResults }} results</p>

    <p class="mb-10" v-else>Your Search returned 0 results</p>

    <!-- Result Cards -->

    <div v-for="result in searchResults" class="flex flex-col sm:flex-row mb-8 sm:bg-gray-100 sm:p-6 sm:rounded">

        <!-- Poster Exists -->

        <img @click="showMovie(result.id)"
        v-if="result.poster_path"
        :src="'https://image.tmdb.org/t/p/' + imageWidth + result.poster_path"
        :alt="result.original_title + ' poster'"
        class="cursor-pointer w-1/2 sm:w-auto">

        <!-- Poster Doesn't Exist - Show placeholder -->

        <img @click="showMovie(result.id)" v-else :src="'https://via.placeholder.com/' + imageWidth.slice(1) + 'x278'"
        :alt="result.original_title + ' no poster found'">

        <!-- Supporting Info -->

        <div class="result-info flex flex-col sm:ml-6 sm:mr-2 lg:ml-12 lg:mr-12">

          <a :href="'/movie/show/' + result.id">
            <h3 class="text-2xl sm:text-4xl mt-2 sm:mt-0 text-gray-900 hover:underline">{{ result.original_title }}</h3>
          </a>

          <!-- search info -->
          <p class="lg:hidden tracking-wide font-semibold text-gray-600 text-base sm:text-xl flex flex-col">

            <p class="text-gray-700">{{ result.genres }}</p>

            <p>{{ result.release_date }}</p>

          </p>


          <p v-if="result.overview" class="hidden lg:block mt-4 text-gray-700 text-lg">
            {{ result.overview.substring(0, 240) }}...
          </p>

          <p v-else class="mt-4 text-gray-300 text-lg h-12"></p>

          <rating class="mt-4" :rating-percent="result.vote_average * 10"/>

        </div>

      </div>

</div>

</template>

<script>

export default {
  props:{
    searchResults:{
      type: Array,
      required: true
    },
    totalResults:{
      type: Number,
      required: true
    }
  },
  data(){
    return{
      imageWidth: window.width < 769 ? 'w154' : 'w185'
    }
  },
  methods:{
    showMovie(movieId){
     window.location.href = 'show/' + movieId;
    }
  }
}
</script>
