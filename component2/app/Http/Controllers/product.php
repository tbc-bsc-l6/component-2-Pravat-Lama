<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Category;
class product extends Controller
{
    public function display(){
        return view('display',
        [
            'products' => Category::paginate(6)
        ]);
    }
    public function addproduct(){
        $products = Category::all();
        return view('addproduct',
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
        $title = $request->get('title');
        $first_name = $request->get('first_name');
        $last_name = $request->get('last_name');
        $price = $request->get('price');
        $product_type = $request->get('product_type');
        $image = $request->file('image')->getClientOriginalName();
        $request->image->move(public_path('img'), $image);

        $Category = new Category();
        $Category -> title = $title;
        $Category -> first_name = $first_name;
        $Category -> last_name = $last_name;
        $Category -> price = $price;
        $Category -> product_type = $product_type;
        $Category -> image = $image;

        $Category -> save();
        return redirect('display');
    }

    public function delete(Request $request, $id){
        Category::find($id)->delete();
        return redirect('display');
    }

    
}
