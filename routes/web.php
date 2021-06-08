<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@index');

Route::get('/show', function () {
    return view('show');
});
