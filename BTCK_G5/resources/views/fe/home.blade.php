@extends('fe.index')
@section('main')
<main class="main home">
    <div class="container mb-2">
        <div class="info-boxes-container row row-joined mb-2 font2">
            <div class="info-box info-box-icon-left col-lg-4">
                <i class="icon-shipping"></i>

                <div class="info-box-content">
                    <h4>FREE SHIPPING &amp; RETURN</h4>
                    <p class="text-body">Free shipping on all orders over $99</p>
                </div>
                <!-- End .info-box-content -->
            </div>
            <!-- End .info-box -->

            <div class="info-box info-box-icon-left col-lg-4">
                <i class="icon-money"></i>

                <div class="info-box-content">
                    <h4>MONEY BACK GUARANTEE</h4>
                    <p class="text-body">100% money back guarantee</p>
                </div>
                <!-- End .info-box-content -->
            </div>
            <!-- End .info-box -->

            <div class="info-box info-box-icon-left col-lg-4">
                <i class="icon-support"></i>

                <div class="info-box-content">
                    <h4>ONLINE SUPPORT 24/7</h4>
                    <p class="text-body">Lorem ipsum dolor sit amet.</p>
                </div>
                <!-- End .info-box-content -->
            </div>
            <!-- End .info-box -->
        </div>

        <div class="row">
            <div class="col-lg-9">
                <div class="home-slider slide-animate owl-carousel owl-theme mb-2" data-owl-options="{
                    'loop': false,
                    'dots': true,
                    'nav': false
                }">
                    <div class="home-slide home-slide1 banner banner-md-vw banner-sm-vw d-flex align-items-center">
                        <img class="slide-bg" style="background-color: #2699D0;" src="{{asset('fe-asset')}}/assets/images/demoes/demo1/slider/slide-1.png" width="880" height="428" alt="home-slider">
                        <div class="banner-layer appear-animate" data-animation-name="fadeInUpShorter">
                            <h4 class="text-white mb-0">Find the Boundaries. Push Through!</h4>
                            <h2 class="text-white mb-0">Summer Sale</h2>
                            <h3 class="text-white text-uppercase m-b-3">70% Off</h3>
                            <h5 class="text-white text-uppercase d-inline-block mb-0 ls-n-20 align-text-bottom">
                                Starting At <b class="coupon-sale-text bg-secondary text-white d-inline-block">$<em
                                        class="align-text-top">199</em>99</b></h5>
                            <a href="demo1-shop.html" class="btn btn-dark btn-md ls-10">Shop Now!</a>
                        </div>
                        <!-- End .banner-layer -->
                    </div>
                    <!-- End .home-slide -->

                    <div class="home-slide home-slide2 banner banner-md-vw banner-sm-vw d-flex align-items-center">
                        <img class="slide-bg" style="background-color: #dadada;" src="{{asset('fe-asset')}}/assets/images/demoes/demo1/slider/slide-2.jpg" width="880" height="428" alt="home-slider">
                        <div class="banner-layer text-uppercase appear-animate" data-animation-name="fadeInUpShorter">
                            <h4 class="m-b-2">Over 200 products with discounts</h4>
                            <h2 class="m-b-3">Great Deals</h2>
                            <h5 class="d-inline-block mb-0 align-top mr-5 mb-2">Starting At
                                <b>$<em>299</em>99</b>
                            </h5>
                            <a href="demo1-shop.html" class="btn btn-dark btn-md ls-10">Get Yours!</a>
                        </div>
                        <!-- End .banner-layer -->
                    </div>
                    <!-- End .home-slide -->

                    <div class="home-slide home-slide3 banner banner-md-vw banner-sm-vw  d-flex align-items-center">
                        <img class="slide-bg" style="background-color: #e5e4e2;" src="{{asset('fe-asset')}}/assets/images/demoes/demo1/slider/slide-3.jpg" width="880" height="428" alt="home-slider" />
                        <div class="banner-layer text-uppercase appear-animate" data-animation-name="fadeInUpShorter">
                            <h4 class="m-b-2">Up to 70% off</h4>
                            <h2 class="m-b-3">New Arrivals</h2>
                            <h5 class="d-inline-block mb-0 align-top mr-5 mb-2">Starting At
                                <b>$<em>299</em>99</b>
                            </h5>
                            <a href="demo1-shop.html" class="btn btn-dark btn-md ls-10">Get Yours!</a>
                        </div>
                        <!-- End .banner-layer -->
                    </div>
                    <!-- End .home-slide -->
                </div>
                <!-- End .home-slider -->

                <div class="banners-container m-b-2 owl-carousel owl-theme" data-owl-options="{
                    'dots': false,
                    'margin': 20,
                    'loop': false,
                    'responsive': {
                        '480': {
                            'items': 2
                        },
                        '768': {
                            'items': 3
                        }
                    }
                }">
                    <div class="banner banner1 banner-hover-shadow d-flex align-items-center mb-2 w-100 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="500">
                        <figure class="w-100">
                            <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/banners/banner-1.jpg" style="background-color: #dadada;" alt="banner">
                        </figure>
                        <div class="banner-layer">
                            <h3 class="m-b-2">Porto Watches</h3>
                            <h4 class="m-b-4 text-primary"><sup class="text-dark"><del>20%</del></sup>30%<sup>OFF</sup></h4>
                            <a href="demo1-shop.html" class="text-dark text-uppercase ls-10">Shop Now</a>
                        </div>
                    </div>
                    <!-- End .banner -->
                    <div class="banner banner2 text-uppercase banner-hover-shadow d-flex align-items-center mb-2 w-100 appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">
                        <figure class="w-100">
                            <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/banners/banner-2.jpg" style="background-color: #dadada;" alt="banner">
                        </figure>
                        <div class="banner-layer text-center">
                            <h3 class="m-b-1 ls-n-20">Deal Promos</h3>
                            <h4 class="text-body">Starting at $99</h4>
                            <a href="demo1-shop.html" class="text-dark text-uppercase ls-10">Shop Now</a>
                        </div>
                    </div>
                    <!-- End .banner -->
                    <div class="banner banner3 banner-hover-shadow d-flex align-items-center mb-2 w-100 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="500">
                        <figure class="w-100">
                            <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/banners/banner-3.jpg" style="background-color: #dadada;" alt="banner">
                        </figure>
                        <div class="banner-layer text-right">
                            <h3 class="m-b-2">Handbags</h3>
                            <h4 class="mb-3 text-secondary text-uppercase">Starting at $99</h4>
                            <a href="demo1-shop.html" class="text-dark text-uppercase ls-10">Shop Now</a>
                        </div>
                    </div>
                    <!-- End .banner -->
                </div>

                <h2 class="section-title ls-n-10 m-b-4 appear-animate" data-animation-name="fadeInUpShorter">
                    Featured Products</h2>

                <div class="products-slider owl-carousel owl-theme dots-top dots-small m-b-1 pb-1 appear-animate" data-animation-name="fadeInUpShorter">
                    <div class="product-default inner-quickview inner-icon">
                        <figure class="img-effect">
                            <a href="demo1-product.html">
                                <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/product-1.jpg" width="205" height="205" alt="product">
                                <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/product-1-2.jpg" width="205" height="205" alt="product">
                            </a>
                            <div class="label-group">
                                <div class="product-label label-hot">HOT</div>
                                <div class="product-label label-sale">-20%</div>
                            </div>
                            <div class="btn-icon-group">
                                <a href="demo1-product.html" class="btn-icon btn-add-cart"><i
                                        class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            <div class="product-countdown-container">
                                <span class="product-countdown-title">offer ends in:</span>
                                <div class="product-countdown countdown-compact" data-until="2021, 10, 5" data-compact="true">
                                </div>
                                <!-- End .product-countdown -->
                            </div>
                            <!-- End .product-countdown-container -->
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="demo1-shop.html" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                        class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title"> <a href="demo1-product.html">Black Grey Headset</a> </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$9.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure class="img-effect">
                            <a href="demo1-product.html">
                                <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/product-2.jpg" width="205" height="205" alt="product" />
                            </a>
                            <div class="btn-icon-group">
                                <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="demo1-shop.html" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                        class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title"> <a href="demo1-product.html">Battery Charger</a> </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$9.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure class="img-effect">
                            <a href="demo1-product.html">
                                <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/product-3.jpg" width="205" height="205" alt="product">
                                <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/product-3-2.jpg" width="205" height="205" alt="product">
                            </a>
                            <div class="label-group">
                                <div class="product-label label-hot">HOT</div>
                                <div class="product-label label-sale">-30%</div>
                            </div>
                            <div class="btn-icon-group">
                                <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="demo1-shop.html" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                        class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title"> <a href="demo1-product.html">Brown Bag</a> </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$9.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure class="img-effect">
                            <a href="demo1-product.html">
                                <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/product-4.jpg" width="205" height="205" alt="product">
                                <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/product-4-2.jpg" width="205" height="205" alt="product">
                            </a>
                            <div class="label-group">
                                <div class="product-label label-hot">HOT</div>
                            </div>
                            <div class="btn-icon-group">
                                <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="demo1-shop.html" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                        class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title"> <a href="demo1-product.html">Casual Note Bag</a> </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$9.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure class="img-effect">
                            <a href="demo1-product.html">
                                <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/product-5.jpg" width="205" height="205" alt="product">
                                <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/product-5-2.jpg" width="205" height="205" alt="product">
                            </a>
                            <div class="label-group">
                                <div class="product-label label-hot">HOT</div>
                            </div>
                            <div class="btn-icon-group">
                                <a href="#" title="Add To Cart" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="demo1-shop.html" class="product-category">category</a>
                                </div>
                                <a href="wishlist.html" title="Add to Wishlist" class="btn-icon-wish"><i
                                        class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title"> <a href="demo1-product.html">Porto Extended Camera</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$9.00</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                </div>
                <!-- End .featured-proucts -->

                <div class="brands-slider owl-carousel owl-theme images-center appear-animate" data-animation-name="fadeIn" data-animation-duration="700" data-owl-options="{
                    'margin': 0,
                    'responsive': {
                        '768': {
                            'items': 4
                        },
                        '991': {
                            'items': 4
                        },
                        '1200': {
                            'items': 5
                        }
                    }
                }">
                    <img src="{{asset('fe-asset')}}/assets/images/brands/small/brand1.png" width="140" height="60" alt="brand">
                    <img src="{{asset('fe-asset')}}/assets/images/brands/small/brand2.png" width="140" height="60" alt="brand">
                    <img src="{{asset('fe-asset')}}/assets/images/brands/small/brand3.png" width="140" height="60" alt="brand">
                    <img src="{{asset('fe-asset')}}/assets/images/brands/small/brand4.png" width="140" height="60" alt="brand">
                    <img src="{{asset('fe-asset')}}/assets/images/brands/small/brand5.png" width="140" height="60" alt="brand">
                    <img src="{{asset('fe-asset')}}/assets/images/brands/small/brand6.png" width="140" height="60" alt="brand">
                </div>
                <!-- End .brands-slider -->

                <div class="row products-widgets">
                    <div class="col-sm-6 col-md-4 pb-4 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="200">
                        <div class="product-column">
                            <h3 class="section-sub-title ls-n-20">Top Rated Products</h3>

                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="demo1-product.html">
                                        <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/small/product-4.jpg" width="84" height="84" alt="product">
                                        <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/small/product-4-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title"> <a href="demo1-product.html">Porto Extended
                                            Camera</a> </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="demo1-product.html">
                                        <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/small/product-5.jpg" width="84" height="84" alt="product">
                                        <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/small/product-5-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title"> <a href="demo1-product.html">Blue BackPack</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default left-details product-widget ">
                                <figure>
                                    <a href="demo1-product.html">
                                        <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/small/product-6.jpg" width="84" height="84" alt="product">
                                        <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/small/product-6-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title"> <a href="demo1-product.html">Casual Blue
                                            Shoes</a> </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .product-column -->
                    </div>
                    <!-- End .col-md-4 -->

                    <div class="col-sm-6 col-md-4 pb-4 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="500">
                        <div class="product-column">
                            <h3 class="section-sub-title ls-n-20">Best Selling Products</h3>

                            <div class="product-default left-details product-widget ">
                                <figure>
                                    <a href="demo1-product.html">
                                        <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/small/product-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title"> <a href="demo1-product.html">Battery Charger</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default left-details product-widget ">
                                <figure>
                                    <a href="demo1-product.html">
                                        <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/small/product-7.jpg" width="84" height="84" alt="product">
                                        <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/small/product-7-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title"> <a href="demo1-product.html">Computer Mouse</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default left-details product-widget ">
                                <figure>
                                    <a href="demo1-product.html">
                                        <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/small/product-8.jpg" width="84" height="84" alt="product">
                                        <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/small/product-8-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title"> <a href="demo1-product.html">Casual Note Bag</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .product-column -->
                    </div>
                    <!-- End .col-md-4 -->

                    <div class="col-sm-6 col-md-4 pb-4 pb-md-0 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="800">
                        <div class="product-column">
                            <h3 class="section-sub-title ls-n-20">Latest Products</h3>

                            <div class="product-default left-details product-widget ">
                                <figure>
                                    <a href="demo1-product.html">
                                        <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/small/product-9.jpg" width="84" height="84" alt="product">
                                        <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/small/product-9-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title"> <a href="demo1-product.html">Ultimate 3D
                                            Bluetooth Speaker</a> </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default left-details product-widget ">
                                <figure>
                                    <a href="demo1-product.html">
                                        <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/small/product-10.jpg" width="84" height="84" alt="product">
                                        <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/small/product-10-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title"> <a href="demo1-product.html">Brown-Black Men
                                            Casual Glasses</a> </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <div class="product-default left-details product-widget ">
                                <figure>
                                    <a href="demo1-product.html">
                                        <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/small/product-11.jpg" width="84" height="84" alt="product">
                                        <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/products/small/product-11-2.jpg" width="84" height="84" alt="product">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-title"> <a href="demo1-product.html">Brown-Black Men
                                            Casual Glasses</a> </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price">$49.00</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .product-column -->
                    </div>
                    <!-- End .col-md-4 -->
                </div>
                <!-- End .row -->

                <hr class="mt-1 mb-3 pb-2">

                <div class="feature-boxes-container">
                    <div class="row">
                        <div class="col-md-4 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="200">
                            <div class="feature-box  feature-box-simple text-center">
                                <i class="icon-earphones-alt"></i>

                                <div class="feature-box-content p-0">
                                    <h3 class="mb-0 pb-1">Customer Support</h3>
                                    <h5 class="mb-1 pb-1">Need Assistance?</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                                </div>
                                <!-- End .feature-box-content -->
                            </div>
                            <!-- End .feature-box -->
                        </div>
                        <!-- End .col-md-4 -->

                        <div class="col-md-4 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="400">
                            <div class="feature-box feature-box-simple text-center">
                                <i class="icon-credit-card"></i>

                                <div class="feature-box-content p-0">
                                    <h3 class="mb-0 pb-1">Secured Payment</h3>
                                    <h5 class="mb-1 pb-1">Safe & Fast</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                                </div>
                                <!-- End .feature-box-content -->
                            </div>
                            <!-- End .feature-box -->
                        </div>
                        <!-- End .col-md-4 -->

                        <div class="col-md-4 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="600">
                            <div class="feature-box feature-box-simple text-center">
                                <i class="icon-action-undo"></i>

                                <div class="feature-box-content p-0">
                                    <h3 class="mb-0 pb-1">Returns</h3>
                                    <h5 class="mb-1 pb-1">Easy & Free</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                                </div>
                                <!-- End .feature-box-content -->
                            </div>
                            <!-- End .feature-box -->
                        </div>
                        <!-- End .col-md-4 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .feature-boxes-container -->
            </div>
            <!-- End .col-lg-9 -->

            <div class="sidebar-overlay"></div>
            <div class="sidebar-toggle custom-sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
            <aside class="sidebar-home col-lg-3 order-lg-first mobile-sidebar">
                <div class="side-menu-wrapper text-uppercase mb-2 d-none d-lg-block">
                    <h2 class="side-menu-title bg-gray ls-n-25">Browse Categories</h2>

                    <nav class="side-nav">
                        <ul class="menu menu-vertical sf-arrows">
                            <li class="active"><a href="demo1.html"><i class="icon-home"></i>Home</a></li>
                            <li>
                                <a href="demo1-shop.html" class="sf-with-ul"><i
                                        class="sicon-badge"></i>Categories</a>
                                <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <a href="#" class="nolink pl-0">VARIATION 1</a>
                                            <ul class="submenu">
                                                <li><a href="category.html">Fullwidth Banner</a></li>
                                                <li><a href="category-banner-boxed-slider.html">Boxed Slider
                                                        Banner</a>
                                                </li>
                                                <li><a href="category-banner-boxed-image.html">Boxed Image
                                                        Banner</a>
                                                </li>
                                                <li><a href="demo1-shop.html">Left Sidebar</a></li>
                                                <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                                <li><a href="category-off-canvas.html">Off Canvas Filter</a>
                                                </li>
                                                <li><a href="category-horizontal-filter1.html">Horizontal
                                                        Filter1</a>
                                                </li>
                                                <li><a href="category-horizontal-filter2.html">Horizontal
                                                        Filter2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#" class="nolink pl-0">VARIATION 2</a>
                                            <ul class="submenu">
                                                <li><a href="category-list.html">List Types</a></li>
                                                <li><a href="category-infinite-scroll.html">Ajax Infinite
                                                        Scroll</a>
                                                </li>
                                                <li><a href="category.html">3 Columns Products</a></li>
                                                <li><a href="category-4col.html">4 Columns Products</a></li>
                                                <li><a href="category-5col.html">5 Columns Products</a></li>
                                                <li><a href="category-6col.html">6 Columns Products</a></li>
                                                <li><a href="category-7col.html">7 Columns Products</a></li>
                                                <li><a href="category-8col.html">8 Columns Products</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 p-0">
                                            <div class="menu-banner">
                                                <figure>
                                                    <img src="{{asset('fe-asset')}}/assets/images/menu-banner.jpg" width="192" height="313" alt="Menu banner">
                                                </figure>
                                                <div class="banner-content">
                                                    <h4>
                                                        <span class="">UP TO</span><br />
                                                        <b class="">50%</b>
                                                        <i>OFF</i>
                                                    </h4>
                                                    <a href="demo1-shop.html" class="btn btn-sm btn-dark">SHOP
                                                        NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .megamenu -->
                            </li>
                            <li>
                                <a href="demo1-product.html" class="sf-with-ul"><i
                                        class="sicon-basket"></i>Products</a>
                                <div class="megamenu megamenu-fixed-width">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <a href="#" class="nolink pl-0">PRODUCT PAGES</a>
                                            <ul class="submenu">
                                                <li><a href="product.html">SIMPLE PRODUCT</a></li>
                                                <li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
                                                <li><a href="product.html">SALE PRODUCT</a></li>
                                                <li><a href="product.html">FEATURED & ON SALE</a></li>
                                                <li><a href="product-custom-tab.html">WITH CUSTOM TAB</a></li>
                                                <li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a>
                                                </li>
                                                <li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a>
                                                </li>
                                                <li><a href="product-addcart-sticky.html">ADD CART STICKY</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End .col-lg-4 -->

                                        <div class="col-lg-4">
                                            <a href="#" class="nolink pl-0">PRODUCT LAYOUTS</a>
                                            <ul class="submenu">
                                                <li><a href="product-extended-layout.html">EXTENDED LAYOUT</a>
                                                </li>
                                                <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                                                <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
                                                <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                                                <li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a>
                                                </li>
                                                <li><a href="product-transparent-image.html">TRANSPARENT
                                                        IMAGE</a></li>
                                                <li><a href="product-center-vertical.html">CENTER VERTICAL</a>
                                                </li>
                                                <li><a href="#">BUILD YOUR OWN</a></li>
                                            </ul>
                                        </div>
                                        <!-- End .col-lg-4 -->

                                        <div class="col-lg-4 p-0">
                                            <div class="menu-banner menu-banner-2">
                                                <figure>
                                                    <img src="{{asset('fe-asset')}}/assets/images/menu-banner-1.jpg" alt="Menu banner" class="product-promo">
                                                </figure>
                                                <i>OFF</i>
                                                <div class="banner-content">
                                                    <h4>
                                                        <span class="">UP TO</span><br />
                                                        <b class="">50%</b>
                                                    </h4>
                                                </div>
                                                <a href="demo1-shop.html" class="btn btn-sm btn-dark">SHOP
                                                    NOW</a>
                                            </div>
                                        </div>
                                        <!-- End .col-lg-4 -->
                                    </div>
                                    <!-- End .row -->
                                </div>
                                <!-- End .megamenu -->
                            </li>
                            <li>
                                <a href="#" class="sf-with-ul"><i class="sicon-envelope"></i>Pages</a>

                                <ul>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="demo1-about.html">About Us</a></li>
                                    <li><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="single.html">Blog Post</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="demo1-contact.html">Contact Us</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="forgot-password.html">Forgot Password</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html"><i class="sicon-book-open"></i>Blog</a></li>
                            <li><a href="demo1-about.html"><i class="sicon-users"></i>About Us</a></li>
                            <li><a href="#"><i class="icon-cat-gift"></i>Special Offer!</a></li>
                            <li><a href="https://1.envato.market/DdLk5" target="_blank"><i
                                        class="sicon-star"></i>Buy Porto!<span
                                        class="tip tip-hot">Hot</span></a></li>
                        </ul>
                    </nav>
                </div>
                <!-- End .side-menu-container -->

                <div class="widget widget-banners px-3 pb-3 text-center">
                    <div class="owl-carousel owl-theme dots-small">
                        <div class="banner d-flex flex-column align-items-center">
                            <h3 class="badge-sale bg-primary d-flex flex-column align-items-center justify-content-center text-uppercase">
                                <em>Sale</em>Many Item
                            </h3>

                            <h4 class="sale-text text-uppercase"><small>UP
                                    TO</small>50<sup>%</sup><sub>off</sub></h4>
                            <p>Bags, Clothing, T-Shirts, Shoes, Watches and much more...</p>
                            <a href="demo1-shop.html" class="btn btn-dark btn-md">View Sale</a>
                        </div>
                        <!-- End .banner -->

                        <div class="banner banner4">
                            <figure>
                                <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/banners/banner-7.jpg" alt="banner">
                            </figure>

                            <div class="banner-layer">
                                <div class="coupon-sale-content">
                                    <h4>DRONE + CAMERAS</h4>
                                    <h5 class="coupon-sale-text text-gray ls-n-10 p-0 font1"><i>UP
                                            TO</i><b class="text-white bg-dark font1">$100</b> OFF</h5>
                                    <p class="ls-0">Top Brands and Models!</p>
                                    <a href="demo1-shop.html" class="btn btn-inline-block btn-dark btn-black ls-0">VIEW
                                        SALE</a>
                                </div>
                            </div>
                        </div>
                        <!-- End .banner -->

                        <div class="banner banner5">
                            <h4>HEADPHONES SALE</h4>

                            <figure class="m-b-3">
                                <img src="{{asset('fe-asset')}}/assets/images/demoes/demo1/banners/banner-8.jpg" alt="banner">
                            </figure>

                            <div class="banner-layer">
                                <div class="coupon-sale-content">
                                    <h5 class="coupon-sale-text ls-n-10 p-0 font1"><i>UP
                                            TO</i><b class="text-white bg-secondary font1">50%</b> OFF</h5>
                                    <a href="demo1-shop.html" class="btn btn-inline-block btn-dark btn-black ls-0">VIEW
                                        SALE</a>
                                </div>
                            </div>
                        </div>
                        <!-- End .banner -->
                    </div>
                    <!-- End .banner-slider -->
                </div>
                <!-- End .widget -->

                <div class="widget widget-newsletters bg-gray text-center">
                    <h3 class="widget-title text-uppercase m-b-3">Subscribe Newsletter</h3>
                    <p class="mb-2">Get all the latest information on Events, Sales and Offers. </p>
                    <form action="#">
                        <div class="form-group position-relative sicon-envolope-letter">
                            <input type="email" class="form-control" name="newsletter-email" placeholder="Email address">
                        </div>
                        <!-- Endd .form-group -->
                        <input type="submit" class="btn btn-primary btn-md" value="Subscribe">
                    </form>
                </div>
                <!-- End .widget -->

                <div class="widget widget-testimonials">
                    <div class="owl-carousel owl-theme dots-left dots-small">
                        <div class="testimonial">
                            <div class="testimonial-owner">
                                <figure>
                                    <img src="{{asset('fe-asset')}}/assets/images/clients/client-1.jpg" alt="client">
                                </figure>

                                <div>
                                    <h4 class="testimonial-title">john Smith</h4>
                                    <span>CEO &amp; Founder</span>
                                </div>
                            </div>
                            <!-- End .testimonial-owner -->

                            <blockquote class="ml-4 pr-0">
                                <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi.
                                </p>
                            </blockquote>
                        </div>
                        <!-- End .testimonial -->

                        <div class="testimonial">
                            <div class="testimonial-owner">
                                <figure>
                                    <img src="{{asset('fe-asset')}}/assets/images/clients/client-2.jpg" alt="client">
                                </figure>

                                <div>
                                    <h4 class="testimonial-title">Dae Smith</h4>
                                    <span>CEO &amp; Founder</span>
                                </div>
                            </div>
                            <!-- End .testimonial-owner -->

                            <blockquote class="ml-4 pr-0">
                                <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi.
                                </p>
                            </blockquote>
                        </div>
                        <!-- End .testimonial -->

                        <div class="testimonial">
                            <div class="testimonial-owner">
                                <figure>
                                    <img src="{{asset('fe-asset')}}/assets/images/clients/client-3.jpg" alt="client">
                                </figure>

                                <div>
                                    <h4 class="testimonial-title">John Doe</h4>
                                    <span>CEO &amp; Founder</span>
                                </div>
                            </div>
                            <!-- End .testimonial-owner -->

                            <blockquote class="ml-4 pr-0">
                                <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi.
                                </p>
                            </blockquote>
                        </div>
                        <!-- End .testimonial -->
                    </div>
                    <!-- End .testimonials-slider -->
                </div>
                <!-- End .widget -->

                <div class="widget widget-posts post-date-in-media media-with-zoom mb-0 mb-lg-2 pb-lg-2">
                    <div class="owl-carousel owl-theme dots-left dots-m-0 dots-small" data-owl-options="
                        { 'margin' : 20,
                          'loop': false }">
                        <article class="post">
                            <div class="post-media">
                                <a href="single.html">
                                    <img src="{{asset('fe-asset')}}/assets/images/blog/home/post-1.jpg" data-zoom-image="{{asset('fe-asset')}}/assets/images/blog/home/post-1.jpg" width="280" height="209" alt="Post">
                                </a>
                                <div class="post-date">
                                    <span class="day">29</span>
                                    <span class="month">Jun</span>
                                </div>
                                <!-- End .post-date -->

                                <span class="prod-full-screen">
                                    <i class="fas fa-search"></i>
                                </span>
                            </div>
                            <!-- End .post-media -->

                            <div class="post-body">
                                <h2 class="post-title">
                                    <a href="single.html">Post Format Standard</a>
                                </h2>

                                <div class="post-content">
                                    <p>Leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with... </p>

                                    <a href="single.html" class="read-more">read more <i
                                            class="icon-right-open"></i></a>
                                </div>
                                <!-- End .post-content -->
                            </div>
                            <!-- End .post-body -->
                        </article>

                        <article class="post">
                            <div class="post-media">
                                <a href="single.html">
                                    <img src="{{asset('fe-asset')}}/assets/images/blog/home/post-2.jpg" data-zoom-image="{{asset('fe-asset')}}/assets/images/blog/home/post-2.jpg" width="280" height="209" alt="Post">
                                </a>
                                <div class="post-date">
                                    <span class="day">29</span>
                                    <span class="month">Jun</span>
                                </div>
                                <!-- End .post-date -->
                                <span class="prod-full-screen">
                                    <i class="fas fa-search"></i>
                                </span>
                            </div>
                            <!-- End .post-media -->

                            <div class="post-body">
                                <h2 class="post-title">
                                    <a href="single.html">Fashion Trends</a>
                                </h2>

                                <div class="post-content">
                                    <p>Leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with... </p>

                                    <a href="single.html" class="read-more">read more <i
                                            class="icon-right-open"></i></a>
                                </div>
                                <!-- End .post-content -->
                            </div>
                            <!-- End .post-body -->
                        </article>

                        <article class="post">
                            <div class="post-media">
                                <a href="single.html">
                                    <img src="{{asset('fe-asset')}}/assets/images/blog/home/post-3.jpg" data-zoom-image="{{asset('fe-asset')}}/assets/images/blog/home/post-3.jpg" width="280" height="209" alt="Post">
                                </a>
                                <div class="post-date">
                                    <span class="day">29</span>
                                    <span class="month">Jun</span>
                                </div>
                                <!-- End .post-date -->
                                <span class="prod-full-screen">
                                    <i class="fas fa-search"></i>
                                </span>
                            </div>
                            <!-- End .post-media -->

                            <div class="post-body">
                                <h2 class="post-title">
                                    <a href="single.html">
                                        Post Format Video</a>
                                </h2>

                                <div class="post-content">
                                    <p>Leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with... </p>

                                    <a href="single.html" class="read-more">read more <i
                                            class="icon-right-open"></i></a>
                                </div>
                                <!-- End .post-content -->
                            </div>
                            <!-- End .post-body -->
                        </article>
                    </div>
                    <!-- End .posts-slider -->
                </div>
                <!-- End .widget -->
            </aside>
            <!-- End .col-lg-3 -->
        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->
</main>
@endsection