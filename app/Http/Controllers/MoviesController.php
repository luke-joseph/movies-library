<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Helpers\GenreIdsToString;
use App\TMDB\tmdbApi;

class MoviesController extends Controller
{
    /**
     * Display a listing of the movies
     *
     * @return View
     */
    public function index()
    {

      $popularMovies = tmdbApi::getMovies('movie/popular', 8);

      $topRatedMovies = tmdbApi::getMovies('movie/top_rated', 2);

      $upcomingMovies = tmdbApi::getMovies('movie/upcoming', 6);

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
     * @param  int  $movieId
     * @return View
     */
    public function show($movieId)
    {

      $singleMovie = tmdbApi::getSingleMovie("movie/" . $movieId);

      $relatedMovies = tmdbApi::getMovies("movie/" . $movieId . "/similar", 4);

      return view('movies.show', compact('singleMovie', 'relatedMovies'));

    }

    /**
     * return a listing of searched movies and amount of total results
     *
     * @return Array
     */
    public function search()
    {

      $searchResults = tmdbApi::searchMovies('search/movie?query=' . request('query'));

      return view('movies.search', compact('searchResults'));

    }

}
