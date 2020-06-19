@include('VPartials.header')
<title>Braxlan - Vendor</title>

        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Dashboard
                                    <small>Braxlan Vendor panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-md-6 xl-50">
                        <div class="card o-hidden  widget-cards">
                            <div class="bg-secondary card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body"><span class="m-0">Products</span>
                                        <a href="{{url('vProductList')}}"><h3 class="mb-0"><span class="counter">{{\App\Product::where('user_id',\Illuminate\Support\Facades\Auth::user()->id)->count()}}</span><small></small></h3></a>
                                    </div>
                                    <div class="icons-widgets">
                                        <i data-feather="box"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 xl-100">
                        <div class="card">
                            <div class="card-header">
                                <h5>Latest Orders</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="icofont icofont-simple-left"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="user-status table-responsive latest-order-table">
                                    <table class="table table-bordernone">
                                        <thead>
                                        <tr>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Order Total</th>
                                            <th scope="col">Payment Method</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="digits">$120.00</td>
                                            <td class="font-danger">Bank Transfers</td>
                                            <td class="digits">On Way</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="digits">$90.00</td>
                                            <td class="font-secondary">Ewallets</td>
                                            <td class="digits">Delivered</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="digits">$240.00</td>
                                            <td class="font-warning">Cash</td>
                                            <td class="digits">Delivered</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="digits">$120.00</td>
                                            <td class="font-danger">Direct Deposit</td>
                                            <td class="digits">$6523</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td class="digits">$50.00</td>
                                            <td class="font-primary">Bank Transfers</td>
                                            <td class="digits">Delivered</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <a href="{{url('orders')}}" class="btn btn-primary">View All Orders</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>

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

<!--chartist js-->
<script src="assets/js/chart/chartist/chartist.js"></script>


<!-- lazyload js-->
<script src="assets/js/lazysizes.min.js"></script>

<!--copycode js-->
<script src="assets/js/prism/prism.min.js"></script>
<script src="assets/js/clipboard/clipboard.min.js"></script>
<script src="assets/js/custom-card/custom-card.js"></script>

<!--counter js-->
<script src="assets/js/counter/jquery.waypoints.min.js"></script>
<script src="assets/js/counter/jquery.counterup.min.js"></script>
<script src="assets/js/counter/counter-custom.js"></script>

<!--Customizer admin-->
<script src="assets/js/admin-customizer.js"></script>

<!--map js-->
<script src="assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
<script src="assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>

<!--apex chart js-->
<script src="assets/js/chart/apex-chart/apex-chart.js"></script>
<script src="assets/js/chart/apex-chart/stock-prices.js"></script>

<!--chartjs js-->
<script src="assets/js/chart/flot-chart/excanvas.js"></script>
<script src="assets/js/chart/flot-chart/jquery.flot.js"></script>
<script src="assets/js/chart/flot-chart/jquery.flot.time.js"></script>
<script src="assets/js/chart/flot-chart/jquery.flot.categories.js"></script>
<script src="assets/js/chart/flot-chart/jquery.flot.stack.js"></script>
<script src="assets/js/chart/flot-chart/jquery.flot.pie.js"></script>
<!--dashboard custom js-->
<script src="assets/js/dashboard/default.js"></script>

<!--right sidebar js-->
<script src="assets/js/chat-menu.js"></script>

<!--height equal js-->
<script src="assets/js/equal-height.js"></script>

<!-- lazyload js-->
<script src="assets/js/lazysizes.min.js"></script>

<!--script admin-->
<script src="assets/js/admin-script.js"></script>

</body>

<!-- Mirrored from themes.pixelstrap.com/bigdeal/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2020 05:39:36 GMT -->
</html>
