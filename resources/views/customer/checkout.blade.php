@include('CPartials.header')
<title>Checkout</title>
@include('flash-message')


<!-- section start -->
<section class="section-big-py-space bg-light">
    <div class="custom-container">
        <div class="checkout-page contact-page">
            <div class="checkout-form">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-title">
                                <h3>Billing Details</h3></div>
                            <form action="{{url('editUserDetail')}}" method="post">
                                <input type="hidden" name="userId" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                                @csrf
                            <div class="theme-form">
                                <div class="row check-out ">

                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <label>Full Name</label>
                                        <input type="text" name="name" value="{{$user->name}}" placeholder="">
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">Phone</label>
                                        <input type="text" name="phone" value="{{$user->phone}}" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">Email Address</label>
                                        <input type="text" name="email" value="{{$user->email}}" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label class="field-label">Location</label>
                                        <input type="text" name="location" value="{{$user->location}}" placeholder="">

                                    </div>
                                    <button class="btn btn-secondary">Edit</button>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-details theme-form  section-big-mt-space">
                                <div class="order-box">
                                    <div class="title-box">
                                        <div>Product <span>Total</span></div>
                                    </div>
                                    <ul class="qty">
                                        @foreach($checkouts as $checkout)
                                        <li>{{$checkout->product->product_name}} × {{$checkout->quantity}}
                                            @switch($checkout)
                                                @case($checkout->size=='1LITRE')
                                            <span>Ksh: {{$checkout->product->product_price*$checkout->quantity}}</span>
                                                @break
                                                @case($checkout->size=='750ML')
                                                <span>Ksh: {{$checkout->product->product_price750*$checkout->quantity}}</span>
                                                @break
                                                @case($checkout->size=='375ML')
                                                <span>Ksh: {{$checkout->product->product_price375*$checkout->quantity}}</span>
                                                @break
                                                @case($checkout->size=='250ML')
                                                <span>Ksh: {{$checkout->product->product_price250*$checkout->quantity}}</span>
                                                @break
                                            @endswitch
                                        </li>
                                        @endforeach
                                    </ul>
                                    <ul class="sub-total">
                                        <li>Subtotal <span class="count">Ksh: {{$totalSum}}</span></li>
                                        <li>Delivery Fee <span class="count">Ksh: 150</span></li>
                                    </ul>
                                    <ul class="total">
                                        <li>Total <span class="count" style="color: #0b0b0b">Ksh: {{$totalSum + 150}}</span></li>
                                    </ul>
                                </div>
                                <div class="payment-box">
                                    <div class="upper-box">
                                        <div class="payment-options">
                                            <ul>
                                                <li>
                                                    <div class="radio-option">
                                                        <input type="radio" name="payment-group" id="payment-2" checked="checked">
                                                        <label for="payment-2">Cash On Delivery<span class="small-text">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-option paypal">
                                                        <input type="radio" name="payment-group" id="payment-3">
                                                        <label for="payment-3">Mpesa<span class="image"><img src="assets/images/paypal.html" alt=""></span></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <form action="{{url('placeOrder')}}" method="post" id="placeOrder">
                                        @csrf
                                        <div class="row cart-buttons">
                                            <div class="col-12"><a href="{{url('cart')}}" class="btn btn-normal">Edit Cart</a> <a href="javascript:document.getElementById('placeOrder').submit();" class="btn btn-normal ml-3">Place Order</a></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</section>
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
<!-- section end -->
@include('CPartials.footer1')
@include('CPartials.footer')
