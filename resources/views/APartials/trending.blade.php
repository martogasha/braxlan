<div class="theme-card creative-card creative-inner">
    <h5 class="title-border">Trending product</h5>
    <div class="offer-slider slide-1">
        <div>
            @foreach($newProducts as $newProduct)
                <a href="{{url('productDetail',$newProduct->id)}}">
                <div class="media">
                    <a href="{{url('productDetail',$newProduct->id)}}"><img class="img-fluid " src="{{asset('uploads/product/'.$newProduct->product_image)}}" alt=""></a>
                    <div class="media-body align-self-center">
                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div><a href="product-page(no-sidebar).html"><h6>{{$newProduct->product_name}}</h6></a>
                        <h4>Ksh: {{$newProduct->product_price}}</h4></div>
                </div>
                </a>
            @endforeach

        </div>
    </div>
</div>
