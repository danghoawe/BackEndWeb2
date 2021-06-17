<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\User;
class CheckoutController extends Controller
{
    public function login_checkout(){

        return view('product.pages.login');
    }

    public function checkout(){
        $user = Auth::user();
        return view('product.pages.checkout',compact('user'));
    }
}
