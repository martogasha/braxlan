@include('CPartials.header')
<title>Online Shopping for Groceries, Home Essentials and more | Braxlan</title>

<!--collection banner start-->
<section class="collection-banner section-pt-space b-g-white ">
    <div class="custom-container">
        <div class="row collection2">
            <div class="col-md-4">
                <div class="collection-banner-main banner-1  p-right">
                    <div class="collection-img" style="background-color: aquamarine">
                        <img src="{{asset('uploads/product/'.$poster->poster_image)}}" class="img-fluid bg-img  " alt="banner">
                    </div>
                    <div class="collection-banner-contain">
                        <div>
                            <h3 style="color: black"><b>FOOD</b></h3>
                            <h4>Store</h4>
                            <div class="shop">
                                <a>
                                    shop now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="collection-banner-main banner-1  p-right">
                    <div class="collection-img" style="background-color: aquamarine">
                        <img src="{{asset('uploads/product/'.$poster2->poster_image)}}" class="img-fluid bg-img  " alt="banner">
                    </div>
                    <div class="collection-banner-contain">
                        <div>
                            <h3 style="color: black"><b>HOMESTEAD</b></h3>
                            <h4>Store</h4>
                            <div class="shop">
                                <a>
                                    shop now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="collection-banner-main banner-1  p-right">
                    <div class="collection-img" style="background-color: aquamarine">
                        <img src="{{asset('uploads/product/'.$poster3->poster_image)}}" class="img-fluid bg-img  " alt="banner">
                    </div>
                    <div class="collection-banner-contain">
                        <div>
                            <h3 style="color: black"><b>LIQUOR</b></h3>
                            <h4">Store</h4>
                            <div class="shop">
                                <a>
                                    shop now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--collection banner end-->

<!--discount banner start-->
<!--discount banner end-->

<!--tab product-->

<section class="section-pt-space" >
    <div class="tab-product-main">
        <div class="tab-prodcut-contain">
            <ul class="tabs tab-title" style="height: 50px">
                <a href="{{url('shop')}}"><b style="color: black;font-size:20px">SUPERMARKET</b><h6>View More</h6></a>

            </ul>
        </div>
    </div>
</section>

<!--tab product-->

<!-- slider tab  -->
<section class="section-py-space ratio_square product">
    <div class="custom-container">
        <div class="row">
            <div class="col pr-0">
                <div class="theme-tab product mb--5">

                    <div class="tab-content-cls ">
                        <div id="tab-1" class="tab-content active default">
                            <div class="product-slide-6 product-m no-arrow">
                                @foreach($supermarkets as $supermarket)
                                <div>
                                    <a href="{{url('productDetail',$supermarket->id)}}">
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{asset('uploads/product/'.$supermarket->product_image)}}" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{asset('uploads/product/'.$supermarket->product_image1)}}" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">

                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-eye view" id="{{$supermarket->id}}" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            {{$supermarket->product_name}}.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            Ksh: {{$supermarket->product_price}}

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <div id="tab-2" class="tab-content">
                            <div class="product-slide-6 product-m no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline ">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-content">
                            <div class="product-slide-6 product-m no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline ">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-content">
                            <div class="product-slide-6 product-m no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline ">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-content">
                            <div class="product-slide-6 product-m no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline ">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-6" class="tab-content">
                            <div class="product-slide-6 product-m no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline ">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- slider tab end -->

<!--collection banner start-->
<section class="collection-banner section-pb-space ">
    <div class="custom-container">
        <div class="row">
            <div class="col">
                <div class="collection-banner-main banner-5 p-center">
                    <div class="collection-img">
                        <img src="assets/images/layout-2/collection-banner/7.jpg" class="bg-img  " alt="banner">
                    </div>
                    <div class="collection-banner-contain ">
                        <div class="sub-contain">
                            <h3>save up to 30% off</h3>
                            <h4>women<span>fashion</span></h4>
                            <div class="shop">
                                <a class="btn btn-normal" href="#">
                                    shop now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--collection banner end-->


<!--tab product-->
<section class="section-pt-space" >
    <div class="tab-product-main">
        <div class="tab-prodcut-contain">
            <ul class="tabs tab-title" style="height: 50px">
                <a href="{{url('shop')}}"><b style="color: black;font-size:20px">SAFETY ESSENTIALS</b><h6>View More</h6></a>

            </ul>
        </div>
    </div>
</section>
<!--tab product-->

