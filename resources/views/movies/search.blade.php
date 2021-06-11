@extends('layouts.app')

@section('content')

<div id="app">

  <search-results
  :search-results="{{ $searchResults }}"
  :total-results ="{{ $totalResults }}"
  />

</div>

@endsection
