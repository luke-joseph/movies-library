@extends('layouts.app')

@section('content')

  <div id="app">

    <popular-movies
    :popular-movies="{{ $popularMovies }}"
    ></popular-movies>

    <index-secondary-section
    :top-rated-movies="{{ $topRatedMovies }}"
    :upcoming-movies="{{ $upcomingMovies }}"
    />

  </div>

@endsection
