<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
  //reed data
    public function index(){
      $books =Book::paginate(2);
      return view('books.index' , compact('books'));
    }
    public function show($id){
        $books =Book::findOrFail($id);
        return view('books.show' , compact('books'));
      }

      // create data
      public function create (){

        return view('books.create');
      }
      public function store(Request $request){
        $request -> validate([
          'title'=> 'required|max:100|string' ,
          'desc' => 'required | string',
          'img' => 'required | image ' ,
        ]);
        $img = $request ->file('img');
        $ext = $img->getClientOriginalExtension();
        $name = "books-" . uniqid() . "$ext";
        $img -> move(public_path('uploads/books') , $name);

         Book::create([
          'title' => $request -> title ,
          'desc' => $request -> desc ,
          'img' => $name,

         ]);

        return redirect(route('books.index'));
      }

      //edit data

      public function edit($id){

        $book = Book::findOrFail($id);
        return view('books.edit' , compact('book'));
      }
      public function update(Request $request , $id){
        $request -> validate([
          'title'=> 'required|max:100|string' ,
          'desc' => 'required | string',
          'img' => 'nullable | image',
        ]);

        $book = Book::findOrFail($id);
        $name = $book -> img ;
        if($request -> hasfile('img')){
          if($name !== null){
            unlink(public_path('uploads/books/') .$name);
          }
          $img = $request ->file('img');
          $ext = $img->getClientOriginalExtension();
          $name = "books-" . uniqid() . "$ext";
          $img -> move(public_path('uploads/books') , $name);
        }
    
            $book->update([
            'title' => $request -> title,
            'desc' => $request -> desc,
            'img' => $name,

        ]);
        return redirect(route('books.edit' , $id));
      }
      public function delete($id){

        $book = Book::findOrFail($id); 
        if($book -> img !== null)
        {
          unlink(public_path('uploads/books/') . $book -> img);
        }
         $book->delete($id);
        return redirect(route('books.index'));
      }
}
