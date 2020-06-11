@extends('layouts.master')

@section('content')

<h1>Edit review</h1>

<form method="POST" action="/reviews/{{$review->id}}">

    {{method_field('PATCH')}}
    {{ csrf_field()}}

    
    
    <input type="hidden" name="" value="">

   
    <div>
       <textarea name="comments" required class="input {{$errors->has('comments') ? 'is-danger' : ''}}" >{{$review->comments}}</textarea>
    </div>
        <div>
       
    <button type="submit">Update</button>
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

@endsection
