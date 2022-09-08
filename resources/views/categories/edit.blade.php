@extends('layout')

@section('content')
@if ($errors ->any())
<div class="alert alert-danger mt-3">
@foreach ($errors ->all() as $item)
    {{$item}}
@endforeach
</div>   
@endif
<form action="{{ route('categories.update', $categories ->id )}}" method="POST" >
   @csrf
<div class="col mt-4">
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name" 
                name="name" value="{{ old('name') ?? $categories -> name}}">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">submit</button>
          </div>
        </div>
</form>
<a href="{{route('categories.index')}}">Back</a>
@endsection 