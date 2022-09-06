@extends('layout')
@section('content')

<form action="{{ route('books.store')}}" method="POST" class="form-group">
   @csrf
<div class="col mt-4">
            <div class="mb-3">
                <input type="text" class="form-control"  placeholder="Title" name="title">
            </div>
            <div class="mb-3">
                <textarea class="form-control" placeholder="desc"  name="desc" rows="3"></textarea>
            </div>
         <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">submit</button>
          </div>
        </div>
</form>
<a href="{{route('books.index')}}">Back</a>
@endsection