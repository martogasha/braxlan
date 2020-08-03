@include('APartials.header')
<title>Admin - Manage Orders</title>
<div class="page-body">
@include('flash-message')


<!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Orders
                            <small>Bigdeal Admin panel</small>
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
                        <h5>Manage Order</h5>
                    </div>
                    <div class="card-body order-datatable">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>Order Id</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>State</th>
                                <th>Action</th>
                                <th>Delete Order</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td id="getOrder">#00{{$order->id}}</td>
                                <td><span class="badge badge-secondary">{{$order->user->name}}</span></td>
                                <td><span class="badge badge-secondary">{{$order->user->location}}</span></td>
                                <td><span class="badge badge-secondary">{{$order->user->phone}}</span></td>
                                <td><span class="badge badge-primary">{{$order->order_status}}</span></td>
                                <td><span class="badge badge-secondary">{{$order->order_stats}}</span></td>
                                <td><button type="button" class="btn btn-success view" name="view" id="{{$order->user_id}}" data-toggle="modal" data-target="#exampleModal">View</button> </td>
                                <form action="{{url('deleteOrder',$order->id)}}" method="post">
                                    @csrf
                                <td><button type="submit" class="btn btn-danger">Cancel Order</button></td>
                                </form>
                            </tr>
                            @endforeach


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
<!-- Modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('completeOrder.store')}}" method="post">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <table class="display" id="basic1">

                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    @csrf

                <button type="submit" class="btn btn-primary">Confirm/Complete Order</button>
            </div>
        </div>
        </form>
    </div>
</div>

<!-- latest jquery-->
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>

<!-- feather icon js-->
<script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>

<!-- Sidebar jquery-->
<script src="{{asset('assets/js/sidebar-menu.js')}}"></script>

<!-- Datatable js-->
<script src="{{asset('assets/js/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatables/custom-basic.js')}}"></script>

<!--Customizer admin-->
<script src="{{asset('assets/js/admin-customizer.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('assets/js/lazysizes.min.js')}}"></script>

<!--right sidebar js-->
<script src="{{asset('assets/js/chat-menu.js')}}"></script>

<!--script admin-->
<script src="{{asset('assets/js/admin-script.js')}}"></script>

<script>
    $getOrder = $('#getOrder').text();
    $('#exampleModalLabel').append($getOrder)
    $(document).on('click','.view',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('ajax')}}",
            data:{'order':$value},
            success:function (data) {
                $('#basic1').html(data);
            },
            error:function (error) {
                console.log(error)
                alert('error')

            }

        });
    });
</script>

</body>


<!-- Mirrored from themes.pixelstrap.com/bigdeal/admin/order.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2020 06:27:28 GMT -->
</html>
