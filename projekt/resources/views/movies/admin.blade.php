<<<<<<< HEAD

             
               
            @extends('layouts.master')
            @section('title')
                Movies
            @endsection
            
            
            
            @section('content')
                <div class="wrapper">
                    <h1>Hej</h1>
                </div>
            @endsection
                         
                           
                        
=======
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


@section('content')
    
       <p> {{$review->comments}}</p>
    
@endsection

>>>>>>> 2a84bea9a5c76ef7fdd9878e182f9d4081b80c8a
