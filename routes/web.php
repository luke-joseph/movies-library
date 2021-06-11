<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MoviesController@index');
Route::get('/movie/show/{movieId}', 'MoviesController@show');
Route::get('/movie/search', 'MoviesController@search');
