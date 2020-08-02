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
                    @if(\Illuminate\Support\Facades\Session::has('cat'))
                    @foreach($products as $product)
                    <tbody>
                    <tr>
                        <td>
                            <a href="#"><img src="{{asset('uploads/product/'.$product['item']['product_image'])}}" alt="cart" class=" "></a>
                        </td>
                        <td><a href="#">{{$product['item']['product_name']}}</a>
                            <div class="mobile-cart-content row">
                                <div class="col-xs-3">
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity" class="form-control input-number" value="{{$product['quantity']}}">
                                        </div>
                                    </div>
                                </div>

                                    <h2 class="td-color">Ksh: {{$product['item']['product_price']*$product['quantity']}} </h2>

                                    <div class="col-xs-3">
                                    <form action="" method="post">
                                        <input type="hidden" name="size" value="">
                                        @csrf
                                        <button type="submit"><i class="ti-close"></i></button>
                                    </form>
                                </div>

                        <td>

                        <h2>Ksh: {{$product['item']['product_price']}}</h2>

                        </td>
                        <td>
                            <h2>{{$product['quantity']}}</h2>
                        </td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="size" value="">
                                @csrf
                                <button type="submit"><i class="ti-close"></i></button>
                            </form>
                        </td>
                        <td>

                                <h2 class="td-color">Ksh: {{$product['item']['product_price']*$product['quantity']}}</h2>

                    </tr>
                    </tbody>
                    @endforeach
                        @endif
                </table>
                <table class="table cart-table table-responsive-md">
                    <tfoot>
                    <tr>
                        <td>total price :</td>
                        <td>
                            <h2>Ksh: {{$totalPrice}}</h2></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-12"><a href="{{url('/')}}" class="btn btn-normal">continue shopping</a> <a href="{{url('checkout')}}" class="btn btn-normal ml-3">checkout</a></div>
        </div>
    </div>
</section>
<!--section end-->

@include('CPartials.settings')




<!-- latest jquery-->
@include('CPartials.footer1')
@include('CPartials.footer')


