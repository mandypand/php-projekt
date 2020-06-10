<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Review;

class ReviewController extends Controller
{
    public function index()
    {
        
        $reviews = Review::all();


    
        
        return view('movies.index',  ['reviews' => $reviews]);
    }

    public function show($id)
    {
        $review = Review::findOrFail($id);
        return view('movies/create', compact('review'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(){
        $review = new Review();
        $review->comments = request('comments');
       
        

        $review->save();

        return redirect('/movies.show');

        
    }

  
}
