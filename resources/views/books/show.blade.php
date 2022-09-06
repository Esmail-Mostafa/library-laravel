@extends('layout')
@section('title')
    Show Books
@endsection

@section('content')
<h2>{{$books -> title}}</h2>
<p>{{$books -> desc}}</p>  

<a href="{{route('books.index')}}">Back</a>
@endsection

