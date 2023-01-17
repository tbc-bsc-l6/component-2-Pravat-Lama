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
                        <label for="pages_playlength">Pages /Play Length</label>
                        <input type="text" class="form-control" id="pages_playlength" name="pages_playlength" placeholder="Pages / Play Length" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="product_type">Type</label>
                        <select class="browser-default custom-select form-control" name="product_type" id="inputState">
                            <option selected disabled>Select your Title</option>
                            <option value="CD" name="CD">CD</option>
                            <option value="Book" name="Book">Book</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>

@endsection