@extends('layouts.master')
@section('title')
    {{$movie->movieTitle}}
@endsection



@section('content')
    <div class="wrapper">

        <section class="hero">
            
        </section>
        <section class="movie-section">
        <h1 class="title">{{$movie->movieTitle}}</h1>
        <p>Year:</p>
        <b>{{$movie->movieYear}}</b>
        <p>{{$movie->movieDescription}}</p>
        </section>

    </div>
@endsection