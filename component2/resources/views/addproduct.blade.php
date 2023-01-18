@extends('layout')
@section('layout')
            <div class="h1 text-center">
                Add New Product
            </div>
            <form class="w-100 mt-5" method="POST" action="{{url('add')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" placeholder="First Name(optional)" name="first_name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" placeholder="surname / band" name="last_name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control" id="Title" placeholder="Title" name="title" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="image">image</label>
                        <input type="text" class="form-control" id="image" name="image" placeholder="image" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="product_type">Type</label>
                        <select class="browser-default custom-select form-control" name="product_type" id="inputState">
                            <option selected disabled>Select your Title</option>
                            <option value="Movie" name="Movie">Movie</option>
                            <option value="Book" name="Book">Book</option>
                            <option value="Game" name="Game">Game</option>
                            <option value="Song" name="Song">Song</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>

@endsection