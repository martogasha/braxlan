@include('CPartials.header')
<title>Checkout</title>


<!-- section start -->
<section class="section-big-py-space bg-light">
    <div class="custom-container">
        <div class="checkout-page contact-page">
            <div class="checkout-form">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-title">
                                <h3>Billing Details</h3></div>
                            <div class="theme-form">
                                <div class="row check-out ">

                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <label>Full Name</label>
                                        <input type="text" name="field-name" value="{{$user->name}}" placeholder="">
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">Phone</label>
                                        <input type="text" name="field-name" value="{{$user->phone}}" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <label class="field-label">Email Address</label>
                                        <input type="text" name="field-name" value="{{$user->email}}" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label class="field-label">Location</label>
                                        <input type="text" name="field-name" value="{{$user->location}}" placeholder="">

                                    </div>
                                    <button class="btn btn-secondary">Edit</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-details theme-form  section-big-mt-space">
                                <div class="order-box">
                                    <div class="title-box">
                                        <div>Product <span>Total</span></div>
                                    </div>
                                    <ul class="qty">
                                        @foreach($checkouts as $checkout)
                                        <li>{{$checkout->product->product_name}} × {{$checkout->quantity}} <span>Ksh: {{$checkout->product->product_price*$checkout->quantity}}</span></li>
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
<!-- section end -->
@include('CPartials.footer1')
@include('CPartials.footer')
