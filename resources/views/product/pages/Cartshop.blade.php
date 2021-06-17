@extends('product.layouts.master')
@section('panel')
@section('maincontent')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                    <a href="./shop.html">Shop</a>
                    <span>Shopping Cart</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">

        <div class="row">
            <div class="col-lg-12" id="list-cart">
                @if(Session::has("Cart") != null)
                <div class="cart-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th class="p-name">Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Save</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach(Session::get('Cart')->products as $value)
                            <tr>
                                <td class="cart-pic first-row"><img src="img/{{$value['productInfo']->image}}"
                                        width="150" alt="">
                                </td>
                                <td class="cart-title first-row">
                                    <h5>{{$value['productInfo']->nameProduct}}</h5>
                                </td>
                                <td class="p-price first-row">{{number_format($value['productInfo']->price)}} ₫</td>
                                <td class="qua-col first-row">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input id="quanty-item-{{$value['productInfo']->product_id}}" type="text"
                                                value="{{$value['quanty']}}">
                                        </div>
                                    </div>
                                </td>
                                <td class="total-price first-row">{{number_format($value['price'])}} ₫</td>
                                <td class="close-td first-row"><i
                                        onclick="SaveListItemCart({{$value['productInfo']->product_id}});"
                                        class=" ti-save"></i></td>
                                <td class="close-td first-row"><i class="ti-close"
                                        onclick="DeleteListItemCart({{$value['productInfo']->product_id}});"></i></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-8">
                        <div class="proceed-checkout">
                            <ul>
                                @if(Session::has("Cart") != null)
                                <li class="subtotal">Total Quanty <span>{{Session::get('Cart')->totalQuanty}}</span>
                                </li>
                                <li class="cart-total">Total
                                    Price<span>{{number_format(Session::get('Cart')->totalPrice)}} ₫</span></li>
                                @endif
                            </ul>
                            <a href="{{URL::to('/login')}}" class="proceed-btn" >PROCEED TO CHECK OUT</a>
                        </div>
                    </div>
                </div>
                @else
                <h1>Giỏ hàng trống</h1>
                @endif
            </div>
        </div>

    </div>
</section>
<!-- Shopping Cart Section End -->
@endsection