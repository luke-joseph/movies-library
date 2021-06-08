<nav class="h-16 w-full bg-gray-900">
  <div class="nav-items flex container mx-auto h-full justify-between">
    <div class="flex items-center w-1/3 text-lg">
      <a href="/" class="text-white">MoviesDB </a>
      <a href="/" class="text-white ml-10">Movies</a>
      <a href="#" class="text-white ml-6">TV shows</a>
      <a href="#" class="text-white ml-6">Actors</a>
    </div>
    <div class="w-1/3">
      <div id="search" class="flex flex-col sm:flex-row sm:flex-wrap items-center w-full mx-auto rounded p-4 justify-between">
      <div class="w-full sm:w-1/2 mb-2 sm:mb-0 uppercase font-medium sm:flex text-sm md:text-lg lg:text-sm mr-auto lg:mr-0">
        <div class="flex w-full rounded bg-white">
          <input class="w-full py-1 ml-3 text-grey-700 leading-snug" type="text" name="movie_search" v-model="searchValue" value="" placeholder="Search Movies...">
          <svg data-testid="search-icon" xmlns="http://www.w3.org/2000/svg" @click="searchMovies" viewBox="0 0 24 24" class="cursor-pointer w-5 md:w-6 lg:w-5 mr-3 icon-search">
            <circle cx="10" cy="10" r="7" style="fill: #F7F5F5;"/>
            <path style="fill: #A6A9AB;" d="M16.32 14.9l1.1 1.1c.4-.02.83.13 1.14.44l3 3a1.5 1.5 0 0 1-2.12 2.12l-3-3a1.5 1.5 0 0 1-.44-1.14l-1.1-1.1a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/>
          </svg>
        </div>
      </div>
    </div>
  </div>
</nav>
