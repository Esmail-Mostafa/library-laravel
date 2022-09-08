@extends('layout')
@section('content')
<h1>All categories</h1>
<a class="btn btn-primary w-25 m-3 " href="{{route('categories.create') }}" >create</a> 
@foreach ($categories as $category)
<a href="{{route('categories.show' , $category -> id)}}"><h2>{{$category ->name}}</h2></a>
<a class="btn btn-primary w-25 m-2"  href="{{route('categories.edit' , $category -> id)}}">Edit</a>
<a class="btn btn-success w-25 m-2"   href="{{route('categories.show' , $category -> id)}}">show</a>
<a class="btn btn-danger w-25 m-2"  href="{{route('categories.delete' , $category -> id)}}">delete</a>
@endforeach
<p>{{$categories -> render()}}</p>
@endsection

