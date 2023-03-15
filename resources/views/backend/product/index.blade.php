<x-backend.layouts.master>

    <div class="card mb-4">
        <div class="card-header">
            <a href="{{route('product.create')}}"class="btn btn-primary">Create</a>

            <x-slot:title>
            product List
            </x-slot>

        </div>
        <div class="card-body ">
            <table id="datatablesSimple" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Sri</th>
                        <th>Title</th>
                        <th>name</th>
                        <th>description</th>
                        <th>price</th>
                        <th>image</th>>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($products as $product)
                    
                
                    <tr>
                        
                        <td>{{$loop->iteration}}</td>     {{-- <td>{{$key+1}}</td> --}} 


                        {{-- <td scope="col">{{optional($product->getCategory)->title}}</td> --}}
                        {{-- <td>{{$product->category_id}}</td> --}}
                        <td> {{optional($product->getCategory)->title}}</td>
                       


                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td><img src="{{ asset('storage/products').'/'.$product->image }}" alt="no image" width="120" height="80"></td>
                        
                
                        <td>

                            <div class="d-flex flex-row">
                        {{-- <a class="btn btn-info btn-sm" href="{{route('category.show',$category->id)}}"><i class="fa-regular fa-eye"></i></a> --}}
                        {{-- <a class="btn btn-warning btn-sm" href="{{route('category.edit',$category->id)}}"><i class="fa-solid fa-pen-to-square"></i></a> --}}
                        
                        <a href="{{route('product.show',['product'=>$product->id])}}">Show</a>
                        
                        {{-- <form action="{{route('category.show',$category->id)}}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-info btn-sm"><i class="fa-regular fa-eye"></i></button>
                        </form> --}}
                        
                        <form class="mx-2" action="{{route('product.destroy',['product'=>$product->id])}}" method="POST">
                           @csrf
                           @method('delete')
                           <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                       </form>


                       {{-- <form action="{{route('product.edit',['product'=>$product->id])}}" method="GET">
                           @csrf
                           <button type="submit" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                       </form> --}}
                    </div>

                        </td>  
                    </tr>
                    
                    @endforeach














                
                </tbody>
            </table>
        </div>
    </div>
    
    @push('js')
    <style>
        .card{
            background-color: rgb(238, 225, 225);
        }
    </style>
    @endpush
    
    
    @push('js')
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{asset('ui/backend/js/datatables-simple-demo.js')}}"></script>
    @endpush
    
    </x-backend.layouts.master>
    