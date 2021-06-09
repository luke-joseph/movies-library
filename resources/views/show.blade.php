@extends('layouts.app')

@section('content')

<div id="app">
  <show-movies-component :movie="{{ $movie }}"></show-movies-component>
</div>

@endsection
