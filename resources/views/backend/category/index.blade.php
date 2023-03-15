<x-backend.layouts.master>

     
    @if (session('message'))
    <div class="alert alert-success mt-2">
        <strong>Success!</strong> {{session('message')}}
    </div>
    @endif



    <div class="card mb-4">

        
        <div class="card-header">
            <a href="{{route('category.create')}}"class="btn btn-primary">Create</a>
            

            <x-slot:title>
            Category List
            </x-slot>
           
        </div>
        <div class="card-body ">
            <table id="datatablesSimple" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Sri</th>
                        <th>Title</th>
                        <th>description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                    
                
                    <tr>
                        
                        <td>{{$loop->iteration}}</td>     {{-- <td>{{$key+1}}</td> --}} 
                        <td>{{$category->title}}</td>
                        <td>{{$category->description}}</td>
                        <td>

                            <div class="d-flex flex-row">
                        {{-- <a class="btn btn-info btn-sm" href="{{route('category.show',$category->id)}}"><i class="fa-regular fa-eye"></i></a> --}}
                        {{-- <a class="btn btn-warning btn-sm" href="{{route('category.edit',$category->id)}}"><i class="fa-solid fa-pen-to-square"></i></a> --}}
                        
                        <a href="{{route('category.show',['category'=>$category->id])}}">Show</a>
                        
                        {{-- <form action="{{route('category.show',$category->id)}}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-info btn-sm"><i class="fa-regular fa-eye"></i></button>
                        </form> --}}
                        
                        <form class="mx-2" action="{{route('category.destroy',['category'=>$category->id])}}" method="POST">
                           @csrf
                           @method('delete')
                           <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                       </form>


                       <form action="{{route('category.edit',['category'=>$category->id])}}" method="GET">
                           @csrf
                           <button type="submit" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                       </form>
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
    