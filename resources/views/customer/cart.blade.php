@include('CPartials.header')
<title>Cart</title>
@include('flash-message')
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
                            <a href="#"><img src="{{asset('uploads/product/'.$cart->product->product_image)}}" alt="cart"  class=" "></a>
                        </td>
                        <td><a href="#">{{$cart->product->product_name}}</a>
                            <div class="mobile-cart-content row">
                                <div class="col-xs-3">
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="text" name="quantity" class="form-control input-number" value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                <div class="col-xs-3">
                                    <h2 class="td-color"><a href="#" class="icon"><i class="ti-close"></i></a></h2></div>
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
                        <form action="{{url('cartDelete',$cart->id)}}" method="post" id="deleteCart">
                            @csrf
                        <td><a href="javascript:document.getElementById('deleteCart').submit();" class="icon"><i class="ti-close"></i></a></td>
                        </form>
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
                            <h2>Ksh :{{$totalSum}}</h2></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <form action="{{route('checkout.store')}}" method="post" id="checkout">
            @csrf
        <div class="row cart-buttons">
            <div class="col-12"><a href="#" class="btn btn-normal">continue shopping</a> <a href="javascript:document.getElementById('checkout').submit();" class="btn btn-normal ml-3">check out</a></div>
        </div>
        </form>
    </div>
</section>
<!--section end-->
@include('CPartials.footer1')
@include('CPartials.footer')
