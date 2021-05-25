@extends('product.layouts.master')
@section('panel')
<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
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
            <?php
                foreach($products as $item )
                {?>
                <div class="col-md-3 col-sm-6">

                    <div class="single-shop-product">
                        <div class="product-upper">
                          <a href="SingleProduct/<?= $item['product_id']?>"> <img src="img/<?= $item['image']?>" alt=""></a>  
                        </div>
                        
                        <h2><a href="SingleProduct/<?= $item['product_id']?>"><?= $item['nameProduct']?> </a></h2>
                        <div class="product-carousel-price">
                            <ins><?= number_format( $item['price'])?> đ</ins> 
                        </div>  
                        <div class="title">
                           Nhà Sản Xuất : <?=  $item->Manufacture->nameManufacture?> 

                        </div> 
                        <div class="title">
                        Loại: <?=  $item->Protype->nameProtype?> 

                        </div> 

                        <div class="title">
                            <?= substr( $item['description'],0,100)."..."?>  
                        </div> 
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                        </div>                       
                    </div>
                </div>
                <?php 
                }
            ?>     
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                              </a>
                            </li>
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
