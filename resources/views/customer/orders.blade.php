@include('CPartials.header')
<title>Braxlan - TrackOrders</title>


<!-- order-detail section start -->
<section class="section-big-py-space mt--5 bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-order">
                    <h3>your order details</h3>
                    <div class="card-body order-datatable">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>Order Id</th>
                                <th>Product</th>
                                <th>Payment Status</th>
                                <th>Order Status</th>
                                <th>Date</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($trackOrders as $trackOrder)
                            <tr>
                                <td>#{{$trackOrder->id}}</td>
                                <td>
                                    <div class="d-flex">
                                        <img src="{{asset('uploads/product/'.$trackOrder->product->product_image)}}" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                                    </div>
                                </td>
                                <td><span class="badge badge-secondary">{{$trackOrder->order_status}}</span></td>
                                <td><span class="badge badge-success">{{$trackOrder->order_stats}}</span></td>
                                <td>Dec 10,18</td>
                                <td>Ksh: {{$trackOrder->product->product_price*$trackOrder->quantity}}</td>
                                <td><button class="btn btn-success">View</button> </td>
                            </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section ends -->



@include('CPartials.footer1')
@include('CPartials.footer')

