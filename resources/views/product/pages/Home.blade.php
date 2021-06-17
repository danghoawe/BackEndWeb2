@extends('product.layouts.master')
@section('panel')
<div class="slider-area">
    <!-- Slider -->
    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
            <li>
                <img src="img/h4-slide.png" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        iPhone <span class="primary">6 <strong>Plus</strong></span>
                    </h2>
                    <h4 class="caption subtitle">Dual SIM</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
            <li><img src="img/h4-slide2.png" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        by one, get one <span class="primary">50% <strong>off</strong></span>
                    </h2>
                    <h4 class="caption subtitle">school supplies & backpacks.*</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
            <li><img src="img/h4-slide3.png" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        Apple <span class="primary">Store <strong>Ipod</strong></span>
                    </h2>
                    <h4 class="caption subtitle">Select Item</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
            <li><img src="img/h4-slide4.png" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        Apple <span class="primary">Store <strong>Ipod</strong></span>
                    </h2>
                    <h4 class="caption subtitle">& Phone</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- ./Slider -->
</div> <!-- End slider area -->

<div class="promo-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo1">
                    <i class="fa fa-refresh"></i>
                    <p>30 Days return</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo2">
                    <i class="fa fa-truck"></i>
                    <p>Free shipping</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo3">
                    <i class="fa fa-lock"></i>
                    <p>Secure payments</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo4">
                    <i class="fa fa-gift"></i>
                    <p>New products</p>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End promo area -->

@endsection
@section("maincontent")
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="box-common__top clearfix">
            <h3 class="box-common__title">PHONE NỔI BẬT NHẤT</h3>

            <br>
        </div>
        <div class="row">
            @foreach($phone as $value)
            <div class="col-md-3 col-sm-6">
                <div class="single-shop-product">
                <div class="product-upper">
                        <a href="SingleProduct/{{$value->product_id}}"> <img src="img/{{$value['image']}}" alt=""></a>
                    </div>

                    <h2><a href="SingleProduct/{{$value->product_id}}">{{$value['nameProduct']}} </a></h2>
                    <div class="product-carousel-price">
                        <ins>{{number_format($value->price)}} đ</ins>
                    </div>

                    <div class="product-option-shop">
                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70"
                            rel="nofollow" onclick="AddCart({{$value->product_id}})" href="javascript:">Add to
                            cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="product-pagination text-center">
                    <nav>
                        <ul class="pagination">

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="box-common__top clearfix">
            <h3 class="box-common__title">HEADPHONE NỔI BẬT NHẤT</h3>

            <br>
        </div>
        <div class="row">
            @foreach($headphone as $value)
            <div class="col-md-3 col-sm-6">
                <div class="single-shop-product">
                <div class="product-upper">
                        <a href="SingleProduct/{{$value->product_id}}"> <img src="img/{{$value['image']}}" alt=""></a>
                    </div>

                    <h2><a href="SingleProduct/{{$value->product_id}}">{{$value['nameProduct']}} </a></h2>
                    <div class="product-carousel-price">
                        <ins>{{number_format($value->price)}} đ</ins>
                    </div>

                    <div class="product-option-shop">
                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70"
                            rel="nofollow" onclick="AddCart({{$value->product_id}})" href="javascript:">Add to
                            cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="product-pagination text-center">
                    <nav>
                        <ul class="pagination">

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="box-common__top clearfix">
            <h3 class="box-common__title">SPEAKER NỔI BẬT NHẤT</h3>

            <br>
        </div>
        <div class="row">
            @foreach($speaker as $value)
            <div class="col-md-3 col-sm-6">
                <div class="single-shop-product">
                    <div class="product-upper">
                        <a href="SingleProduct/{{$value->product_id}}"> <img src="img/{{$value['image']}}" alt=""></a>
                    </div>

                    <h2><a href="SingleProduct/{{$value->product_id}}">{{$value['nameProduct']}} </a></h2>
                    <div class="product-carousel-price">
                        <ins>{{number_format($value->price)}} đ</ins> 
                    </div>

                    <div class="product-option-shop">
                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70"
                            rel="nofollow" onclick="AddCart({{$value->product_id}})" href="javascript:">Add to
                            cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="product-pagination text-center">
                    <nav>
                        <ul class="pagination">

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="box-common__top clearfix">
            <h3 class="box-common__title">LAPTOP NỔI BẬT NHẤT</h3>

            <br>
        </div>
        <div class="row">
            @foreach($laptop as $value)
            <div class="col-md-3 col-sm-6">
                <div class="single-shop-product">
                <div class="product-upper">
                        <a href="SingleProduct/{{$value->product_id}}"> <img src="img/{{$value['image']}}" alt=""></a>
                    </div>

                    <h2><a href="SingleProduct/{{$value->product_id}}">{{$value['nameProduct']}} </a></h2>
                    <div class="product-carousel-price">
                        <ins>{{number_format($value->price)}} đ</ins> 
                    </div>

                    <div class="product-option-shop">
                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70"
                            rel="nofollow" onclick="AddCart({{$value->product_id}})" href="javascript:">Add to
                            cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="product-pagination text-center">
                    <nav>
                        <ul class="pagination">

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection