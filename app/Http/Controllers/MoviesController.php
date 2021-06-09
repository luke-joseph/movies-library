<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the movies
     *
     * @return View
     */
    public function index()
    {
      $endpoint = config('services.tmdb.api_url') . 'movie/popular';

      $popularMovies = Http::withToken(config('services.tmdb.key'))
      ->get($endpoint);

      return view('index', compact('popularMovies'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $movie
     * @return View
     */
    public function show($movie)
    {
      $endpoint = config('services.tmdb.api_url') . "movie/$movie";

      $movie = Http::withToken(config('services.tmdb.key'))
      ->get($endpoint);

      return view('show', compact('movie'));
    }

}
