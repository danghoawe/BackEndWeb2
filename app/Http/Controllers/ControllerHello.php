<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ControllerHello extends Controller
{
    
    public function show($id="Home")
    {
            $products = Product::all();
            return view('pages.'.$id,['products'=> $products]);
    }
    public function SingleProduct()
    {
        $products = Product::all();
        return view('pages.SingleProduct',['products'=> $products]);
    }
    public function HeloAdmin(Request $request)
    {
        return "Helo". $request->input('username');
    }
}
