<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MoviesController@index');
Route::get('/movie/{movie}', 'MoviesController@show');
