@extends('layouts.master')
@section('title')
    {{$movie->movieTitle}}
@endsection



@section('content')
    <div class="wrapper">

        <section class="hero">
            
        </section>
        <h1 class="title">{{$movie->title}}</h1>
        <p>Year: <b>{{$movie->year}}</b> </p>
        
        <section class="movie-section">
            @foreach($movie->images as $image)
                    <img src="{{asset($image->name)}}" alt="" width="" height="">
            @endforeach
        <h2>Description</h2>
        <p>{{$movie->description}}</p>
        </section>
    </div>

   
<h1>Create review</h1>

<form method="POST" action="/reviews">
    {{csrf_field()}}
    
<input type="hidden" name="movie_id" value="{{$movie->id}}">

   
    <div>
       <textarea name="comments"></textarea>
    </div>
        <div>
       
    <button type="submit">Create</button>
    </div>

</form>
@if ($movie->reviews->count())
    <div>
        @foreach ($movie->reviews as $review)
            <p>{{ $review->comments}}</p>
            <p>
                <a href="/movies/{{ $movie->id}}/edit">Edit</a>
            </p>
            <p>
                <a href="/movies/{{ $movie->id}}/delete">Delete</a>
            </p>
        @endforeach
    </div>
@endif
@endsection