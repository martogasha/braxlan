@include('CPartials.header')
<title>Under1000</title>

<!-- breadcrumb start -->
<!-- breadcrumb End -->
<!-- section start -->
<section class="section-big-pt-space ratio_asos bg-light">
    <div class="collection-wrapper">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-3 collection-filter category-page-side">
                    <!-- side-bar colleps block stat -->
                    <div class="collection-filter-block creative-card creative-inner category-side">
                        <!-- brand filter start -->
                        <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
                        <!-- color filter start here -->
                        <div class="collection-sidebar-banner">
                            <a href="{{url('beer')}}"><img src="{{asset('assets/images/6pack.jpg')}}" class="img-fluid " alt=""></a>
                        </div>
                        <!-- price filter start here -->
                        <div class="collection-collapse-block border-0 open">
                            <h3 class="collapse-block-title">price</h3>
                            <div class="collection-collapse-block-content">
                                <div class="collection-brand-filter">
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="hundred">
                                        <label class="custom-control-label" for="hundred">Ksh10 - Ksh500</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="twohundred">
                                        <label class="custom-control-label" for="twohundred">Ksh500 - Ksh1000</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="threehundred">
                                        <label class="custom-control-label" for="threehundred">Ksh1000 - Ksh3000</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="fourhundred">
                                        <label class="custom-control-label" for="fourhundred">Ksh3000 - Ksh5000</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="fourhundredabove">
                                        <label class="custom-control-label" for="fourhundredabove">Ksh5000 above</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- silde-bar colleps block end here -->
                    @include('APartials.trending')
                    <!-- side-bar single product slider start -->
                    <!-- side-bar single product slider end -->
                    <!-- side-bar banner start here -->
                    <!-- side-bar banner end here -->
                </div>
                <div class="collection-content col">
                    <div class="page-main-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="collection-product-wrapper">
                                    <div class="product-top-filter">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="filter-main-btn"><span class="filter-btn  "><i class="fa fa-filter" aria-hidden="true"></i> Filter</span></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="product-filter-content">
                                                    <div class="search-count">
                                                        <h5>Showing Products 1-24 of 10 Result</h5></div>
                                                    <div class="collection-view">
                                                        <ul>
                                                            <li><i class="fa fa-th grid-layout-view"></i></li>
                                                            <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="collection-grid-view">
                                                        <ul>
                                                            <li><img src="assets/images/category/icon/2.png" alt="" class="product-2-layout-view"></li>
                                                            <li><img src="assets/images/category/icon/3.png" alt="" class="product-3-layout-view"></li>
                                                            <li><img src="assets/images/category/icon/4.png" alt="" class="product-4-layout-view"></li>
                                                            <li><img src="assets/images/category/icon/6.png" alt="" class="product-6-layout-view"></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-page-per-view">
                                                        <select>
                                                            <option value="High to low">24 Products Par Page</option>
                                                            <option value="Low to High">50 Products Par Page</option>
                                                            <option value="Low to High">100 Products Par Page</option>
                                                        </select>
                                                    </div>
                                                    <div class="product-page-filter">
                                                        <select>
                                                            <option value="High to low">Sorting items</option>
                                                            <option value="Low to High">50 Products</option>
                                                            <option value="Low to High">100 Products</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper-grid">
                                        <div class="row">
                                            @foreach($under1000s as $under1000)
                                                <a href="{{url('productDetail',$under1000->id)}}">
                                                    <div class="col-xl-3 col-md-4 col-6  col-grid-box">
                                                        <div class="product">
                                                            <div class="product-box">
                                                                <div class="product-imgbox">
                                                                    <div class="product-front">
                                                                        <img src="{{asset('uploads/product/'.$under1000->product_image)}}" class="img-fluid  " alt="product">
                                                                    </div>
                                                                </div>
                                                                <div class="product-detail detail-center ">
                                                                    <div class="detail-title">
                                                                        <div class="detail-left">

                                                                            <a href="#">
                                                                                <h6 class="price-title">
                                                                                    {{$under1000->product_name}}.
                                                                                    @if(isset($under1000->product_flavour))
                                                                                        <br>
                                                                                        <h6 class="text-dark"><b>FLAVOURS</b></h6>
                                                                                    @endif
                                                                                    @if(isset($under1000->product_flavour))
                                                                                        {{$under1000->product_flavour}}
                                                                                    @endif
                                                                                    <br>
                                                                                    @if(isset($under1000->product_flavour1))
                                                                                        {{$under1000->product_flavour1}}
                                                                                    @endif
                                                                                    <br>
                                                                                    @if(isset($under1000->product_flavour2))
                                                                                        {{$under1000->product_flavour2}}
                                                                                    @endif
                                                                                    @if(isset($under1000->product_flavour3))
                                                                                        {{$under1000->product_flavour3}}
                                                                                    @endif
                                                                                    @if(isset($under1000->product_flavour4))
                                                                                        {{$under1000->product_flavour4}}
                                                                                    @endif
                                                                                    @if(isset($under1000->product_flavour5))
                                                                                        {{$under1000->product_flavour5}}
                                                                                    @endif
                                                                                </h6>
                                                                            </a>
                                                                        </div>
                                                                        <div class="detail-right">
                                                                            <div class="check-price">
                                                                            </div>
                                                                            <div class="price">
                                                                                <div class="price">
                                                                                    @if(isset($under1000->product_price5000))
                                                                                        5Litres Ksh: {{$under1000->product_price750}}<br>
                                                                                    @endif
                                                                                    @if(isset($under1000->product_price4500))
                                                                                        4.5Litres Ksh: {{$under1000->product_price4500}}<br>
                                                                                    @endif
                                                                                    @if(isset($under1000->product_price1500))
                                                                                        1.5Litres Ksh: {{$under1000->product_price1500}}<br>
                                                                                    @endif
                                                                                    @if(isset($under1000->product_price))
                                                                                        1Litre Ksh: {{$under1000->product_price}}<br>
                                                                                    @endif
                                                                                    @if(isset($under1000->product_price750))
                                                                                        750ML Ksh: {{$under1000->product_price750}}<br>
                                                                                    @endif
                                                                                    @if(isset($under1000->product_price500))
                                                                                        500ML Ksh: {{$under1000->product_price500}}<br>
                                                                                    @endif
                                                                                    @if(isset($under1000->product_price375))
                                                                                        375ML Ksh: {{$under1000->product_price375}}<br>
                                                                                    @endif
                                                                                    @if(isset($under1000->product_price350))
                                                                                        350ML Ksh: {{$under1000->product_price350}}<br>
                                                                                    @endif
                                                                                    @if(isset($under1000->product_price330))
                                                                                        330ML Ksh: {{$under1000->product_price330}}<br>
                                                                                    @endif
                                                                                    @if(isset($under1000->product_price250))
                                                                                        250ML Ksh: {{$under1000->product_price250}}<br>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="product-pagination">
                                        <div class="theme-paggination-block">
                                            <div class="row">
                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                    <nav aria-label="Page navigation">
                                                        <ul class="pagination">
                                                            <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span> <span class="sr-only">Previous</span></a></li>
                                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span> <span class="sr-only">Next</span></a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                    <div class="product-search-count-bottom">
                                                        <h5>Showing Products 1-24 of 10 Result</h5></div>
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
<div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="{{route('cart.store')}}" method="post" id="cart">
        @csrf
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">

            <div class="modal-content quick-view-modal">
                <div class="modal-body">
                    <div id="modalBody">

                    </div>

                    <div class="row">>
                        <div class="col-lg-6 rtl-text">
                            <div class="product-right">
                                <div class="product-buttons">
                                    <a href="javascript:document.getElementById('cart').submit();"class="btn btn-normal">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- section End -->
@include('CPartials.settings')

@include('CPartials.login')

@include('CPartials.footer1')
@include('CPartials.footer')
<script>
    $(document).on('click','.view',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('getSoft')}}",
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
