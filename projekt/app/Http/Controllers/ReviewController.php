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
        // $review = Review::findOrFail($id);
        // return view('movies/review', compact('review'));
    }

    public function create()
    {
        // return view('movies.createreview');
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

    public function destroy($id)
    {
        // dd('delete' . $id);
        Review::find($id)->delete();

        // return redirect('/movies');
        return back();
    }

    public function edit($id)
    {
        // dd('edit' .$id);
        return view('movies.edit');

        // $review = new Review();
        // $review->comments = request('comments');
        // $review->movie_id = request('movie_id');
       
        

        // $review->save();

        // return redirect('/movies/'.$review->movie_id);
        // return back();
    }

  
}
