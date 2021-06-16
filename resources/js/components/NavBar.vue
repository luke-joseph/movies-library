<template>
  <div class="">
    <!-- large devices -->
    <nav class="hidden lg:block w-full bg-gray-900 px-6 lg:px-0">

      <div class="nav-items flex flex-col sm:flex-row container mx-auto h-full justify-between">

          <div class="flex flex-col sm:flex-row items-center lg:w-1/3 text-lg">
            <a href="/" class="text-white mt-1 sm:mt-0">MoviesDB </a>
            <a href="/" class="text-white mt-2 sm:mt-0 sm:ml-10">Movies</a>
            <a href="#" class="text-white mt-1 sm:mt-0 sm:ml-6">TV shows</a>
            <a href="#" class="text-white mt-1 sm:mt-0 sm:ml-6 mb-6 sm:mb-0">Actors</a>
          </div>

          <!-- search input -->
          <div class="hidden sm:block sm:w-1/3">

            <div class="search flex flex-col sm:flex-row sm:flex-wrap items-center w-full mx-auto rounded p-4 justify-between">

            <div class="w-5/6 sm:w-full mx-auto sm:mx-0 lg:w-1/2 mb-2 sm:mb-0 uppercase font-medium sm:flex text-sm md:text-lg lg:text-sm mr-auto lg:mr-0">

              <div class="flex w-full rounded bg-white">

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
    <nav class="lg:hidden w-full bg-gray-900 px-6 lg:px-0">

      <div class="nav-items flex flex-col sm:flex-row container mx-auto h-full justify-between">

          <div class="flex flex-col w-full text-lg py-4">

            <div class="flex justify-between items-center">
              <a href="/" class="text-white">Movies DB</a>
              <div class="">
                  <svg v-show="!showDropDown" @click="showDropDown = true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 icon-menu">
                    <path class="secondary" style="fill: white;" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                    </path>
                  </svg>

                <svg v-show="showDropDown" @click="showDropDown = false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-10 icon-close-circle">
                  <circle cx="12" cy="12" r="10" class="primary" style="fill: none;"></circle>
                  <path class="secondary" style="fill: white;" d="M13.41 12l2.83 2.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 1 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12z"></path>
                </svg>

              </div>

            </div>

              <div v-if="showDropDown" class="flex flex-col">
                <a href="/" class="text-white mt-2">Movies</a>
                <a href="#" class="text-white mt-1">TV shows</a>
                <a href="#" class="text-white mt-1 mb-4">Actors</a>

                <!-- search input -->
                <div class="w-full">

                  <div class="search">

                  <div class="w-5/6 md:w-1/2 mb-2 uppercase font-medium text-sm md:text-lg mr-auto">

                    <div class="flex w-full rounded bg-white">

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
      searchQuery: '',
      showDropDown: false
    }
  },
  methods:{
    searchMovies(){

      window.location.href = '/movie/search?query=' + this.searchQuery;

    },
  }
}
</script>
