@extends('layout')

@section('content')

<form action="{{ route('books.update', $book ->id )}}" method="POST">
   @csrf
<div class="col mt-4">
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" 
                name="title" value="{{$book -> title}}">
            </div>
            <div class="mb-3">
                <textarea class="form-control" placeholder="desc"  name="desc" rows="3">{{$book -> desc}}</textarea>
            </div>
         <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">submit</button>
          </div>
        </div>

</form>
<a href="{{route('books.index')}}">Back</a>
@endsection 