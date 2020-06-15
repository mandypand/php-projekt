@extends('layouts.master')

@section('content')

<h1>Edit review</h1>
<div class="container" style="min-height: 800px;">
<form method="POST" action="/reviews/{{$review->id}}">
    {{method_field('PATCH')}}
    {{ csrf_field()}}
    <input type="hidden" name="" value="">
    <div class="form-group green-border-focus">
        <label for="exampleFormControlTextarea5"></label>
        <textarea name="comments" class="form-control {{$errors->has('comments') ? 'is-danger' : ''}}" >{{ old('comments') }}</textarea>
    </div>
    <div>
        <button type="submit" class="btn btn-secondary">Edit</button>
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
</div>

@endsection
