@extends('layout')
@section('title')
    Show Books
@endsection

@section('content')
<h2>Book ID:{{$books ->id}}</h2>
<hr>
<h3>{{$books -> title}}</h3>
<p>{{$books -> desc}}</p> 
<hr>
<h3>Categories</h3> 
<ul>
    @foreach ($books->categories as $category)
    <li>{{$category->name}}</li>
@endforeach

</ul>


<a href="{{route('books.index')}}">Back</a>
@endsection

