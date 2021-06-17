@extends('product.layouts.master')
@section('panel')
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <div class="product-content-right">
                    <div class="product-breadcroumb">
                        <a href="">Home</a>
                        <a href="">Category Name</a>
                        <a href="">{{$products->nameProduct}}</a>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="product-images">
                                <div class="product-main-img">
                                    <img src="img/{{$products->image}}" alt="">
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="product-inner">
                                <h2 class="product-name">{{$products->nameProduct}}</h2>

                                <div class="product-inner-price">
                                    <ins>{{number_format($products->price)}} đ</ins>
                                </div>

                                <form action="" class="cart">
                                    <div class="quantity">
                                        <input type="number" size="4" class="input-text qty text" title="Qty" value="1"
                                            name="quantity" min="1" step="1">
                                    </div>
                                    <div class="product-option-shop">
                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku=""
                                            data-product_id="70" rel="nofollow"
                                            onclick="AddCart({{$products->product_id}})" href="javascript:">Add to
                                            cart</a>
                                    </div>
                                </form>


                                <div role="tabpanel">
                                    <ul class="product-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home"
                                                role="tab" data-toggle="tab">Description</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <h2>{{$products->nameProduct}}</h2>
                                            <p>{{$products->description}}</p>
                                        </div>

                                    </div>
                                </div>
                                @if(Auth::check())
                                <h2>Reviews</h2>
                                <div class="submit-review">
                                    @if(session('notification'))
                                    {{session('notification')}}
                                    @endif
                                    <form action="comment/{{$products->product_id}}" method="post">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                        <p><label for="review">Your review</label> <textarea name="comment" id=""
                                                cols="30" rows="10"></textarea></p>
                                        <p><input type="submit" value="Submit"></p>
                                    </form>
                                </div>
                                @endif



                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection