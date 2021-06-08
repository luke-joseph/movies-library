<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('index');
});

Route::get('/show', function () {
    return view('show');
});

Route::get('/test-tmdb', function () {
    // make request
    $response = Http::withToken(config('services.tmdb.key'))
    ->get('https://api.themoviedb.org/3/movie/632357');

    dd($response->json());
});
