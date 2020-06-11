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
        return view('movies/createreview', compact('review'));
    }

    public function create()
    {
        return view('movies.createreview');
    }

    public function store(Request $request)
    {
        $review = new Review();
        $review->comments = request('comments');
        $review->movie_id = request('movie_id');
       
        

        $review->save();

        return redirect('/movies/'.$review->movie_id);
        // return back();


        
    }

  
}
