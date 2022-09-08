@extends('layout')
@section('content')
@if ($errors ->any())
<div class="alert alert-danger mt-3">
@foreach ($errors ->all() as $item)
    {{$item}}
@endforeach
</div>   
@endif

<form action="{{ route('auth.handleRegister')}}" method="POST" class="form-group">
   @csrf
<div class="col mt-4">
            <div class="mb-3">
                <input type="text" class="form-control"  placeholder="name" name="name" value="{{old('name')}}">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control"  placeholder="email" name="email" value="{{old('email')}}">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control"  placeholder="password" name="pass" value="{{old('pass')}}">
            </div>
         <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">register</button>
          </div>
         
        </div>
</form>
@endsection