@extends('layout')

@section('content')
@if ($errors ->any())
<div class="alert alert-danger mt-3">
@foreach ($errors ->all() as $item)
    {{$item}}
@endforeach
</div>   
@endif
<form action="{{ route('books.update', $book ->id )}}" method="POST" enctype="multipart/form-data">
   @csrf
<div class="col mt-4">
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" 
                name="title" value="{{ old('title') ?? $book -> title}}">
            </div>
            <div class="mb-3">
                <textarea class="form-control" placeholder="desc"  name="desc" rows="3">{{ old('desc') ?? $book -> desc}}</textarea>
            </div>
         <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">submit</button>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" name="img">
          </div>
        </div>
</form>
<a href="{{route('books.index')}}">Back</a>
@endsection 