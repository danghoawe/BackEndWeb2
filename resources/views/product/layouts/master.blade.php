<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ustora Demo</title>
    <base href="{{asset('')}}">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="product_asset/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="product_asset/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="product_asset/css/owl.carousel.css">
    <link rel="stylesheet" href="product_asset/style.css">
    <link rel="stylesheet" href="product_asset/css/responsive.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="shop_asset/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="shop_asset/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="shop_asset/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="shop_asset/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="shop_asset/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="shop_asset/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="shop_asset/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="shop_asset/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="shop_asset/css/style.css" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    .pro-qty input {
        padding: -10px;
    }
    </style>

</head>

<body>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        hello.colorlib@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +65 11.188.888
                    </div>
                </div>

                <div class="ht-right">
                    <a href="login" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    <div class="lan-selector">
                        @if(Auth::check())
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="admin_asset/assets\images\users\avatar-1.jpg" alt="user-image"
                                class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                {{Auth::user()->username}} <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome {{Auth::user()->username}} !</h6>
                            </div>

                            <!-- item-->
                            <a href="admin/user/edit/{{Auth::user()->id}}" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-outline"></i>
                                <span>Profile</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="admin/logout" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout-variant"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="#">
                                <img src="shop_asset/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Protype</button>

                            <form action="#" class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon"><a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon"><a href="#">
                                    <i class="icon_bag_alt"></i>
                                    @if(Session::has("Cart") != null)
                                    <span id="totalQuantyShow">{{Session::get("Cart")->totalQuanty}}</span>
                                    @else
                                    <span id="totalQuantyShow">0</span>
                                    @endif
                                </a>
                                <div class="cart-hover">
                                    <div id="change-item-cart">
                                        @if(Session::has("Cart") != null)
                                        <div class="select-items">
                                            <table>
                                                <tbody>
                                                    @foreach(Session::get('Cart')->products as $value)
                                                    <tr>
                                                        <td class="si-pic"><img
                                                                src="img/{{$value['productInfo']->image}}" width="70px"
                                                                alt=""></td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p>{{number_format($value['productInfo']->price)}} ₫ x
                                                                    {{$value['quanty']}}</p>
                                                                <h6>{{$value['productInfo']->nameProduct}}</h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close">
                                                            <i class="ti-close"
                                                                data-id="{{$value['productInfo']->product_id}}"></i>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="select-total">
                                            <span>total:</span>
                                            <h5>{{number_format(Session::get('Cart')->totalPrice)}}₫</h5>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="select-button">
                                        <a href="cartshop" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All Protype</span>
                        <ul class="depart-hover">
                            @foreach($protype as $value)
                            <li><a href="{{$value->nameProtype}}">{{$value->nameProtype}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="home">Home</a></li>
                        <li><a href="shoppage">Shop</a></li>
                        <li><a href="cartshop">Cart</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Pages</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>

    @yield('panel')
    <!-- End slider area -->

    <!-- End promo area -->
    @yield('maincontent')

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">

                    </div>
                </div>
            </div>
        </div> <!-- End main content area -->

        <div class="brands-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="brand-wrapper">
                            <div class="brand-list">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End brands area -->

        <div class="footer-top-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-about-us">
                            <h2>u<span>Stora</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus
                                vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet
                                eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam.
                                Laborum commodi veritatis magni at?</p>
                            <div class="footer-social">
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="footer-menu">
                            <h2 class="footer-wid-title">User Navigation </h2>
                            <ul>
                                <li><a href="#">My account</a></li>
                                <li><a href="#">Order history</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Vendor contact</a></li>
                                <li><a href="#">Front page</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="footer-menu">
                            <h2 class="footer-wid-title">Categories</h2>
                            <ul>
                                <li><a href="#">Mobile Phone</a></li>
                                <li><a href="#">Home accesseries</a></li>
                                <li><a href="#">LED TV</a></li>
                                <li><a href="#">Computer</a></li>
                                <li><a href="#">Gadets</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="footer-newsletter">
                            <h2 class="footer-wid-title">Newsletter</h2>
                            <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to
                                your inbox!</p>
                            <div class="newsletter-form">
                                <form action="#">
                                    <input type="email" placeholder="Type your email">
                                    <input type="submit" value="Subscribe">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End footer top area -->

        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright">
                            <p>&copy; 2015 uCommerce. All Rights Reserved. </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="footer-card-icon">
                            <i class="fa fa-cc-discover"></i>
                            <i class="fa fa-cc-mastercard"></i>
                            <i class="fa fa-cc-paypal"></i>
                            <i class="fa fa-cc-visa"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End footer bottom area -->



        <!-- Latest jQuery form server -->
        <script src="https://code.jquery.com/jquery.min.js"></script>

        <!-- Bootstrap JS form CDN -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <!-- jQuery sticky menu -->
        <script src="product_asset/js/owl.carousel.min.js"></script>0
        <script src="product_asset/js/jquery.sticky.js"></script>

        <!-- jQuery easing -->
        <script src="product_asset/js/jquery.easing.1.3.min.js"></script>

        <!-- Main Script -->
        <script src="product_asset/js/main.js"></script>

        <!-- Slider -->
        <script type="text/javascript" src="product_asset/js/bxslider.min.js"></script>
        <script type="text/javascript" src="product_asset/js/script.slider.js"></script>


        <!-- Js Plugins -->
        <script src="shop_asset/js/jquery-3.3.1.min.js"></script>
        <script src="shop_asset/js/bootstrap.min.js"></script>
        <script src="shop_asset/js/jquery-ui.min.js"></script>
        <script src="shop_asset/js/jquery.countdown.min.js"></script>
        <script src="shop_asset/js/jquery.nice-select.min.js"></script>
        <script src="shop_asset/js/jquery.zoom.min.js"></script>
        <script src="shop_asset/js/jquery.dd.min.js"></script>
        <script src="shop_asset/js/jquery.slicknav.js"></script>
        <script src="shop_asset/js/owl.carousel.min.js"></script>
        <script src="shop_asset/js/main.js"></script>

        <!-- JavaScript -->
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
        <!-- Default theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
        <!-- Semantic UI theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
        <!-- Bootstrap theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />

        <!-- Javascript -->
        <script>
        function AddCart(id) {
            $.ajax({
                url: 'Add-Cart/' + id,
                type: 'GET',
            }).done(function(response) {
                RenderCart(response);
                alertify.success('<h6>Đã thêm mới sản phẩm</h6>');
            });
        }
        $("#change-item-cart").on("click", ".si-close i", function() {
            $.ajax({
                url: 'Delete-Item-Cart/' + $(this).data("id"),
                type: 'GET',
            }).done(function(response) {
                RenderCart(response);
                alertify.success('<h6>Đã xóa sản phẩm</h6>');
            });
        });

        function RenderCart(response) {
            $("#change-item-cart").empty();
            $("#change-item-cart").html(response);
            $("#totalQuantyShow").text($("#totalQuantyCart").val());

        }

        function SaveListItemCart(id) {
            $.ajax({
                url: 'Save-Item-List-Cart/' + id + '/' + $("#quanty-item-" + id).val(),
                type: 'GET',
            }).done(function(response) {
                RenderListCart(response);
                alertify.success('<h6>Đã cập nhập sản phẩm</h6>');
            });
        }

        function DeleteListItemCart(id) {
            $.ajax({
                url: 'Delete-Item-List-Cart/' + id,
                type: 'GET',
            }).done(function(response) {
                RenderListCart(response);
                alertify.success('<h6>Đã xóa mới sản phẩm</h6>');
            });
        }

        function RenderListCart(response) {
            $("#list-cart").empty();
            $("#list-cart").html(response);

            var proQty = $('.pro-qty');
            proQty.prepend('<span class="dec qtybtn">-</span>');
            proQty.append('<span class="inc qtybtn">+</span>');
            proQty.on('click', '.qtybtn', function() {
                var $button = $(this);
                var oldValue = $button.parent().find('input').val();
                if ($button.hasClass('inc')) {
                    var newVal = parseFloat(oldValue) + 1;
                } else {
                    // Don't allow decrementing below zero
                    if (oldValue > 0) {
                        var newVal = parseFloat(oldValue) - 1;
                    } else {
                        newVal = 0;
                    }
                }
                $button.parent().find('input').val(newVal);
            });
        }
        </script>
</body>

</html>