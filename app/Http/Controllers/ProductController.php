<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    //
    public function getList(){
        $product = Product::all();
        return view('admin.product.list',['product'=>$product]);
    }

    public function getEdit(){
        return view('admin.product.edit');
    }

    public function getAdd(){
        return view('admin.product.add');
    }
}
