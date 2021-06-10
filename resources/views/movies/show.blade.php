@extends('layouts.app')

@section('content')

<div id="app">

  <show-movies-component
  :movie="{{ $movie }}"
  :related-movies="{{ $relatedMovies }}"
  />

</div>

@endsection
