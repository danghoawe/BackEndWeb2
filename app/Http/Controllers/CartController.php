<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use DB;

class CartController extends Controller
{
    

    public function AddCart(Request $request, $id){
        $product = DB::table('products')->where('product_id',$id)->first();
        if($product != null){
            $oldcart = Session('Cart') ? Session('Cart') :null;
            $newCard = new Cart($oldcart);
            $newCard->AddCart($product,$id);

            $request->session()->put('Cart',$newCard);
        }
        return view('product.pages.cart-item');      
    }

    public function DeleteCart(Request $request, $id){
        $oldcart = Session('Cart') ? Session('Cart') :null;

        $newCard = new Cart($oldcart);
        $newCard->DeleteItemCart($id);
        if( Count( $newCard->products ) > 0 ){
            $request->session()->put('Cart',$newCard);
        }
        else{
            $request->session()->forget('Cart');
        }
        return view('product.pages.cart-item');      
    }

    public function ViewListCart(){

        return view('product.pages.cartshop');
    }

    public function DeleteListItemCart(Request $request, $id){
        $oldcart = Session('Cart') ? Session('Cart') :null;

        $newCard = new Cart($oldcart);
        $newCard->DeleteItemCart($id);
        if( Count( $newCard->products ) > 0 ){
            $request->session()->put('Cart',$newCard);
        }
        else{
            $request->session()->forget('Cart');
        }
        return view('product.pages.list-cart');      
    }

    public function SaveListItemCart(Request $request, $id, $quanty){       
        $oldcart = Session('Cart') ? Session('Cart') :null;

        $newCard = new Cart($oldcart);
        $newCard->UpdateItemCart($id, $quanty);

        $request->Session()->put('Cart',$newCard);
        return view('product.pages.list-cart');      
    }

    public function Checkout(Request $request){
        $oldcart = Session('Cart') ? Session('Cart') :null;

        $newCard = new Cart($oldcart);
        console.log($newCard);
    }
}