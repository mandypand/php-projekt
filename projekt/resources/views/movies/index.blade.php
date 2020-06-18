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
        <div class="admin__panel">
            @auth
                @if(\App\User::findOrFail(auth()->id())->isAdmin())
                    <h2>Insert a new movie</h2>
                    <form enctype="multipart/form-data"
                        method="POST" action="/movies">
                        {{ csrf_field() }}
                        <label for="exampleFormControlTextarea1">Movie Title...</label>
                        <input class="form-control" name="title" type="text" placeholder="Title">
                        <label for="exampleFormControlTextarea1">Year...</label>
                        <input class="form-control" name="year" type="text" placeholder="Year">
                        <div class="form-group">
                            <label for="exampleFormControlFile1"></label>
                            <input type="file" name="name" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description...</label>
                            <textarea class="form-control {{$errors->has('description') ? 'is-danger' : ''}}" name="description" id="exampleFormControlTextarea1" rows="3">{{ old('description') }}</textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success">Submit Movie!</button>
                        </div>
                        @if ($errors->any())
                            <div class="">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li style="color: white;"> {{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </form>
                @endif
            @endauth
        </div>
            <section class="movie-section">
                @foreach ($movies as $movie)
                <div>
                    @foreach($movie->images as $image) 
                        <img src="{{asset($image->name)}}" >
                    @endforeach 
                    @auth
                        @if(\App\User::findOrFail(auth()->id())->isAdmin())
                            <form method="POST" action="/movies/{{$movie->id}}">
                                {{method_field('DELETE')}}
                                {{csrf_field()}}
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        @endif
                    @endauth
                    <a href="/movies/{{$movie->id}}">
                    <p>{{$movie->title}}</p></a> 
            </div>
            @endforeach
            </section>
    </div>
@endsection
             
               
            