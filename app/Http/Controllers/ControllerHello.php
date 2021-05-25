<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ControllerHello extends Controller
{
    
    public function show($id="Home")
    {
            $products = Product::all();
            return view('product.pages.'.$id,['products'=> $products]);
    }
    public function SingleProduct($id=5)
    {
        $products = Product::find($id);
        
        $allproducts = Product::all();
        return view('product.pages.SingleProduct',['products'=> $products],["allproducts"=>$allproducts]);
    }
    public function HeloAdmin(Request $request)
    {
        return "Helo". $request->input('username');
    }
}
