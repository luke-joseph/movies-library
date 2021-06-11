@extends('layouts.app')

@section('content')

<div id="app">

  <show-movies-component
  :movie="{{ $singleMovie }}"
  :related-movies="{{ $relatedMovies }}"
  />

</div>

@endsection
