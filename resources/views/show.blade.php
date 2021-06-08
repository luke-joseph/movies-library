@extends('layouts.app')

@section('content')

<div class="flex w-full mt-20 mb-32">

  {{-- Show Movie --}}
  <div class="w-3/4">

    <div class="flex rounded">

      <img src="https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg" alt="">

      <div class="movie-info mx-12">

        <h3 class="text-4xl tracking-wider">Movie Title</h3>

        <p class="mt-4 tracking-wide font-semibold text-gray-300 text-xl">87% | Action, Thriller | Released 08/06/2021</p>

        <p class="mt-4 text-gray-300 text-lg">
          In 1970s London amidst the punk rock revolution, a young grifter named Estella is determined to make a name for herself with her designs. She befriends a pair of young thieves who appreciate her appetite for mischief, and together they are able to build a life for themselves on the London streets. One day, Estella’s flair for fashion catches the eye of the Baroness von Hellman, a fashion legend who is devastatingly chic and terrifyingly haute. But their relationship sets in motion a course of events and revelations that will cause Estella to embrace her wicked side and become the raucous, fashionable and revenge-bent Cruella.
        </p>

        <div class="trailer mt-10">
          <button class="uppercase text-lg font-semibold tracking-wider bg-indigo-700 px-6 py-3 rounded">
            Watch Trailer
          </button>
        </div>
      </div>

    </div>

  </div>

  {{-- Recommended --}}

  <div class="w-1/4 pl-10">

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

  </div>

</div>

@endsection
