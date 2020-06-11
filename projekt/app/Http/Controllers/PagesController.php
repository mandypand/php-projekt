<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Movie;

class PagesController extends Controller
{
    public function index()
    {
        
        $movies = Movie::all();

        // return $movies;
        
        return view('movies.index',  ['movies' => $movies]);
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.show', compact('movie'));
    }
    
    public function create(){

        return view('movies.show');

    }
<<<<<<< HEAD

    public function store(Request $request)
    {
        return request()->all();
=======
    public function store(){
        $review = new Review();
        $review->comments = request('comments');
       
        

        $review->save();

        return redirect('/movies.{movie}');

        
>>>>>>> db7c0d8f4c3d2de92fce383586142133bcdf6d81
    }
    
}