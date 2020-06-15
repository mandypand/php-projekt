@extends('layouts.master')
@section('title')
    Admin-page
@endsection

@section('content')
    <div class="wrapper">
        <h1>Insert a new movie</h1>
        <form method="POST" action="/movies">

            {{csrf_field()}}

            <div>
                <input type="text" name="title" placeholder="Title">
            </div>
            <div>
                <input type="text" name="year" placeholder="Year">
            </div>
            <div>
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <div>
                <textarea name="description" placeholder="description"></textarea>
            </div>
            {{-- <div>
                <textarea name="comments" placeholder="comments"></textarea>
            </div> --}}
            <select name="category">
                <option selected>Choose...</option>
                <option value="1">Action</option>
                <option value="2">Drama</option>
                <option value="3">Comedy</option>
                <option value="4">Horror</option>
            </select>
            <div>
                <button type="submit">Add Movie</button>
            </div>
        </form>
    </div>     
@endsection