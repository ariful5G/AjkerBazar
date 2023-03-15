<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\validation\Rule;



class CategoryController extends Controller
{
   public function index(){


      // $categories=Category::all();
      $categories=Category::latest()->get();
    return view('backend.category.index',['categories'=>$categories]);
   //  return view('backend.category.index',compact('categories'));
   }

   public function create(){
    return view('backend.category.create');
   }



public function store(Request $request){
       try{
        $request->validate([
          'title'=>['required','min:5','max:20',Rule::unique('categories','title')],
            'description' => 'required'
        ]);

       Category::create([
        'title'=>$request->title,
        'description'=>$request->description
       ]);
       return redirect()->route('category.index')->with('message', 'Data Created Sucessfully!');
       }
       catch(QueryException $e){
        Log::error($e->getMessage());
        return redirect()->back()->withInput()->withErrors('Something Went wrong');
       }

    
        // return view('backend.category.create');
    }
    













 public function show(Category $category){

      // $category=Category::find($id); 
      return view('backend.category.show',compact('category'));
  }




public function destroy(Category $category){

      $category->delete();
      return redirect()->route('category.index')->with('message', 'Data Delete Sucessfully!');

      // $category=Category::find($id); 
      // return view('backend.category.show',compact('category'));
  }






  public function edit(Category $category)
  {
      return view('backend.category.edit',compact('category'));
  }

  public function update(Request $request, Category $category)
  {
      //  dd($category->all());
      try {


          $request->validate([
              'title' => ['required','min:5','max:200', Rule::unique('categories','title')->ignore($category->id)],
              'description' => 'required',
              
          ]);
          $category->update([
              'title' => $request->title,
              'description' => $request->description,
  
          ]);
          return redirect()->route('category.index')->with('message','Category Updated Successfully');
        
        } catch (QueryException $e) {
        
          
            Log::error($e->getMessage());
            return redirect()->back()->withInput()->withErrors('Something went wrong ! please try again');
            
        }
  }  


}
