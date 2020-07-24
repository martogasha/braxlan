@include('CPartials.header')
<title>Order Success</title>
<!-- thank-you section start -->
<section class="section-big-py-space light-layout">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="success-text"><i class="fa fa-check-circle" aria-hidden="true"></i>
                    <h2>thank you</h2>
                    <p>Order is successfully placed will contact you shortly for confirmation</p>
                    <span class="badge badge-secondary" id="orderStatus">Awaiting Confirmation</span>
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
                        <input type="hidden" value="{{$order->order_stats}}" id="orderStats">
                    <div class="row product-order-detail">
                        <div class="col-3"><img src="{{asset('uploads/product/'.$order->product->product_image)}}" alt="" class="img-fluid "></div>
                        <div class="col-3 order_detail">
                            <div>
                                <h4>{{$order->product->product_name}}</h4>
                                <h5>cotton shirt</h5></div>
                        </div>
                        <div class="col-3 order_detail">
                            <div>
                                <h4>Size</h4>
                                <h5>{{$order->size}}</h5></div>

                        </div>
                        <div class="col-3 order_detail">
                            <div>
                                <h4>quantity</h4>
                                <h5>{{$order->quantity}}</h5></div>
                        </div>
                        <div class="col-3 order_detail">
                            <div>
                                <h4>Total</h4>
                                @switch($order)
                                    @case($order->size=='1LITRE')
                                    <h5>Ksh: <b>{{$order->product->product_price*$order->quantity}}</b></h5>
                                    @break
                                    @case($order->size=='750ML')
                                    <h5>Ksh: <b>{{$order->product->product_price750*$order->quantity}}</b></h5>
                                    @break
                                    @case($order->size=='375ML')
                                    <h5>Ksh: <b>{{$order->product->product_price375*$order->quantity}}</b></h5>
                                    @break
                                    @case($order->size=='250ML')
                                    <h5>Ksh: <b>{{$order->product->product_price250*$order->quantity}}</b></h5>
                                    @break
                                @endswitch

                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="total-sec">
                        <ul>
                            <li>subtotal <span>Ksh: {{$totalSum}}</span></li>
                            @if($totalSum<500)
                            <li>Delivery Fee <span>Ksh: 100</span></li>
                            @else
                                <li>Delivery Fee <span>Free</span></li>

                            @endif
                        </ul>
                    </div>
                    <div class="final-total">
                        @if($totalSum<500)
                        <h3>total <span>{{$totalSum+100}}</span></h3></div>
                    @else
                        <h3>total <span>{{$totalSum}}</span></h3></div>

                @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row order-success-sec">
                    <div class="col-sm-6">
                        <h4>shipping address</h4>
                        <ul class="order-detail">
                            <li>{{\Illuminate\Support\Facades\Auth::user()->location}}</li>
                        </ul>
                        <h4><Contact></Contact></h4>
                        <ul class="order-detail">
                            <li>Contact No. {{\Illuminate\Support\Facades\Auth::user()->phone}}</li>
                        </ul>
                    </div>
                    <div class="col-sm-12 payment-mode">
                        <h4>payment method</h4>
                        <p>Pay on Delivery (Mpesa). Cash on delivery (COD) not Available due to Covid-19 regulations.</p>
                    </div>
                    <div class="col-md-12">
                        <div class="delivery-sec">
                            <h3>expected Time of delivery to your doorstep</h3>
                            <h2>30min - 70min</h2></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    alert('PING YOUR LOCATION TO 0790268795 USING WHATSAPP')
</script>
<!-- Section ends -->
@include('CPartials.settings')


@include('CPartials.footer1')
@include('CPartials.footer')
