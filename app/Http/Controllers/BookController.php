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
         Book::create([
          'title' => $request -> title ,
          'desc' => $request -> desc ,
         ]);

        return redirect(route('books.index'));
      }

      //edit data

      public function edit($id){

        $book = Book::findOrFail($id);
        return view('books.edit' , compact('book'));
      }
      public function update(Request $request , $id){
        Book::findOrFail($id)->update([
            'title' => $request -> title,
            'desc' => $request -> desc,
        ]);
        return redirect(route('books.edit' , $id));
      }
      public function delete($id){

        Book::findOrFail($id)->delete($id);

        return redirect(route('books.index'));
      }
}
