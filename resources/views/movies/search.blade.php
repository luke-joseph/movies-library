@extends('layouts.app')

@section('content')

<div id="app">

  <search-results
  :search-results="{{ $searchResults['movies'] }}"
  :total-results ="{{ $searchResults['total_results'] }}"
  />

</div>

@endsection
