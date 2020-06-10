@extends('layouts.master')
@section('title')
    {{$movie->movieTitle}}
@endsection



@section('content')
    <div class="wrapper">

        <section class="hero">
            
        </section>
        <section class="movie-section">
        @foreach($movie->images as $image)
                    <img src="{{asset($image->name)}}" alt="" width="80" height="90">
                @endforeach
        <h1 class="title">{{$movie->title}}</h1>
        <p>Year:</p>
        <b>{{$movie->year}}</b>
        <h2>Description</h2>
        <p>{{$movie->description}}</p>
        </section>

    </div>
@endsection