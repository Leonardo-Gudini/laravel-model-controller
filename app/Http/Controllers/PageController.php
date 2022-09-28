<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('layout.MyMovies');
    }

    public function movie_list(){
        $movies = Movie::all();
        var_dump($movies);
        return view('movieListPage', compact('movies'));
    }
}
