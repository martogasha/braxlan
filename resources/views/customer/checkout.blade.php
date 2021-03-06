@include('CPartials.header')
<title>Checkout</title>
@include('flash-message')
@if($totalPrice<500)
<div class="alert alert-danger" role="alert">
    ORDER BELOW KSH:500 WILL BE CHARGED DELIVERY FEE OF KSH:100
</div>
@endif

<!-- section start -->
<section class="section-big-py-space bg-light">
    <div class="custom-container">
        <div class="checkout-page contact-page">
            <div class="checkout-form">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="checkout-title">
                                <h3>Billing Details</h3></div>
                            <form action="{{url('placeOrder')}}" method="post" id="placeOrder">
                                @csrf
                            <div class="theme-form">
                                @if(isset($user))
                                <div class="row check-out ">
                                    <input type="hidden" name="userId" value="{{$user->id}}">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label class="field-label">Name</label>
                                        <input type="text" name="name" id="name" value="{{$user->name}}" placeholder="" required="">

                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label class="field-label">Phone</label>
                                        <input type="text" name="phone" value="{{$user->phone}}" placeholder="" required>

                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label class="field-label">Location</label>
                                        <input type="text" name="location" value="{{$user->location}}"  placeholder="" required>

                                    </div>
                                </div>
                                @else
                                        <h4 class="text-danger">Kindly Login to Place Order</h4>
                                <br>
                                    <a href="{{url('loginUser')}}"><button class="btn btn-info">Login/Register</button></a>
                                    </div>
                                    @endif
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
                                        <li>{{$checkout['item']['product_name']}}

                                                <span>Ksh: {{$checkout['item']['product_price']*$checkout['quantity']}}</span>

                                        </li>
                                        @endforeach
                                    </ul>
                                    <ul class="sub-total">
                                        <li>Subtotal <span class="count">Ksh: {{$totalPrice}}</span></li>
                                        @if($totalPrice < 500)
                                        <li>Delivery Fee <span class="count">Ksh: 100</span></li>
                                        @else
                                            <li>Delivery Fee <span class="count">Ksh: Free</span></li>
                                        @endif
                                    </ul>
                                    <ul class="total">
                                        @if($totalPrice < 500)
                                        <li>Total <span class="count" style="color: #0b0b0b">Ksh: {{$totalPrice+100}}</span></li>
                                        @else
                                            <li>Total <span class="count" style="color: #0b0b0b">Ksh: {{$totalPrice}}</span></li>

                                        @endif
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
                                                        <input type="radio" name="payment-group" id="payment-3" disabled>
                                                        <label for="payment-3">Mpesa<span class="image"><img src="assets/images/paypal.html" alt=""></span></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                        <div class="row cart-buttons">
                                            <div class="col-12"><a href="{{url('cart')}}" class="btn btn-normal">Edit Cart</a> <a href="javascript:document.getElementById('placeOrder').submit();" class="btn btn-normal ml-3">Place Order</a></div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</section>
@include('CPartials.cart')
@include('CPartials.settings')
<!-- section end -->
@include('CPartials.footer1')
@include('CPartials.footer')
<script>
    $(document).ready(function () {

        $('#placeOrder').validate({ // initialize the plugin
            rules: {
                name: {
                    required: true,
                },
                phone: {
                    required: true,
                    minlength: 5
                }
            }
        });

    });
</script>
