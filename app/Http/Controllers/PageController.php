<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('MyMovies');
    }

    public function movie_list(){
        $movies = Movie::all();
        return view('movieListPage', compact('movies'));
    }
}
