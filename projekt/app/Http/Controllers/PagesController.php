<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Movie;

class PagesController extends Controller
{
    public function index()
    {
        
        $movie = Movie::all();

        // return $movies;
        
        return view('movies.index', compact('movie'));
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.show', compact('movie'));
    }
   
}
