@extends('layouts.app')

@section('content')
  {{-- popular movies --}}

  <div id="app">
    <popular-movies :popular-movies="{{ $popularMovies }}"></popular-movies>
  </div>



{{-- second section --}}
<div class="flex w-full mt-20 mb-64">

  {{-- Todays Recommended --}}
  <div class="w-2/3">

    <h2 class="text-3xl font-bold text-indigo-300">// Today's Recommended Movies</h2>

    <div class="recommended-movie-container mt-8 flex bg-gray-900 p-6 rounded">

      <img src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">

      <div class="movie-info mx-12">

        <h3 class="text-4xl tracking-wider">Movie Title</h3>

        <p class="text-sm mt-1 text-gray-400">Action, Thriller</p>

        <p class="mt-1 tracking-wide font-semibold text-gray-300">87% | Released 08/06/2021</p>

        <p class="mt-4 text-gray-300">
          In 1970s London amidst the punk rock revolution, a young grifter named Estella is determined to make a name for herself with her designs. She befriends a pair of young thieves who appreciate her appetite for mischief, and together they are able to build a life for themselves on the London streets. One day, Estella’s flair for fashion catches the eye of the Baroness von Hellman, a fashion legend who is devastatingly chic and terrifyingly haute. But their relationship sets in motion a course of events and revelations that will cause Estella to embrace her wicked side and become the raucous, fashionable and revenge-bent Cruella.
        </p>

        <div class="trailer mt-6">
          <button class="uppercase text-base font-semibold tracking-wider bg-indigo-700 px-4 py-2 rounded">
            Watch Trailer
          </button>
        </div>
      </div>

    </div>

    <div class="recommended-movie-container mt-8 flex bg-gray-900 p-6 rounded">

      <img src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">

      <div class="movie-info mx-12">

        <h3 class="text-4xl tracking-wider">Movie Title</h3>

        <p class="text-sm mt-1 text-gray-400">Action, Thriller</p>

        <p class="mt-1 tracking-wide font-semibold text-gray-300">87% | Released 08/06/2021</p>

        <p class="mt-4 text-gray-300">
          In 1970s London amidst the punk rock revolution, a young grifter named Estella is determined to make a name for herself with her designs. She befriends a pair of young thieves who appreciate her appetite for mischief, and together they are able to build a life for themselves on the London streets. One day, Estella’s flair for fashion catches the eye of the Baroness von Hellman, a fashion legend who is devastatingly chic and terrifyingly haute. But their relationship sets in motion a course of events and revelations that will cause Estella to embrace her wicked side and become the raucous, fashionable and revenge-bent Cruella.
        </p>

        <div class="trailer mt-6">
          <button class="uppercase text-base font-semibold tracking-wider bg-indigo-700 px-4 py-2 rounded">
            Watch Trailer
          </button>
        </div>
      </div>

    </div>

  </div>

{{-- Coming Soon --}}
  <div class="w-1/3">
    <div class="w-3/4 ml-auto h-full">
    <h2 class="text-3xl font-bold text-indigo-300 mb-8">// Most Anticipated</h2>
{{-- Mini movie --}}
    <div class="mini-movie mt-6">
      <div class="flex">

        <div class="w-16">

          <img class="" src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
        </div>

        <div class="movie-info ml-4">

          <h3 class="text-xl tracking-wider">Movie Title</h3>

          <p class="text-sm mt-1 text-gray-400">Action, Thriller</p>

          <p class="mt-1 font-semibold text-gray-300">08/06/2021</p>

        </div>


      </div>
    </div>

    <div class="mini-movie mt-6">
      <div class="flex">

        <div class="w-16">

          <img class="" src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
        </div>

        <div class="movie-info ml-4">

          <h3 class="text-xl tracking-wider">Movie Title</h3>

          <p class="text-sm mt-1 text-gray-400">Action, Thriller</p>

          <p class="mt-1 font-semibold text-gray-300">08/06/2021</p>

        </div>


      </div>
    </div>

    <div class="mini-movie mt-6">
      <div class="flex">

        <div class="w-16">

          <img class="" src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
        </div>

        <div class="movie-info ml-4">

          <h3 class="text-xl tracking-wider">Movie Title</h3>

          <p class="text-sm mt-1 text-gray-400">Action, Thriller</p>

          <p class="mt-1 font-semibold text-gray-300">08/06/2021</p>

        </div>


      </div>
    </div>

    <div class="mini-movie mt-6">
      <div class="flex">

        <div class="w-16">

          <img class="" src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
        </div>

        <div class="movie-info ml-4">

          <h3 class="text-xl tracking-wider">Movie Title</h3>

          <p class="text-sm mt-1 text-gray-400">Action, Thriller</p>

          <p class="mt-1 font-semibold text-gray-300">08/06/2021</p>

        </div>


      </div>
    </div>


    <h2 class="text-3xl font-bold text-indigo-300 mb-8 mt-8">// Highest Rated</h2>

    <div class="mini-movie mt-6">
      <div class="flex">

        <div class="w-16">

          <img class="" src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
        </div>

        <div class="movie-info ml-4">

          <h3 class="text-xl tracking-wider">Movie Title</h3>

          <p class="text-sm mt-1 text-gray-400">Action, Thriller</p>

          <p class="mt-1 font-semibold text-gray-300">08/06/2021</p>

        </div>


      </div>
    </div>

    <div class="mini-movie mt-6">
      <div class="flex">

        <div class="w-16">

          <img class="" src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
        </div>

        <div class="movie-info ml-4">

          <h3 class="text-xl tracking-wider">Movie Title</h3>

          <p class="text-sm mt-1 text-gray-400">Action, Thriller</p>

          <p class="mt-1 font-semibold text-gray-300">08/06/2021</p>

        </div>


      </div>
    </div>

    <div class="mini-movie mt-6">
      <div class="flex">

        <div class="w-16">

          <img class="" src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
        </div>

        <div class="movie-info ml-4">

          <h3 class="text-xl tracking-wider">Movie Title</h3>

          <p class="text-sm mt-1 text-gray-400">Action, Thriller</p>

          <p class="mt-1 font-semibold text-gray-300">08/06/2021</p>

        </div>


      </div>
    </div>

    <div class="mini-movie mt-6">
      <div class="flex">

        <div class="w-16">

          <img class="" src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
        </div>

        <div class="movie-info ml-4">

          <h3 class="text-xl tracking-wider">Movie Title</h3>

          <p class="text-sm mt-1 text-gray-400">Action, Thriller</p>

          <p class="mt-1 font-semibold text-gray-300">08/06/2021</p>

        </div>


      </div>
    </div>

    </div>
  </div>

</div>

@endsection
