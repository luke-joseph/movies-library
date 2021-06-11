<template>
<div class="w-full lg:w-2/3 mt-8 sm:mt-16">

  <h2 class="text-3xl font-bold text-indigo-300 mb-8">// Search Results</h2>

  <p class="mb-10" v-if="searchResults.length">Your Search returned {{ searchResults.length }} results</p>

  <p class="mb-10" v-else>Your Search returned 0 results</p>

  <!-- Movie Cards -->
      <div v-for="result in searchResults" class="flex flex-col sm:flex-row mb-8 bg-gray-900 p-6 rounded">

        <img :src="'https://image.tmdb.org/t/p/w185' + result.poster_path"
        :alt="result.original_title + ' result poster'">

        <div class="result-info md:ml-6 md:mr-2 lg:ml-12 lg:mr-12">

          <h3 class="text-4xl mt-2 sm:mt-0 sm:tracking-wider text-white">{{ result.original_title }}</h3>

          <p class="mt-4 tracking-wide font-semibold text-gray-300 text-xl">
            {{ (result.vote_average * 10) + '%' }}
            |
            <span>{{ result.genres }}</span>
            | {{ result.release_date }}
          </p>

          <p v-if="result.overview" class="mt-4 text-gray-300 text-lg">
            {{ result.overview.substring(0, 240) }}...
          </p>

          <p v-else class="mt-4 text-gray-300 text-lg h-12">
          </p>

          <div class="trailer mt-10">
            <button class="uppercase text-base font-semibold tracking-wider bg-indigo-700 px-4 py-2 rounded">
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
    searchResults:{
      type: Array,
      required: true
    }
  }
}
</script>
