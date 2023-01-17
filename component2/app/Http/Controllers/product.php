<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Category;
class product extends Controller
{
    public function index(){
        $products = Category::all();
        return view('index',
            [
                'products' => $products
            ]);
    }

    public function updateForm(Request $request, $id){
        $products = Category::findOrFail($id);
        return view('edit',
            [
                'products' => $products
            ]);
    }

    public function updateProduct(Request $request, $id){
        Category::findorFail($id)->update($request->all());
        return redirect('/');
    }

    public function add(Request $request){
        Category::create($request->all());
        return redirect('/');
    }

    public function delete(Request $request, $id){
        Category::find($id)->delete();
        return redirect('/');
    }
}
