<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function index() {

    }

    public function create() {
        
    }

    public function store(request $request){


        $img = new Image();
        $img->name = request('name');
        $img->movie_id = request('movie_id');
       
        $img->save();

       

        $imageSource ="storage/";
        $imageSource .=$request->image->store('uploads', 'public');
        $adId = intval($request['adId']);

        $img = new Image();
        $img->source = $imageSource; 
        $img->description = ""; 
        $img->movies_id = $adId;

        $img->save(); 
       
        return redirect("/movies/".$adId."/edit");

        return redirect("/movies");
    }

    
    public function show($id)
    {
        
    }

    public function edit($id)
    {
       
    }

    public function update(Request $request, $id)
    {
       
    }

    public function destroy($id)
    {   
        $img = Image::findOrFail($id);

        $img->delete();
        return redirect('/movies/'.$img->advert->id.'/edit');
        
    }

}

        

