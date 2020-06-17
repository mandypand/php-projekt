<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use \App\Image;
use App\Movie;
use App\Review;


class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
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

    public function store(Request $request){
        request()->validate([
            'title' => ['required', 'min:3'],
            'year'=>['required', 'min:4'],
            'description'=>['required', 'min:3']
        ]);

        $movies = new Movie();
        $movies->title = request('title');
        $movies->year = request('year');
        $movies->description = request('description');
        
        $movies->save();

        $imageSource = "storage/";
        $imageSource .= $request->name->store('uploads','public');

        $img = new Image();
        $img->name = $imageSource;
        $img->movie_id = $movies->id;
        $img->description = "";
       
        $img->save();

        return redirect('/movies');

    }

    public function destroy($id){


        Image::where('movie_id', $id)->delete();
        
        Movie::findorFail($id)->delete();
        
        return redirect('/movies');

    }
    
}