@include('APartials.header')
<title>Admin - Complete Orders</title>
<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Orders
                            <small>Braxlan Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Sales</li>
                        <li class="breadcrumb-item active">Orders</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Completed Orders</h5>
                    </div>
                    <div class="card-body order-datatable">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>Order Id</th>
                                <th>Product</th>
                                <th>Payment Status</th>
                                <th>Customer</th>
                                <th>Order Status</th>
                                <th>Date</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>#51240</td>
                                <td>
                                    <div class="d-flex">
                                        <img src="assets/images/electronics/product/25.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                        <img src="assets/images/electronics/product/13.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                        <img src="assets/images/electronics/product/16.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                    </div>
                                </td>
                                <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                                <td>Paypal</td>
                                <td><span class="badge badge-success">Delivered</span></td>
                                <td>Dec 10,18</td>
                                <td>$54671</td>
                                <td><button class="btn btn-success">View</button> </td>
                            </tr>
                            <tr>
                                <td>#51241</td>
                                <td>
                                    <div class="d-flex">
                                        <img src="assets/images/electronics/product/12.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                        <img src="assets/images/electronics/product/3.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                    </div>
                                </td>
                                <td><span class="badge badge-success">Paid</span></td>
                                <td>Master Card</td>
                                <td><span class="badge badge-primary">Shipped</span></td>
                                <td>Feb 15,18</td>
                                <td>$2136</td>
                            </tr>
                            <tr>
                                <td>#51242</td>
                                <td><img src="assets/images/electronics/product/14.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded"></td>
                                <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                <td>Debit Card</td>
                                <td><span class="badge badge-warning">Processing</span></td>
                                <td>Mar 27,18</td>
                                <td>$8791</td>
                            </tr>
                            <tr>
                                <td>#51243</td>
                                <td>
                                    <div class="d-flex">
                                        <img src="assets/images/electronics/product/6.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                        <img src="assets/images/furniture/8.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                    </div>
                                </td>
                                <td><span class="badge badge-danger">Payment Failed</span></td>
                                <td>Master Card</td>
                                <td><span class="badge badge-danger">Cancelled</span></td>
                                <td>Sep 1,18</td>
                                <td>$139</td>
                            </tr>
                            <tr>
                                <td>#51244</td>
                                <td>
                                    <div class="d-flex">
                                        <img src="assets/images/jewellery/pro/18.jpg" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                        <img src="assets/images/fashion/pro/06.jpg" alt="" class="img-fluid img-30 blur-up lazyloaded">
                                    </div>
                                </td>
                                <td><span class="badge badge-success">Paid</span></td>
                                <td>Paypal</td>
                                <td><span class="badge badge-primary">Shipped</span></td>
                                <td>May 18,18</td>
                                <td>$4678</td>
                            </tr>

                            </tbody>
                        </table>
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

<!-- Datatable js-->
<script src="assets/js/datatables/jquery.dataTables.min.js"></script>
<script src="assets/js/datatables/custom-basic.js"></script>

<!--Customizer admin-->
<script src="assets/js/admin-customizer.js"></script>

<!-- lazyload js-->
<script src="assets/js/lazysizes.min.js"></script>

<!--right sidebar js-->
<script src="assets/js/chat-menu.js"></script>

<!--script admin-->
<script src="assets/js/admin-script.js"></script>

</body>

<!-- Mirrored from themes.pixelstrap.com/bigdeal/admin/order.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2020 06:27:28 GMT -->
</html>
