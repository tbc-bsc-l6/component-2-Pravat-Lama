@extends('layout')
@section('layout')
    <form class="w-100 mt-5" method="POST" action="{{url('updateProduct',$products->id)}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="first_name"><b>First Name</b></label>
                <input type="text" class="form-control" id="first_name" value="{{$products->first_name}}" name="first_name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="last_name"><b>Last Name</b></label>
                <input type="text" class="form-control" id="last_name" value="{{$products->last_name}}" name="last_name" required>
            </div>
        </div>
        <div class="form-group">
            <label for="Title"><b>Title</b></label>
            <input type="text" class="form-control" id="Title" value="{{$products->title}}" name="title" required>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="price"><b>Price</b></label>
                <input type="number" class="form-control" id="price" name="price" value="{{$products->price}}" required>
            </div>
            <div class="form-group col-md-4">
                <label for="title"><b>Title</b></label>
                <select class="browser-default custom-select form-control" name="product_type" id="inputState">
                    @if($products->product_type=="Book")
                        <option selected disabled value="Book" name="Book">Book</option>
                        <option value="CD" name="CD">CD</option>
                    @else
                        <option selected disabled value="CD" name="CD">CD</option>
                        <option value="Book" name="Book">Book</option>
                    @endif
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="pages_playlength"><b>Page No/Play Length</b></label>
                <input type="text" class="form-control" id="pages_playlength" name="pages_playlength" value="{{$products->pages_playlength}}">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