<!-- slider tab  -->
<section class="section-py-space ratio_square product">
    <div class="custom-container">
        <div class="row">
            <div class="col pr-0">
                <div class="theme-tab product mb--5">

                    <div class="tab-content-cls ">
                        <div id="tab-1" class="tab-content active default">
                            <div class="product-slide-6 product-m no-arrow">
                                @foreach($safteys as $saftey)
                                <div>
                                    <a href="{{url('productDetail',$saftey->id)}}">
                                        <div class="product-box">
                                            <div class="product-imgbox">
                                                <div class="product-front">
                                                    <img src="{{asset('uploads/product/'.$saftey->product_image)}}" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-back">
                                                    <img src="{{asset('uploads/product/'.$saftey->product_image1)}}" class="img-fluid  " alt="product">
                                                </div>
                                                <div class="product-icon icon-inline">

                                                    <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                        <i class="ti-eye view" id="{{$saftey->id}}" aria-hidden="true"></i>
                                                    </a>

                                                </div>
                                            </div>
                                            <div class="product-detail detail-inline">
                                                <div class="detail-title">
                                                    <div class="detail-left">
                                                        <div class="rating-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a href="#">
                                                            <h6 class="price-title">
                                                                {{$saftey->product_name}}.
                                                            </h6>
                                                        </a>
                                                    </div>
                                                    <div class="detail-right">
                                                        <div class="check-price">
                                                        </div>
                                                        <div class="price">
                                                            <div class="price">
                                                                Ksh: {{$saftey->product_price}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <div id="tab-2" class="tab-content">
                            <div class="product-slide-6 product-m no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline ">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-content">
                            <div class="product-slide-6 product-m no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline ">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-content">
                            <div class="product-slide-6 product-m no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline ">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-content">
                            <div class="product-slide-6 product-m no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline ">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-6" class="tab-content">
                            <div class="product-slide-6 product-m no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline ">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- slider tab end -->

<!-- media banner tab start-->
<!-- media banner tab end -->

<!--collection banner start-->
<!--collection banner end-->

<!--title start-->
<section class="section-pt-space" >
    <div class="tab-product-main">
        <div class="tab-prodcut-contain">
            <ul class="tabs tab-title" style="height: 50px">
                <a href="{{url('shop')}}"><b style="color: black;font-size:20px">HOMESTEAD ESSENTIALS</b><h6>View More</h6></a>

            </ul>
        </div>
    </div>
</section>
<!--title end-->

<!--product start-->
<section class="section-py-space ratio_square product">
    <div class="custom-container">
        <div class="row">
            <div class="col pr-0">
                <div class="theme-tab product mb--5">

                    <div class="tab-content-cls ">
                        <div id="tab-1" class="tab-content active default">
                            <div class="product-slide-6 product-m no-arrow">
                                @foreach($kitchens as $kitchen)
                                    <div>
                                        <a href="{{url('productDetail',$kitchen->id)}}">
                                            <div class="product-box">
                                                <div class="product-imgbox">
                                                    <div class="product-front">
                                                        <img src="{{asset('uploads/product/'.$kitchen->product_image)}}" class="img-fluid  " alt="product">
                                                    </div>
                                                    <div class="product-back">
                                                        <img src="{{asset('uploads/product/'.$kitchen->product_image1)}}" class="img-fluid  " alt="product">
                                                    </div>
                                                    <div class="product-icon icon-inline">

                                                        <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                            <i class="ti-eye view" id="{{$kitchen->id}}" aria-hidden="true"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="product-detail detail-inline">
                                                    <div class="detail-title">
                                                        <div class="detail-left">
                                                            <div class="rating-star">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="#">
                                                                <h6 class="price-title">
                                                                    {{$kitchen->product_name}}.
                                                                </h6>
                                                            </a>
                                                        </div>
                                                        <div class="detail-right">
                                                            <div class="check-price">
                                                            </div>
                                                            <div class="price">
                                                                <div class="price">
                                                                    Ksh: {{$kitchen->product_price}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div id="tab-2" class="tab-content">
                            <div class="product-slide-6 product-m no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline ">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-content">
                            <div class="product-slide-6 product-m no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline ">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-content">
                            <div class="product-slide-6 product-m no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline ">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-content">
                            <div class="product-slide-6 product-m no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline ">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-6" class="tab-content">
                            <div class="product-slide-6 product-m no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline ">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--product end-->

<section class="section-pt-space" >
    <div class="tab-product-main">
        <div class="tab-prodcut-contain">
            <ul class="tabs tab-title" style="height: 50px">
                <a href="{{url('shop')}}"><b style="color: black;font-size:20px">DRINKS</b><h6>View More</h6></a>

            </ul>
        </div>
    </div>
</section>
<!--title end-->

<!--product start-->
<section class="section-py-space ratio_square product">
    <div class="custom-container">
        <div class="row">
            <div class="col pr-0">
                <div class="theme-tab product mb--5">

                    <div class="tab-content-cls ">
                        <div id="tab-1" class="tab-content active default">
                            <div class="product-slide-6 product-m no-arrow">
                                @foreach($drinks as $drink)
                                    <div>
                                        <a href="{{url('productDetail',$drink->id)}}">
                                            <div class="product-box">
                                                <div class="product-imgbox">
                                                    <div class="product-front">
                                                        <img src="{{asset('uploads/product/'.$drink->product_image)}}" class="img-fluid  " alt="product">
                                                    </div>
                                                    <div class="product-back">
                                                        <img src="{{asset('uploads/product/'.$drink->product_image1)}}" class="img-fluid  " alt="product">
                                                    </div>
                                                    <div class="product-icon icon-inline">

                                                        <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                            <i class="ti-eye view" id="{{$drink->id}}" aria-hidden="true"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="product-detail detail-inline">
                                                    <div class="detail-title">
                                                        <div class="detail-left">
                                                            <div class="rating-star">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="#">
                                                                <h6 class="price-title">
                                                                    {{$drink->product_name}}.
                                                                </h6>
                                                            </a>
                                                        </div>
                                                        <div class="detail-right">
                                                            <div class="check-price">
                                                            </div>
                                                            <div class="price">
                                                                <div class="price">
                                                                    Ksh: {{$drink->product_price}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div id="tab-2" class="tab-content">
                            <div class="product-slide-6 product-m no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline ">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-content">
                            <div class="product-slide-6 product-m no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline ">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-content">
                            <div class="product-slide-6 product-m no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline ">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-content">
                            <div class="product-slide-6 product-m no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline ">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-6" class="tab-content">
                            <div class="product-slide-6 product-m no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale1">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline ">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                                            </div>
                                            <div class="product-icon icon-inline">
                                                <button onclick="openCart()">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                            <div class="new-label1">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-inline">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#">
                                                        <h6 class="price-title">
                                                            reader will be distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        $ 56.21
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                            $ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--product end-->


<!--contact banner start-->
<section class="contact-banner contact-banner-inverse">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="contact-banner-contain">
                    <div class="contact-banner-img"><img src="assets/images/layout-1/call-img.png" class="  img-fluid" alt="call-banner"></div>
                    <div> <h3>if you have any question please call us</h3></div>
                    <div><h2>0754-238-704</h2></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--contact banner end-->

<!--footer start-->
@include('CPartials.footer1')
<!--footer end-->


<!-- tap to top -->
<div class="tap-top">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
<!-- tap to top End -->

<!-- Add to cart bar -->
<div id="cart_side" class=" add_to_cart top">
    <a href="javascript:void(0)" class="overlay" onclick="closeCart()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my cart</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeCart()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="cart_media">
            <ul class="cart_product">
                <li>
                    <div class="media">
                        <a href="#">
                            <img alt="" class="mr-3" src="assets/images/layout-2/product/1.jpg">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>1 x $ 299.00</span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <a href="#">
                            <img alt="" class="mr-3" src="assets/images/layout-2/product/a1.jpg">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>1 x $ 299.00</span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <a href="#"><img alt="" class="mr-3" src="assets/images/layout-2/product/1.jpg"></a>
                        <div class="media-body">
                            <a href="#">
                                <h4>item name</h4>
                            </a>
                            <h4><span>1 x $ 299.00</span></h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="#">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
            </ul>
            <ul class="cart_total">
                <li>
                    <div class="total">
                        <h5>subtotal : <span>$299.00</span></h5>
                    </div>
                </li>
                <li>
                    <div class="buttons">
                        <a href="{{url('cart')}}" class="btn btn-normal btn-xs view-cart">view cart</a>
                        <a href="#" class="btn btn-normal btn-xs checkout">checkout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Add to cart bar end-->

<!--Newsletter modal popup start-->
<!--Newsletter Modal popup end-->

<!-- Quick-view modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content quick-view-modal">
            <div class="modal-body">
               <div id="modalBody">

               </div>

                <div class="row">>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <div class="product-buttons"><a href="javascript:openCart();" class="btn btn-normal">add to cart</a>
                                <a href="{{url('productDetail')}}" class="btn btn-normal">view detail</a>
                                <a href="{{url('productDetail')}}"class="btn btn-normal">Buy Now</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Quick-view modal popup end-->




<!-- My account bar start-->
@include('CPartials.login')
<!-- Add to account bar end-->

<!-- Add to wishlist bar -->
<!-- Add to wishlist bar end-->

<!-- add to  setting bar  start-->
<div id="mySetting" class="add_to_cart right">
    <a href="javascript:void(0)" class="overlay" onclick="closeSetting()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            @if(\Illuminate\Support\Facades\Auth::check())
            <h3>{{\Illuminate\Support\Facades\Auth::user()->name}}</h3>
            @endif
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeSetting()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="setting-block">
            <div >
                <a href=""><h5>My Account</h5></a>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Orders</a></li>
                    <li><a href="#">Edit Details</a></li>
                    <form action="{{route('logout')}}" method="post" id="logoutForm">
                        @csrf
                    <li><a href="javascript:document.getElementById('logoutForm').submit();">Logout</a></li>
                    </form>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- facebook chat section end -->

@include('CPartials.footer')
<script>
    $(document).on('click','.view',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('getCProduct')}}",
            data:{'product':$value},
            success:function (data) {
                $('#modalBody').html(data);
            },
            error:function (error) {
                console.log(error)
                alert('error')

            }

        });
    });
</script>
