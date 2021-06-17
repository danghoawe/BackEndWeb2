<?php
namespace App;
class Cart{
    public $products = null;
    public $totalPrice = 0;
    public $totalQuanty = 0;

    public function __construct($cart){
        if($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuanty = $cart->totalQuanty;           
        }
    }

    // Them san pham vao Cart
    public function AddCart($product, $id){
        $newProduct = ['quanty' => 0, 'price' => 0, 'productInfo' => $product];
        if($this->products){
            if(array_key_exists($id, $this->products)){
                $newProduct = $this->products[$id];
            }
        }
        $newProduct['quanty']++;
        $newProduct['price'] = $newProduct['quanty'] * $product->price;
        $this->products[$id] = $newProduct;
        $this->totalPrice += $product->price;
        $this->totalQuanty++;
    }

    //Xoa san pham trong cart
    public function DeleteItemCart($id){
        //Cap nhat lai 
        $this->totalPrice -= $this->products[$id]['price'];
        $this->totalQuanty -= $this->products[$id]['quanty'];

        unset($this->products[$id]);
    }

    //Cap nhap gio hang
    public function UpdateItemCart($id, $quanty){
        $this->totalQuanty -= $this->products[$id]['quanty'];
        $this->totalPrice -= $this->products[$id]['price'];

        $this->products[$id]['quanty'] = $quanty;
        $this->products[$id]['price'] = $quanty * $this->products[$id]['productInfo']->price;

        $this->totalQuanty += $this->products[$id]['quanty'];
        $this->totalPrice += $this->products[$id]['price'];

    }

}


?>