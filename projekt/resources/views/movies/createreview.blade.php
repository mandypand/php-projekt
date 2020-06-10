@extends('layouts.master')

<h1>Create review</h1>

<form method="POST" action="/movies">
    {{csrf_field()}}
   
    <div>
       <textarea name="comments"></textarea>
    </div>
        <div>
       
    <button type="submit">Create</button>
    </div>

</form>

<!-- 
@section('content')
    
       <p> {{$review->comments}}</p>
    
@endsection -->