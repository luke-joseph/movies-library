<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {

  $popularMovies = Http::withToken(config('services.tmdb.key'))
  ->get('https://api.themoviedb.org/3/movie/popular');

  return view('index', compact('popularMovies'));
});

Route::get('/show', function () {
    return view('show');
});
