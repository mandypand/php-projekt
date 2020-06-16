<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('movies.index');
    }

    public function create()
    {
        return view('movies.index');
    }

    public function store() 
    {
        $movie = new movies();

        $movie->title = request('title');
        $movie->year = request('year');
        $movie->name = request('name');
        $movie->description = request('description');
        $movie->category = request('category');

        $movie->save();

        return redirect('movies.index');
    }


}
