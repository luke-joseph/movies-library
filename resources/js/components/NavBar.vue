<template>
  <div class="">
    <!-- large devices -->
    <nav class="hidden lg:block w-full bg-gray-100 px-6">

      <div class="nav-items flex flex-col sm:flex-row container mx-auto h-full justify-between">

          <div class="flex flex-col sm:flex-row items-center lg:w-3/4 text-lg">
            <a href="/" class="text-gray-500 mt-1 sm:mt-0">
              <img src="/img/moviesdb-logo.png" alt="moviesdb logo" class="w-40">
            </a>
          </div>

          <!-- search input -->
          <div class="hidden sm:block sm:w-1/4">

            <div class="search flex flex-col sm:flex-row sm:flex-wrap items-center w-full mx-auto rounded p-4 justify-between">

            <div class="w-full mb-2 sm:mb-0 uppercase font-medium sm:flex text-sm md:text-lg lg:text-sm ml-auto">

              <div class="flex w-full rounded-full bg-white border border-gray-300">

                <input class="w-full py-1 ml-3 text-gray-900 leading-snug focus:outline-none" @keydown.enter="searchMovies"
                type="text" name="movie_search" v-model="searchQuery" value="" placeholder="Search Movies...">

                <svg data-testid="search-icon" xmlns="http://www.w3.org/2000/svg" @click="searchMovies" viewBox="0 0 24 24" class="cursor-pointer w-5 md:w-6 lg:w-5 mr-3 icon-search">
                  <circle cx="10" cy="10" r="7" style="fill: #F7F5F5;"/>
                  <path style="fill: #A6A9AB;" d="M16.32 14.9l1.1 1.1c.4-.02.83.13 1.14.44l3 3a1.5 1.5 0 0 1-2.12 2.12l-3-3a1.5 1.5 0 0 1-.44-1.14l-1.1-1.1a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/>
                </svg>

              </div>

            </div>

          </div>
        </div>

      </div>

    </nav>

    <!-- small devices -->
    <nav class="lg:hidden w-full bg-gray-100 px-6 lg:px-0">

      <div class="nav-items flex flex-col sm:flex-row container mx-auto h-full justify-between">

          <div class="flex flex-col w-full text-lg py-4">

            <div class="flex justify-between items-center">
              <a href="/" class="text-gray-500 font-bold">
                <img src="/img/moviesdb-logo.png" alt="moviesdb logo" class="w-32">
              </a>

                  <div class="flex w-48 rounded-full bg-white">

                    <input class="w-full py-1 ml-3 text-gray-900 leading-snug focus:outline-none" @keydown.enter="searchMovies"
                    type="text" name="movie_search" v-model="searchQuery" value="" placeholder="Search Movies...">

                    <svg xmlns="http://www.w3.org/2000/svg" @click="searchMovies" viewBox="0 0 24 24" class="cursor-pointer w-5 md:w-6 lg:w-5 mr-3 icon-search">
                      <circle cx="10" cy="10" r="7" style="fill: #F7F5F5;"/>
                      <path style="fill: #A6A9AB;" d="M16.32 14.9l1.1 1.1c.4-.02.83.13 1.14.44l3 3a1.5 1.5 0 0 1-2.12 2.12l-3-3a1.5 1.5 0 0 1-.44-1.14l-1.1-1.1a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/>
                    </svg>

                  </div>

            </div>
          </div>

      </div>
    </nav>

  </div>

</template>

<script>
export default {
  data(){
    return{
      searchQuery: ''
    }
  },
  methods:{
    searchMovies(){

      window.location.href = '/movie/search?query=' + this.searchQuery;

    },
  }
}
</script>
