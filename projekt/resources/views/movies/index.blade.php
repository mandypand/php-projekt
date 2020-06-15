@extends('layouts.master')
@section('title')
    Movies
@endsection




@section('content')
    <div class="wrapper">
        <section class="hero">
            <img src="https://m.media-amazon.com/images/M/MV5BMzQxNzQzOTQwM15BMl5BanBnXkFtZTgwMDQ2NTcwODM@._V1_.jpg" alt=""> 
            <h1>MOVIE<p>&#9734;</h1>
        </section>
        
        <p>Insert a new movie</p>
        <form method="POST" action="/movies">

            {{csrf_field()}}

            <input class="form-control" type="title" placeholder="Title">
            <input class="form-control" name="year" type="text" placeholder="Year">
            
            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            
            {{-- <div>
                <textarea name="comments" placeholder="comments"></textarea>
            </div> --}}
            <select name="category" class="form-control">
                <option selected>Choose...</option>
                <option value="1">Action</option>
                <option value="2">Drama</option>
                <option value="3">Comedy</option>
                <option value="4">Horror</option>
            </select>
            <input class="form-control" name="timestamp" type="text" placeholder="Year">
            <div>
                <button type="submit" class="btn btn-primary">Submit Movie!</button>
            </div>
        </form>
        
        
        
        
        <section class="movie-section">
            
            @foreach ($movies as $movie)
                @foreach($movie->images as $image) 
                <img src="{{asset($image->name)}}" >
    
                @endforeach 
                <a href="/movies/{{$movie->id}}">
                <p>{{$movie->title}}</p></a>
                
            @endforeach
        </section>
    </div>
@endsection
             
               
            