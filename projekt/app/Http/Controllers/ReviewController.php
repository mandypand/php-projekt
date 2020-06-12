<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Review;

class ReviewController extends Controller

{  
     public function __construct()
    {
        //man behöver vara inloggade för att kunna skapa en review
        $this->middleware('auth')->except('show');
    }

    public function index()
    {
        
        $reviews = Review::all();


    
        
        return view('movies.index',  ['reviews' => $reviews]);
    }

    public function show($id)
    {
     $review = Review::findOrFail()($id);    
     return view('review.show', compact('review'));
    }

    public function create()
    {
        // return view('movies.createreview');
    }

    public function store(Request $request)
    {
        request()->validate([
            'comments' => ['required', 'min:3']
        ]);

        $review = new Review();
        $review->comments = request('comments');
        $review->movie_id = request('movie_id');
        $review->user_id = auth()->id(); 
       
        
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
       

        $review = Review::find($id);

        return view('movies.edit', compact('review'));

      
    }

    public function update($id){

        request()->validate([
            'comments' => ['required', 'min:3']
        ]);

        $review = Review::find($id);
        

        $review->comments = request('comments');

        $review->save();

        return redirect('/movies/'.$review->movie_id);

    }

}
