@extends('layout')
@section('title')
    Show categories
@endsection
@section('content')
<h2>{{$categories -> name}}</h2>
<h3>Books</h3>
<ul>
    @foreach ($categories ->books as $book)  
        <li>{{$book->title}}</li>
    @endforeach
</ul>
<a href="{{route('categories.index')}}">Back</a>
@endsection

