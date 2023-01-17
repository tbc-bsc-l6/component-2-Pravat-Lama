<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $product = Product::find($id);
        return view('product', ['product' => $product]);
    }
};
