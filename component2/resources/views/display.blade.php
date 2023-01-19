<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<link
    href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap"
    rel="stylesheet"
/>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
/>
<x-app-layout>
    @extends('layout')
    @section('layout')
    <div class="title">
        <h1>Products</h1>
    </div>
    
    @if(auth()->check() && auth()->user()->is_admin == 1)
        <a href="{{url('addproduct')}}" class="btn btn-primary mt-2 p-2">Add Product</a>
    @endif
    <div class="align-items-center justify-content-center mt-5 pt-5">
        <div class="product-center container">
            @foreach($products as $product)
                <div class="product">
                    <div class="product-header">
                    <img src="/img/{{$product->image}}" alt="" class="product-image" />
                    @if(auth()->check() && auth()->user()->is_admin == 1)
                        <ul class="icons">
                            <a href="{{url('updateForm',$product->id)}}"><li><i class="fa fa-pencil-square-o"></i></li></a>
                            <form action="{{url('delete',$product->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('delete')
                                <li><button><i class="fa fa-trash"></i></button></li>
                            </form>
                            <!-- <li><i class="fa fa-trash"></i></li> -->
                        </ul>
                    @endif
                    </div>
                    <div class="product-footer">
                    <a href="">
                        <h4 class="product-title">{{$product->title}}</h4>
                    </a>
                    <h5 class="author">By: {{$product->first_name}} {{$product->last_name}}</h5>
                    <p class="type">{{$product->product_type}}</p>
                    <h5 class="price">${{$product->price}}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div><br><br>
        {{$products->links()}}
</x-app-layout>

