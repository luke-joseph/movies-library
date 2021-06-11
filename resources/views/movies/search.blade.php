@extends('layouts.app')

@section('content')

<div id="app">

  <search-results
  :search-results="{{ $searchResults }}"
  />

</div>

@endsection
