<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use \App\Image;
use App\Movie;


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

        $movies = new Movie();
        $movies->title = request('title');
        $movies->year = request('year');
        $movies->description = request('description');
        
        $movies->save();


        $img = new Image();
        $img->name = request('name');
        $img->movie_id = $movies->id;
        $img->description = "";
       
        $img->save();

        $imageSource ="storage/";
        $imageSource .=$request->name->store('uploads', 'public');
        $adId = intval($request['adId']);
       
        
        return redirect('/movies');
        
        
                
        
                



    }
    
}