<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

use Image;


class ProductController extends Controller
{
    public function index(){
 
 
       // $categories=Category::all();
       $categories=Category::all();
       $products=Product::with('getCategory')->latest()->get();
      //  $products=Product::latest()->get();
     return view('backend.product.index',['categories'=>$categories ,'products'=>$products]);
    //  return view('backend.category.index',compact('categories'));
    }








 
    public function create(){
        $categories=Category::all();
     return view('backend.product.create',['categories'=>$categories]);
    }
 

                  // try {

                  //  $request->validate([
                  //      'name'=>['required','min:5','max:20',Rule::unique('products','name')],
                       
                  //       'category_id'=>'required',         
                  //       'description' => 'required',
                  //       'description'=>'required',
                  //       'price'=>'required',
                  //       'image'=>'required'
                       
                  //  ]);
 
 
    public function store(Request $request){
      
        
         Product::create([
            'category_id'=>$request->category_id,         
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'image'=>$this->uplodeImage($request->file('image'))
        ]);
        return redirect()->route('product.index')->with('message', 'Data Created Sucessfully!');
        }
        

         // } catch (QueryException $e) {
               
                 
         //           Log()::error($e->getMessage());
         //           return redirect()->back()->withInput()->withErrors('Something went wrong ! please try again');
                   
         //       }














        public function show(Product $product){

         // $category=Category::find($id); 
         return view('backend.product.show',compact('product'));
        }
   
   
   
   
       public function destroy(Product $product){
   
         $product->delete();
         return redirect()->route('product.index')->with('message', 'Data Delete Sucessfully!');
   
         // $category=Category::find($id); 
         // return view('backend.category.show',compact('category'));
      }

      public function uplodeImage($file)
      {
        $fileName = time().'.'.$file->getClientOriginalExtension();
  
        Image::make($file)
        ->resize(300,200)
        // ->save(storage_path().'/app/public/products'.$fileName);
        ->save(storage_path() . '/app/public/products/' . $fileName);
        return $fileName;
      }

     }
