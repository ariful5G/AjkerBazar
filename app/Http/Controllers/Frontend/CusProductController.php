<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;

class CusProductController extends Controller
{
    public function cusproduct_show(){

        $subcategories=SubCategory::find();
        return view ('frontend.layouts.product.fe_product',compact('subcategories')); 
    }
}
