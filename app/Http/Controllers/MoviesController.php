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

      })->take(8);

      $rawTopRatedMovies = Http::withToken(config('services.tmdb.key'))
      ->get(config('services.tmdb.api_url') . 'movie/top_rated');

      $topRatedMovies = collect($rawTopRatedMovies['results'])
      ->map(function ($movie) {

          return collect($movie)->merge([
            'release_date' => Carbon::create($movie['release_date'])->toFormattedDateString(),
            'genres' => GenreIdsToString::convert($movie['genre_ids'])
          ]);

      })->take(2);

      $rawUpcomingMovies = Http::withToken(config('services.tmdb.key'))
      ->get(config('services.tmdb.api_url') . 'movie/upcoming');

      $upcomingMovies = collect($rawUpcomingMovies['results'])
      ->map(function ($movie) {

          return collect($movie)->merge([
            'release_date' => Carbon::create($movie['release_date'])->toFormattedDateString(),
            'genres' => GenreIdsToString::convert($movie['genre_ids'])
          ]);

      })->take(6);

        return view('movies.index', compact(
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

      $movieRaw = Http::withToken(config('services.tmdb.key'))
      ->get($endpoint);

      $singleMovie = collect(json_decode($movieRaw->getBody(), true));

      $genresArray = array_map(function($genre){
        return $genre['id'];
      }, $singleMovie['genres']);

      $movie = $singleMovie->merge([
        'release_date' => Carbon::create($singleMovie['release_date'])->toFormattedDateString(),
        'genres' => GenreIdsToString::convert($genresArray)
      ]);

      $relatedMoviesEndpoint = $endpoint . "/similar";

      $relatedMoviesRaw = Http::withToken(config('services.tmdb.key'))
      ->get($relatedMoviesEndpoint);

      $relatedMovies = collect($relatedMoviesRaw['results'])
      ->map(function ($movie) {

          return collect($movie)->merge([
            'release_date' => Carbon::create($movie['release_date'])->toFormattedDateString(),
            'genres' => GenreIdsToString::convert($movie['genre_ids'])
          ]);

      })->take(4);

      return view('movies.show', compact('movie', 'relatedMovies'));
    }

}
