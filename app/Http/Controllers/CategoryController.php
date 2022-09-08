<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  //reed data
  public function index(){
    $categories =Category::paginate(2);
    return view('categories.index' , compact('categories'));
  }

  public function show($id){
      $categories =Category::findOrFail($id);
      return view('categories.show' , compact('categories'));
    }

    // create data
    public function create (){

      return view('categories.create');
    }
    public function store(Request $request){
      $request -> validate([
        'name'=> 'required|max:100|string' ,

      ]);
    
      Category::create([
        'name' => $request -> name ,
       ]);

      return redirect(route('categories.index'));
    }

    //edit data

    public function edit($id){

      $categories = Category::findOrFail($id);
      return view('categories.edit' , compact('categories'));
    }
    public function update(Request $request , $id){

      $request -> validate([
        'name'=> 'required|max:100|string' ,
      ]);

      $categories = Category::findOrFail($id);
  
          $categories->update([
            
          'name' => $request -> name,
      ]);
      return redirect(route('categories.edit' , $id));
    }
    public function delete($id){

      Category::findOrFail($id)->delete(); 
      return redirect(route('categories.index'));
    }
}
