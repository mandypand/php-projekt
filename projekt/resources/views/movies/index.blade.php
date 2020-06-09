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
            <img src="https://m.media-amazon.com/images/M/MV5BMzQxNzQzOTQwM15BMl5BanBnXkFtZTgwMDQ2NTcwODM@._V1_.jpg" alt="">
            <img src="https://d2iltjk184xms5.cloudfront.net/uploads/photo/file/359368/6b2546abc8d20846b07b28346775eb4a-joker_poster.jpg" alt="">
            <img src="https://www.discshop.se/img/front_large/167844/invisible_man.jpg" alt="">
            <img src="https://m.media-amazon.com/images/M/MV5BYWZjMjk3ZTItODQ2ZC00NTY5LWE0ZDYtZTI3MjcwN2Q5NTVkXkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_UY1200_CR90,0,630,1200_AL_.jpg" alt="">
            
            
            
            
            @foreach ($movie as $movies)
        <a href="/movies/{{$movies->id}}">
            <p>{{$movies->movieTitle}}</p></a>
            @endforeach
        
        
        </section>

    </div>
@endsection