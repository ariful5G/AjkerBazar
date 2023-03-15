<x-backend.layouts.master>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
</head>
<body>
            <div class="height-100 bg-light">
                <h4>product Create | <span><a href="{{route('product.index')}}" class="btn btn-primary">List</a></span></h4>
                <div class="card">
                    <div class="card-body">

                    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="mb-3">

                        <label for="category_id" class="form-label">Category</label>
                        <select class="form-select" aria-label="Default select example" id="category_id" name="category_id">
                              <option selected>Select Category</option>
                              @foreach ($categories as $category)
                                
                              <option value="{{$category->id}}">{{$category->title}}</option>
                              @endforeach
                              </select>

                    @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror





                    <label for="name">Product Name:</label><br>
                    <input type="text" id="name" class="form-control" name="name" value=""><br>

                    @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror




                        <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="" cols="25" rows="7"class="form-control"></textarea>
                        {{-- <input type="text" name="description" class="form-control" id="description"> --}}
                        </div>

                    @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror



                    <label for="price">price:</label><br>
                    <input type="text" id="price" class="form-control" name="price" value=""><br>

                    @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror



                    {{-- <label for="status">status :</label><br>
                    <input type="text" id="status" class="form-control" name="status" value=""><br>

                    @error('status')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror --}}



                    <label for="image">image:</label><br>
                    <input type="file" id="image" class="form-control" name="image" value=""><br>

                    @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror






                        {{-- syntex for list of error  --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    </div>
                </div>
            </div>
</body>
</html>

</x-backend.layouts.master>


category_id 	
name 	
description 	
price 
status
image