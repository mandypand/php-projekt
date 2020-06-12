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
       <textarea name="comments" class="input {{$errors->has('comments') ? 'is-danger' : ''}}" >{{ old('comments') }}</textarea>
    </div>
        <div>
       
    <button type="submit">Create</button>
    </div>
    @if ($errors->any())
        <div class="">
            <ul>
                @foreach ($errors->all() as $error)
                <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</form>
@if ($movie->reviews->count())
    <div>
        @foreach ($movie->reviews as $review)
            <p>{{ $review->comments}}</p>
            {{-- <p>
                <a href="/movies/{{ $movie->id}}/edit">Edit</a>
            </p>
            <p>
                <a href="/movies/{{ $movie->id}}/delete">Delete</a>
            </p> --}}
            <div class="Author_Content">
                    <p> Author:</p>
                    <p> Date: {{ $review->created_at }}</p>
                </div>
            <form method="POST" action="/reviews/{{$review->id}}">
                {{method_field('DELETE')}}
                {{csrf_field()}}
                
                <button type="submit">Delete</button>
            </form>
            <form method="GET" action="/reviews/{{$review->id}}/edit">
                {{method_field('EDIT')}}
                {{csrf_field()}}
                
                <button type="submit">Edit</button>
            </form>
        @endforeach
    </div>
@endif
@endsection