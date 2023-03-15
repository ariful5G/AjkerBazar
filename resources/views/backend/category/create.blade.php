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
                <h4>Category Create | <span><a href="{{route('category.index')}}" class="btn btn-primary">List</a></span></h4>
                <div class="card">
                    <div class="card-body">

                    <form action="{{route('category.store')}}" method="POST">
                        @csrf


                        <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="title">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                    @error('title')
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
