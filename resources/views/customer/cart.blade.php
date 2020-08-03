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
                        <th></th>
                        <th scope="col">image</th>
                        <th scope="col">product name</th>
                        <th scope="col">price</th>
                        <th scope="col">quantity</th>
                        <th scope="col">action</th>
                        <th scope="col">total</th>
                    </tr>
                    </thead>
                    @if(isset($products))
                    @foreach($products as $product)
                    <tbody>
                    <tr>
                        <td><a href="{{url('cartRemove',$product['item']['id'])}}"><button class="btn btn-danger">Remove</button></a></td>
                        <td>
                            <a href="#"><img src="{{asset('uploads/product/'.$product['item']['product_image'])}}" alt="cart"  class=" "></a>
                        </td>
                        <td><a href="#">cotton shirt</a>
                            <div class="mobile-cart-content row">
                                <div class="col-xs-3">
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="text" name="quantity" class="form-control input-number" value="{{$product['quantity']}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <h2 class="td-color">Ksh: {{$product['item']['product_price']*$product['quantity']}}</h2></div>
                                <div class="col-xs-3">
                                    <h2 class="td-color"><a href="#" class="icon"><i class="ti-close"></i></a></h2></div>
                            </div>
                        </td>
                        <td>
                            <h2>Ksh: {{$product['item']['product_price']}}</h2></td>
                        <td>
                            <div class="qty-box">
                                <div class="input-group">
                                    <input type="number" name="quantity" class="form-control input-number" value="{{$product['quantity']}}">
                                </div>
                            </div>
                        </td>
                        <td><a href="{{url('cartReduceByOne',$product['item']['id'])}}" class="icon"><i class="ti-close"></i></a></td>
                        <td>
                            <h2 class="td-color">Ksh: {{$product['item']['product_price']*$product['quantity']}}</h2></td>
                    </tr>
                    </tbody>
                    @endforeach

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
    @else
        <div class="container-fluid mt-100">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Cart</h5>
                        </div>
                        <div class="card-body cart">
                            <div class="col-sm-12 empty-cart-cls text-center"> <img src="https://i.imgur.com/dCdflKN.png" width="130" height="130" class="img-fluid mb-4 mr-3">
                                <h3><strong>Your Cart is Empty</strong></h3>
                                <h4>Add something</h4> <a href="{{url('/')}}" class="btn btn-primary cart-btn-transform m-3" data-abc="true">continue shopping</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</section>
<!--section end-->


@include('CPartials.settings')




<!-- latest jquery-->
@include('CPartials.footer1')
@include('CPartials.footer')


