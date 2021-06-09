<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MoviesController@index');
Route::get('/show/{movie}', 'MoviesController@show');
