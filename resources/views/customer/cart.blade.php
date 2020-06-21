@include('CPartials.header')
<title>Cart</title>
@include('flash-message')
<!--header end-->

<!-- breadcrumb start -->
<!-- breadcrumb End -->


<!--section start-->
<section class="cart-section section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table cart-table table-responsive-xs">
                    <thead>
                    <tr class="table-head">
                        <th scope="col">image</th>
                        <th scope="col">product name</th>
                        <th scope="col">price</th>
                        <th scope="col">quantity</th>
                        <th scope="col">action</th>
                        <th scope="col">total</th>
                    </tr>
                    </thead>
                    @foreach($carts as $cart)
                    <tbody>
                    <tr>
                        <td>
                            <a href="#"><img src="{{asset('uploads/product/'.$cart->product->product_image)}}" alt="cart" class=" "></a>
                        </td>
                        <td><a href="#">{{$cart->product->product_name}}</a>
                            <div class="mobile-cart-content row">
                                <div class="col-xs-3">
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity" class="form-control input-number" value="{{$cart->quantity}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <h2 class="td-color">Ksh: {{$cart->product->product_price*$cart->quantity}} </h2></div>
                                <div class="col-xs-3">
                                    <form action="{{url('cartDelete',$cart->product_id)}}" method="post">
                                        @csrf
                                        <button type="submit"><i class="ti-close"></i></button>
                                    </form>
                                </div>
                        </td>
                        <td>
                            <h2>Ksh: {{$cart->product->product_price}}</h2></td>
                        <td>
                            <div class="qty-box">
                                <div class="input-group">
                                    <input type="number" name="quantity" class="form-control input-number" value="{{$cart->quantity}}">
                                </div>
                            </div>
                        </td>
                        <td>
                            <form action="{{url('cartDelete',$cart->product_id)}}" method="post">
                                @csrf
                                <button type="submit"><i class="ti-close"></i></button>
                            </form>
                        </td>
                        <td>
                            <h2 class="td-color">Ksh: {{$cart->product->product_price*$cart->quantity}}</h2></td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
                <table class="table cart-table table-responsive-md">
                    <tfoot>
                    <tr>
                        <td>total price :</td>
                        <td>
                            <h2>Ksh: {{$totalSum}}</h2></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-12"><a href="{{url('/')}}" class="btn btn-normal">continue shopping</a> <a href="{{url('checkout')}}" class="btn btn-normal ml-3">check out</a></div>
        </div>
    </div>
</section>
<!--section end-->

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




<!-- latest jquery-->
@include('CPartials.footer1')
@include('CPartials.footer')
