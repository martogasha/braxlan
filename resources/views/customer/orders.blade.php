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
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($trackOrders as $trackOrder)
                            <tr>
                                <td>#{{$trackOrder->id}}</td>
                                <td>
                                    <div class="d-flex">
                                        <img src="{{asset('uploads/product/'.$trackOrder->product->product_image)}}" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded" style="height: 50px">
                                    </div>
                                </td>
                                <td><span class="badge badge-secondary">{{$trackOrder->order_status}}</span></td>
                                @if($trackOrder->order_stats =='Awaiting Confirmation')
                                <td><span class="badge badge-primary">{{$trackOrder->order_stats}}</span></td>
                                @elseif($trackOrder->order_stats =='Order on the Way')
                                    <td><span class="badge badge-secondary">{{$trackOrder->order_stats}}</span></td>

                                @else
                                <td><span class="badge badge-success">{{$trackOrder->order_stats}}</span></td>
                                @endif
                                    <td>{{$trackOrder->created_at->format('y/m')}}</td>
                                <td>{{$trackOrder->product->product_price}}</td>
                                <td>{{$trackOrder->quantity}}</td>
                                <td>Ksh: {{$trackOrder->product->product_price*$trackOrder->quantity}}</td>
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


@include('CPartials.footer1')
@include('CPartials.footer')

