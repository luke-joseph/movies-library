<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Helpers\GenreIdsToString;

class MoviesController extends Controller
{
    /**
     * Display a listing of the movies
     *
     * @return View
     */
    public function index()
    {
      $rawPopularMovies = Http::withToken(config('services.tmdb.key'))
      ->get(config('services.tmdb.api_url') . 'movie/popular');

      $popularMovies = collect($rawPopularMovies['results'])
      ->map(function ($movie) {

          return collect($movie)->merge([
            'release_date' => Carbon::create($movie['release_date'])->toFormattedDateString(),
            'genres' => GenreIdsToString::convert($movie['genre_ids'])
          ]);

      });

      $topRatedMovies = Http::withToken(config('services.tmdb.key'))
      ->get(config('services.tmdb.api_url') . 'movie/top_rated');

      $upcomingMovies = Http::withToken(config('services.tmdb.key'))
      ->get(config('services.tmdb.api_url') . 'movie/upcoming');

        return view('index', compact(
          'popularMovies',
          'topRatedMovies',
          'upcomingMovies',
        )
      );
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

      $relatedMoviesEndpoint = $endpoint . "/similar";

      $relatedMovies = Http::withToken(config('services.tmdb.key'))
      ->get($relatedMoviesEndpoint);

      return view('show', compact('movie', 'relatedMovies'));
    }

}
