@extends('product.layouts.master')
@section('panel')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Checkout</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('maincontent')
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form enctype="multipart/form-data" action="#" class="checkout" method="post" name="checkout">

                            <div id="customer_details" class="col1-set">
                                <div class="col-8">
                                    <div class="woocommerce-billing-fields">
                                        <h3>Billing Details</h3>

                                        <p id="billing_first_name_field"
                                            class="form-row form-row-first validate-required">
                                            <label class="" for="billing_first_name">First Name <abbr title="required"
                                                    class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" placeholder="" id="billing_first_name"
                                                name="billing_first_name" class="input-text " value="{{$user->firstName}}">
                                        </p>

                                        <p id="billing_last_name_field"
                                            class="form-row form-row-last validate-required">
                                            <label class="" for="billing_last_name">Last Name <abbr title="required"
                                                    class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" placeholder="" id="billing_last_name"
                                                name="billing_last_name" class="input-text ">
                                        </p>
                                        <div class="clear"></div>


                                        <p id="billing_address_1_field"
                                            class="form-row form-row-wide address-field validate-required">
                                            <label class="" for="billing_address_1">Address <abbr title="required"
                                                    class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" placeholder="Street address"
                                                id="billing_address_1" name="billing_address_1" class="input-text ">
                                        </p>

                                        <p id="billing_email_field"
                                            class="form-row form-row-first validate-required validate-email">
                                            <label class="" for="billing_email">Email Address <abbr title="required"
                                                    class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" placeholder="" id="billing_email"
                                                name="billing_email" class="input-text ">
                                        </p>

                                        <p id="billing_phone_field"
                                            class="form-row form-row-last validate-required validate-phone">
                                            <label class="" for="billing_phone">Phone <abbr title="required"
                                                    class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" placeholder="" id="billing_phone"
                                                name="billing_phone" class="input-text ">
                                        </p>
                                        <div class="clear"></div>

                                    </div>
                                </div>



                            </div>

                            <h3 id="order_review_heading">Your order</h3>
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
                                                            <td class="cart-pic first-row"><img
                                                                    src="img/{{$value['productInfo']->image}}"
                                                                    width="150" alt="">
                                                            </td>
                                                            <td class="cart-title first-row">
                                                                <h5>{{$value['productInfo']->nameProduct}}</h5>
                                                            </td>
                                                            <td class="p-price first-row">
                                                                {{number_format($value['productInfo']->price)}} ₫
                                                            </td>
                                                            <td class="qua-col first-row">
                                                                <div class="quantity">
                                                                    <div class="pro-qty">
                                                                        <input
                                                                            id="quanty-item-{{$value['productInfo']->product_id}}"
                                                                            type="text" value="{{$value['quanty']}}">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="total-price first-row">
                                                                {{number_format($value['price'])}} ₫</td>
                                                            <td class="close-td first-row"><i
                                                                    onclick="SaveListItemCart({{$value['productInfo']->product_id}});"
                                                                    class=" ti-save"></i></td>
                                                            <td class="close-td first-row"><i class="ti-close"
                                                                    onclick="DeleteListItemCart({{$value['productInfo']->product_id}});"></i>
                                                            </td>
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
                                                            <li class="subtotal">Total Quanty
                                                                <span>{{Session::get('Cart')->totalQuanty}}</span>
                                                            </li>
                                                            <li class="cart-total">Total
                                                                Price<span>{{number_format(Session::get('Cart')->totalPrice)}}
                                                                    ₫</span></li>
                                                            @endif
                                                        </ul>
                                                        <a href="{{URL::to('/login')}}" class="proceed-btn">PROCEED
                                                            TO CHECK OUT</a>
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
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection