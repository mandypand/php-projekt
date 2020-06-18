@extends('layouts.master')
@section('title')
    {{$movie->movieTitle}}
@endsection

@section('content')
    <div class="wrapper">
        <section class="hero">
        </section>
        <h1 class="title">{{$movie->title}}</h1>
        <p>Year:<b>{{$movie->year}}</b></p>
        <section class="movie-section">
            @foreach($movie->images as $image)
                <img src="{{asset($image->name)}}" alt="" width="50%" height="">
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
            <div class="form-group green-border-focus">
                <label for="exampleFormControlTextarea5"></label>
                <textarea name="comments" class="form-control {{$errors->has('comments') ? 'is-danger' : ''}}" >{{ old('comments') }}</textarea>
            </div>
        {{-- <textarea name="comments" class="input {{$errors->has('comments') ? 'is-danger' : ''}}" >{{ old('comments') }}</textarea> --}}
        </div>
        <div>
        <button type="submit" class="btn btn-secondary">Create</button>
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
            <div class="card" style="width: 16rem;">
                @foreach ($movie->reviews as $review)
                <div class="card-body">
                    <h5 class="card-title">{{ $review->comments}}</h5>
                    <p class="card-text"><b>Author: </b> <br>{{ $review->user->name }}</p>
                    <p><b> Date:</b><br> {{ $review->created_at }}</p>
                     @if(auth()->id() == $review->user_id)
                        <form method="GET" action="/reviews/{{$review->id}}/edit">
                            {{method_field('EDIT')}}
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                        <form method="POST" action="/reviews/{{$review->id}}">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    @endif
@endsection