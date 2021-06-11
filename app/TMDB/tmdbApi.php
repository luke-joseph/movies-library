<?php

namespace App\TMDB;

use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Helpers\GenreIdsToString;

/**
 *
 */
class tmdbApi
{
  public static function getMovies($uri, $amount)
  {

    $fullResponse = Http::withToken(config('services.tmdb.key'))
    ->get(config('services.tmdb.api_url') . $uri);

    return collect($fullResponse['results'])
    ->map(function ($movie) {

        return collect($movie)->merge([

          'release_date' => Carbon::create($movie['release_date'])->toFormattedDateString(),

          'genres' => GenreIdsToString::convert($movie['genre_ids'])

        ]);

    })->take($amount);

  }

  public static function getSingleMovie($uri)
  {

    $fullResponse = Http::withToken(config('services.tmdb.key'))
    ->get(config('services.tmdb.api_url') . $uri);

    $singleMovie = collect(json_decode($fullResponse->getBody(), true));

    $genresArray = array_map(function($genre){

      return $genre['id'];

    }, $singleMovie['genres']);

    return $singleMovie->merge([

      'release_date' => Carbon::create($singleMovie['release_date'])->toFormattedDateString(),

      'genres' => GenreIdsToString::convert($genresArray)

    ]);

  }

  public static function searchMovies($uri)
  {

    $fullResponse = Http::withToken(config('services.tmdb.key'))
    ->get(config('services.tmdb.api_url') . $uri);

    $searchResults = collect($fullResponse['results'])
    ->map(function ($movie) {

        return collect($movie)->merge([
          'release_date' => Carbon::create($movie['release_date'])->toFormattedDateString(),
          'genres' => GenreIdsToString::convert($movie['genre_ids'])
        ]);

    });

    return [
      'movies' => $searchResults,
      'total_results' => $fullResponse['total_results']
    ];

  }

}
