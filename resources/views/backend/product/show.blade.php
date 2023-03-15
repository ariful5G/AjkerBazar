<x-backend.layouts.master>

  <x-slot:title>
    product List
    </x-slot>

    <div class="container">
     <div class="card mt-5">
   
       <div class="card-body">
         <h1>Title  :{{optional($product->getCategory)->title}}</h1>
         <h1>Name   :{{$product->name}}</h1>
         <p>Description       :     {{$product->description}}</p>
         <h1>Price  :{{$product->price}}</h1>
         <h1>Image  <img src="{{ asset('storage/products').'/'.$product->image }}" alt="no image" width="120" height="80"></h1>
      

      {{-- {{$product-> category_id }}        
      {{$product-> name }}        
      {{$product-> description }}        
      {{$product-> price }}        
      {{$product-> image }}        
       'name'
       'description'
       'price'
       'image' --}}


       </div>
     </div>
    </div>
  </x-backend.layouts.master>
 