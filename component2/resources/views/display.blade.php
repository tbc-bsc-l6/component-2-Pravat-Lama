@extends('layout')
@section('layout')
<div class="align-items-center justify-content-center mt-5">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Title</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Product Type</th>
                    <th scope="col">Price</th>
                    <th scope="col">Page No/Play Length</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->title}}</td>
                        <td>{{$product->first_name}}</td>
                        <td>{{$product->last_name}}</td>
                        <td>{{$product->product_type}}</td>             
                        <td>{{$product->price}}</td>
                        <td>{{$product->pages_playlength}}</td>
                        <td>
                            <a href="{{url('updateForm',$product->id)}}" class="btn btn-primary mt-2 p-2">Update</a>
                            <form action="{{url('delete',$product->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger mt-2 p-2">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>