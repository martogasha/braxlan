@include('CPartials.header')
<title>Order Success</title>
<!-- thank-you section start -->
<section class="section-big-py-space light-layout">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="success-text"><i class="fa fa-check-circle" aria-hidden="true"></i>
                    <h2>thank you</h2>
                    <p>Order is successfully processed will contact you shortly for confirmation</p>
                    <span class="badge badge-secondary">Order on the Way</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->


<!-- order-detail section start -->
<section class="section-big-py-space mt--5 bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-order">
                    <h3>your order details</h3>
                    @foreach($orders as $order)
                    <div class="row product-order-detail">
                        <div class="col-3"><img src="{{asset('uploads/product/'.$order->product->product_image)}}" alt="" class="img-fluid "></div>
                        <div class="col-3 order_detail">
                            <div>
                                <h4>{{$order->product->product_name}}</h4>
                                <h5>cotton shirt</h5></div>
                        </div>
                        <div class="col-3 order_detail">
                            <div>
                                <h4>quantity</h4>
                                <h5>{{$order->quantity}}</h5></div>
                        </div>
                        <div class="col-3 order_detail">
                            <div>
                                <h4>price</h4>
                                <h5>Ksh: {{$order->product->product_price*$order->quantity}}</h5></div>
                        </div>
                    </div>
                    @endforeach
                    <div class="total-sec">
                        <ul>
                            <li>subtotal <span>Ksh: {{$totalSum}}</span></li>
                            <li>Delivery Fee <span>Ksh: 150</span></li>
                        </ul>
                    </div>
                    <div class="final-total">
                        <h3>total <span>{{$totalSum + 150}}</span></h3></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row order-success-sec">
                    <div class="col-sm-6">
                        <h4>shipping address</h4>
                        <ul class="order-detail">
                            <li>gerg harvell</li>
                            <li>568, suite ave.</li>
                            <li>Austrlia, 235153</li>
                            <li>Contact No. 987456321</li>
                        </ul>
                    </div>
                    <div class="col-sm-12 payment-mode">
                        <h4>payment method</h4>
                        <p>Pay on Delivery (Cash/Card). Cash on delivery (COD) availabel. Card/Net banking acceptance subject to device availability.</p>
                    </div>
                    <div class="col-md-12">
                        <div class="delivery-sec">
                            <h3>expected Time of delivery to your doorstep</h3>
                            <h2>2hrs Maximum</h2></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    alert('PING YOUR LOCATION TO 0754-238-704 USING WHATSAPP')
</script>
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
