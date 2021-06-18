@extends('layouts.app')

@section('content')

  <div id="app">

    <popular-movies
    :popular-movies="{{ $popularMovies }}"
    ></popular-movies>

    <div class="flex flex-col lg:flex-row w-full mt-20 mb-24 lg:mb-64">

      <todays-recommended
      :top-rated-movies="{{ $topRatedMovies }}">
      </todays-recommended>

      <upcoming-movies
      :upcoming-movies="{{ $upcomingMovies }}"/>

    </div>

  </div>

@endsection
