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
        <section class="movie-section">
            @foreach ($movies as $movie)
                <a href="/movies/{{$movie->id}}">
                <p>{{$movie->title}}</p></a>
                @foreach($movie->images as $image)
                    <img src="{{asset($image->name)}}" alt="" width="80" height="90">
                @endforeach
            @endforeach
        </section>
    </div>
@endsection