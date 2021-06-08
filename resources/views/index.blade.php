@extends('layouts.app')

@section('content')
  <h1 class="text-white text-6xl font-thin">Movies DB</h1>

  {{-- popular movies --}}

  <div class="mt-8">
    <h2 class="text-3xl font-bold text-indigo-400">Popular Movies</h2>

    <div class="movie-poster-container mt-8 grid grid-flow-col grid-cols-4 grid-rows-2 gap-x-4 gap-y-10">
      <div class="">
        <img src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
        <h3 class="text-3xl mt-2 tracking-wider">Movie Title</h3>
        <p class="mt-1 tracking-wide font-semibold text-gray-300">87% | 08/06/2021</p>
        <p class="text-sm mt-1 text-gray-400">Action, Thriller</p>
      </div>

      <div class="">
        <img src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
        <h3 class="text-3xl mt-2 tracking-wider">Movie Title</h3>
        <p class="mt-1 tracking-wide font-semibold text-gray-300">87% | 08/06/2021</p>
        <p class="text-sm mt-1 text-gray-400">Action, Thriller</p>
      </div>

      <div class="">
        <img src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
        <h3 class="text-3xl mt-2 tracking-wider">Movie Title</h3>
        <p class="mt-1 tracking-wide font-semibold text-gray-300">87% | 08/06/2021</p>
        <p class="text-sm mt-1 text-gray-400">Action, Thriller</p>
      </div>

      <div class="">
        <img src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
        <h3 class="text-3xl mt-2 tracking-wider">Movie Title</h3>
        <p class="mt-1 tracking-wide font-semibold text-gray-300">87% | 08/06/2021</p>
        <p class="text-sm mt-1 text-gray-400">Action, Thriller</p>
      </div>

      <div class="">
        <img src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
        <h3 class="text-3xl mt-2 tracking-wider">Movie Title</h3>
        <p class="mt-1 tracking-wide font-semibold text-gray-300">87% | 08/06/2021</p>
        <p class="text-sm mt-1 text-gray-400">Action, Thriller</p>
      </div>

      <div class="">
        <img src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
        <h3 class="text-3xl mt-2 tracking-wider">Movie Title</h3>
        <p class="mt-1 tracking-wide font-semibold text-gray-300">87% | 08/06/2021</p>
        <p class="text-sm mt-1 text-gray-400">Action, Thriller</p>
      </div>

      <div class="">
        <img src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
        <h3 class="text-3xl mt-2 tracking-wider">Movie Title</h3>
        <p class="mt-1 tracking-wide font-semibold text-gray-300">87% | 08/06/2021</p>
        <p class="text-sm mt-1 text-gray-400">Action, Thriller</p>
      </div>

      <div class="">
        <img src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
        <h3 class="text-3xl mt-2 tracking-wider">Movie Title</h3>
        <p class="mt-1 tracking-wide font-semibold text-gray-300">87% | 08/06/2021</p>
        <p class="text-sm mt-1 text-gray-400">Action, Thriller</p>
      </div>

    </div>
  </div>

  {{-- Todays Recommended --}}

  <div class="mt-8">
    <h2 class="text-3xl">Today's Recommended Movie</h2>

    <div class="recommended-movie-container mt-8 grid grid-flow-col grid-cols-4 gap-4">
      <img src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
      <img src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
      <img src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
      <img src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">
    </div>
  </div>

@endsection
