@include('APartials.header')
<title>Braxlan - Vendor Product List</title>
<div class="page-body">
    @include('flash-message')

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Vendor Product List
                            <small>Bigdeal Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Physical</li>
                        <li class="breadcrumb-item active">Vendor Product List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row products-admin ratio_asos">
            @foreach($productLists as $productList)
            <div class="col-xl-3 col-sm-6">
                <div class="card product">
                    <div class="card-body">
                        <div class="product-box p-0">
                            <div class="product-imgbox">
                                <div class="product-front">
                                    <img src="{{asset('uploads/product/'.$productList->product_image)}}" class="img-fluid  " alt="product">
                                </div>
                                <div class="product-back">
                                    <img src="{{asset('uploads/product/'.$productList->product_image2)}}" class="img-fluid  " alt="product">
                                </div>
                                <div class="product-icon icon-inline">
                                    <a href="#" data-toggle="modal"  data-target="#quick-view" title="Quick View">
                                        <i class="ti-search view" id="{{$productList->id}}" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="new-label1">
                                    <div>new</div>
                                </div>
                                <div class="on-sale1">
                                    on sale
                                </div>
                            </div>
                            <div class="product-detail detail-inline p-0">
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
                                                {{$productList->product_name}}.
                                            </h6>
                                        </a>
                                    </div>
                                    <div class="detail-right">
                                        <div class="check-price">
                                        </div>
                                        <div class="price">
                                            <div class="price">
                                                Ksh: {{$productList->product_price}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>
<!-- Quick-view modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content quick-view-modal">
            <form action="{{url('transferVendorProduct')}}" method="post" id="transfer">
                @csrf
                <div class="modal-body">

            </div>
            </form>
            <div>
                <a href="javascript:document.getElementById('transfer').submit();" class="btn btn-normal">Verify</a>
                <a href="{{url('productDetail')}}" class="btn btn-normal">Reject</a>
            </div>

        </div>
    </div>
</div>
<!-- Quick-view modal popup end-->

<!-- footer start-->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2019 © Bigdeal All rights reserved.</p>
            </div>
            <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
            </div>
        </div>
    </div>
</footer>
<!-- footer end-->

</div>

</div>

<!-- latest jquery-->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="assets/js/icons/feather-icon/feather.min.js"></script>
<script src="assets/js/icons/feather-icon/feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="assets/js/sidebar-menu.js"></script>

<!--Customizer admin-->
<script src="assets/js/admin-customizer.js"></script>

<!-- lazyload js-->
<script src="assets/js/lazysizes.min.js"></script>

<!--right sidebar js-->
<script src="assets/js/chat-menu.js"></script>

<!--script admin-->
<script src="assets/js/admin-script.js"></script>

</body>
<script>
    $(document).on('click','.view',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('ajax1')}}",
            data:{'product':$value},
            success:function (data) {
                $('.modal-body').html(data);
            },
            error:function (error) {
                console.log(error)
                alert('error')

            }

        });
    });
</script>

<!-- Mirrored from themes.pixelstrap.com/bigdeal/admin/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2020 06:06:35 GMT -->
</html>
