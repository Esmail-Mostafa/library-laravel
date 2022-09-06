@extends('layout')
@section('content')
<h1>All books</h1>
<a class="btn btn-primary w-25 m-3 " href="{{route('books.create') }}" >create</a> 
@foreach ($books as $book)
<a href="{{route('books.show' , $book -> id)}}"><h2>{{$book ->title}}</h2></a>
<p>{{$book ->desc}}</p>
<a class="btn btn-primary w-25 m-2"  href="{{route('books.edit' , $book -> id)}}">Edit</a>
<a class="btn btn-success w-25 m-2"   href="{{route('books.show' , $book -> id)}}">show</a>
<a class="btn btn-danger w-25 m-2"  href="{{route('books.delete' , $book -> id)}}">delete</a>
@endforeach
<p>{{$books -> render()}}</p>
@endsection

