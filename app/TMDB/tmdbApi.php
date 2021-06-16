<?php

namespace App\TMDB;

use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Helpers\GenreIdsToString;

/**
 * The api to The Movie Database api
 */
class tmdbApi
{
  public static function getMovies($uri, $amount)
  {
    // get the whole response
    $fullResponse = Http::withToken(config('services.tmdb.key'))
    ->get(config('services.tmdb.api_url') . $uri);

    /*
    /* return collection from the results & format / overwrite release data &
    /* genres to readable formats
    */
    return collect($fullResponse['results'])
    ->map(function ($movie) {

        return collect($movie)->merge([

          // check release date exists on the movie and format it if it does
          'release_date' => array_key_exists('release_date', $movie) ?
          Carbon::create($movie['release_date'])->toFormattedDateString()
          : null,

          'genres' => GenreIdsToString::convert($movie['genre_ids'])

        ]);

    })->take($amount);

  }

  public static function getSingleMovie($uri)
  {

    $fullResponse = Http::withToken(config('services.tmdb.key'))
    ->get(config('services.tmdb.api_url') . $uri);

    $singleMovie = collect(json_decode($fullResponse->getBody(), true));

    // convert the genres array to expected param array for GenreIdsToString
    $genresArray = array_map(function($genre){

      return $genre['id'];

    }, $singleMovie['genres']);

    // filter videos for the trailers only
    if (count ($singleMovie['videos']['results'])) {

    $trailers = array_filter($singleMovie['videos']['results'], function ($video){
        return $video['type'] === 'Trailer';
      });

    }

    return $singleMovie->merge([

      'release_date' => isset($singleMovie['release_date']) ?
      Carbon::create($singleMovie['release_date'])->toFormattedDateString()
      : null,

      'genres' => GenreIdsToString::convert($genresArray),

      'videos' => isset($trailers) ? $trailers : null

    ]);

  }

  public static function searchMovies($uri)
  {

    $fullResponse = Http::withToken(config('services.tmdb.key'))
    ->get(config('services.tmdb.api_url') . $uri);

    $searchResults = collect($fullResponse['results'])
    ->map(function ($movie) {

        return collect($movie)->merge([

          'release_date' => array_key_exists('release_date', $movie) ?
          Carbon::create($movie['release_date'])->toFormattedDateString()
          : null,

          'genres' => GenreIdsToString::convert($movie['genre_ids'])

        ]);

    });

    return [
      'movies' => $searchResults,
      'total_results' => $fullResponse['total_results']
    ];

  }

}
