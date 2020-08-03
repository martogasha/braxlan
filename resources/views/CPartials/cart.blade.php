<div id="cart_side" class=" add_to_cart top">
    <a href="javascript:void(0)" class="overlay" onclick="closeCart()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my cart</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeCart()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="cart_media">
            <ul class="cart_product">
                @if(isset($products))
                @foreach($products as $product)
                <li>
                    <div class="media">
                        <a href="#">
                            <img alt="" class="mr-3" src="{{asset('uploads/product/'.$product['item']['product_image'])}}">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>{{$product['item']['product_name']}}</h4>
                            </a>
                            <h4>
                                <span>{{$product['quantity']}} x Ksh: {{$product['item']['product_price']}}</span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="{{url('cartReduceByOne',$product['item']['id'])}}">
                            <i class="ti-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                @endforeach

            </ul>
            <ul class="cart_total">
                <li>
                    <div class="total">
                        <h5>subtotal : <span>Ksh:{{$totalPrice}}</span></h5>
                    </div>
                </li>
                <li>
                    <div class="buttons">
                        <a href="{{url('cart')}}" class="btn btn-normal btn-xs view-cart">view cart</a>
                        <a href="{{url('checkout')}}" class="btn btn-normal btn-xs checkout">checkout</a>
                    </div>
                </li>
            </ul>
            @else
                <h3>Cart is Empty</h3>
            @endif
        </div>
    </div>
</div>
