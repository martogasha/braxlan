<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Product;
use Illuminate\Http\Request;
use Session;

class CategoryController extends Controller
{
    public function whisky(){
        $whiskys = Product::where('product_category','whisky')->inRandomOrder()->get();
        $newProducts = Product::where('product_category3','trending')->inRandomOrder()->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.whisky',[
            'whiskys'=>$whiskys,
            'newProducts'=>$newProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function liqs(){
        $liqs = Product::where('product_category','liq')->inRandomOrder()->get();
        $newProducts = Product::where('product_category3','trending')->inRandomOrder()->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.liqs',[
            'liqs'=>$liqs,
            'newProducts'=>$newProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function tequila(){
        $teqs = Product::where('product_category','tequila')->inRandomOrder()->get();
        $newProducts = Product::where('product_category3','trending')->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.tequila',[
            'teqs'=>$teqs,
            'newProducts'=>$newProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function getWhisky(Request $request){
        if ($request->ajax()){
            $output = "";
            $product = Product::where('id',$request->product)->first();
        }
        $output = '

 <input type="hidden" name="productId" value='.$product->id.' id="productId">
 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="quick-view-img"><img src="uploads/product/'.$product->product_image.'" alt="" class="img-fluid "></div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2>'.$product->product_name.'</h2>
                            <h3>Ksh: '.$product->product_price.'</h3>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>'.$product->product_desc.'</p>
                            </div>
                            <div class="product-description border-product">

                                        <h6 class="product-title">quantity</h6>
                                        <div class="qty-box">
                                            <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                                <input type="text" name="quantity" class="form-control input-number" value="1" id="quantity"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span></div>
                                        </div>
                                    </div>
                            <div class="col-md-12 form-group">
                                        <label for="exampleFormControlSelect1">Size:</label>
                                        <select class="form-control" name="size">
                                           <option value="750ML">750ML Ksh:'.$product->product_price750.'</option>
                                            <option value="1LITRE">1Litre Ksh: '.$product->product_price.'</option>
                                            <option value="375ML">375ML Ksh: '.$product->product_price375.'</option>
                                           <option value="250ML">250ML Ksh: '.$product->product_price250.'</option>
                                            <option value="330ML">330ML Ksh: '.$product->product_price330.'</option>
                                            <option value="350ML">350ML Ksh: '.$product->product_price350.'</option>
                                            <option value="500ML">500ML Ksh: '.$product->product_price500.'</option>
                                            <option value="1.5LITRES">1.5Litres Ksh: '.$product->product_price1500.'</option>
                                            <option value="4.5LITRES">4.5Litres Ksh: '.$product->product_price4500.'</option>
                                            <option value="5LITRES">5Litres Ksh: '.$product->product_price5000.'</option>

                                        </select>
                                    </div>

                        </div>
                    </div>
                </div>
                ';
        return response($output);
    }
    public function beer(){
        $beers = Product::where('product_category','beer')->inRandomOrder()->get();
        $newProducts = Product::where('product_category3','trending')->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.beer',[
            'beers'=>$beers,
            'newProducts'=>$newProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function getBeer(Request $request){
        if ($request->ajax()){
            $output = "";
            $product = Product::where('id',$request->product)->first();
        }
        $output = '

 <input type="hidden" name="productId" value='.$product->id.' id="productId">
 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="quick-view-img"><img src="uploads/product/'.$product->product_image.'" alt="" class="img-fluid "></div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2>'.$product->product_name.'</h2>
                            <h3>Ksh: '.$product->product_price.'</h3>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>'.$product->product_desc.'</p>
                            </div>
                            <div class="product-description border-product">

                                        <h6 class="product-title">quantity</h6>
                                        <div class="qty-box">
                                            <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                                <input type="text" name="quantity" class="form-control input-number" value="1" id="quantity"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span></div>
                                        </div>
                                    </div>
                            <div class="col-md-12 form-group">
                                        <label for="exampleFormControlSelect1">Size:</label>
                                        <select class="form-control" name="size">

                                            <option value="500ML">500ML Ksh: '.$product->product_price500.'</option>
                                            <option value="330ML">330ML Ksh: '.$product->product_price330.'</option>


                                        </select>
                                    </div>

                        </div>
                    </div>
                </div>
                ';
        return response($output);
    }
    public function vodka(){
        $vodkas = Product::where('product_category','vodka')->inRandomOrder()->get();
        $newProducts = Product::where('product_category3','trending')->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.vodka',[
            'vodkas'=>$vodkas,
            'newProducts'=>$newProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function getVodka(Request $request){
        if ($request->ajax()){
            $output = "";
            $product = Product::where('id',$request->product)->first();
        }
        $output = '

 <input type="hidden" name="productId" value='.$product->id.' id="productId">
 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="quick-view-img"><img src="uploads/product/'.$product->product_image.'" alt="" class="img-fluid "></div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2>'.$product->product_name.'</h2>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>'.$product->product_desc.'</p>
                            </div>
                            <div class="product-description border-product">

                                        <h6 class="product-title">quantity</h6>
                                        <div class="qty-box">
                                            <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                                <input type="text" name="quantity" class="form-control input-number" value="1" id="quantity"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span></div>
                                        </div>
                                    </div>
                            <div class="col-md-12 form-group">
                                        <label for="exampleFormControlSelect1">Size:</label>
                                        <select class="form-control" name="size">
                                        @if('.$product->product_price750.')
                                            <option value="750ML">750ML Ksh:'.$product->product_price750.'</option>
                                            @endif
                                            @if(null)
                                            <option value="1L">1Litre Ksh:{{$wine->product_price}}</option>
                                            @endif
                                             @if('.$product->product_price375.')
                                            <option value="375ML">375ML Ksh:'.$product->product_price375.'</option>
                                            @endif
                                             @if('.$product->product_price.')
                                            <option value="250ML">1Litre Ksh:'.$product->product_price.'</option>
                                            @endif
                                           <option value="250ML">250ML Ksh: '.$product->product_price250.'</option>
                                            <option value="330ML">330ML Ksh: '.$product->product_price330.'</option>
                                            <option value="350ML">350ML Ksh: '.$product->product_price350.'</option>
                                            <option value="500ML">500ML Ksh: '.$product->product_price500.'</option>
                                            <option value="1.5LITRES">1.5Litres Ksh: '.$product->product_price1500.'</option>
                                            <option value="4.5LITRES">4.5Litres Ksh: '.$product->product_price4500.'</option>
                                            <option value="5LITRES">5Litres Ksh: '.$product->product_price5000.'</option>

                                        </select>
                                    </div>

                        </div>
                    </div>
                </div>
                ';
        return response($output);
    }

    public function gin(){
        $gins = Product::where('product_category','gin')->inRandomOrder()->get();
        $newProducts = Product::where('product_category3','trending')->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.gin',[
            'gins'=>$gins,
            'newProducts'=>$newProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function brandy(){
        $brandys = Product::where('product_category','brandy')->inRandomOrder()->get();
        $newProducts = Product::where('product_category3','trending')->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.brandy',[
            'brandys'=>$brandys,
            'newProducts'=>$newProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function getGin(Request $request){
        if ($request->ajax()){
            $output = "";
            $product = Product::where('id',$request->product)->first();
        }
        $output = '

 <input type="hidden" name="productId" value='.$product->id.' id="productId">
 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="quick-view-img"><img src="uploads/product/'.$product->product_image.'" alt="" class="img-fluid "></div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2>'.$product->product_name.'</h2>
                            <h3>Ksh: '.$product->product_price.'</h3>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>'.$product->product_desc.'</p>
                            </div>
                            <div class="product-description border-product">

                                        <h6 class="product-title">quantity</h6>
                                        <div class="qty-box">
                                            <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                                <input type="text" name="quantity" class="form-control input-number" value="1" id="quantity"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span></div>
                                        </div>
                                    </div>
                            <div class="col-md-12 form-group">
                                        <label for="exampleFormControlSelect1">Size:</label>
                                        <select class="form-control" name="size">
                                            <option value="1LITRE">1Litre Ksh: '.$product->product_price.'</option>
                                            <option value="750ML">750ML Ksh: '.$product->product_price750.'</option>
                                            <option value="375ML">375ML Ksh: '.$product->product_price375.'</option>
                                            <option value="250ML">250ML Ksh: '.$product->product_price250.'</option>

                                        </select>
                                    </div>

                        </div>
                    </div>
                </div>
                ';
        return response($output);
    }
    public function rum(){
        $rums = Product::where('product_category','rum')->inRandomOrder()->get();
        $newProducts = Product::where('product_category3','trending')->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.rum',[
            'rums'=>$rums,
            'newProducts'=>$newProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function getRum(Request $request){
        if ($request->ajax()){
            $output = "";
            $product = Product::where('id',$request->product)->first();
        }
        $output = '

 <input type="hidden" name="productId" value='.$product->id.' id="productId">
 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="quick-view-img"><img src="uploads/product/'.$product->product_image.'" alt="" class="img-fluid "></div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2>'.$product->product_name.'</h2>
                            <h3>Ksh: '.$product->product_price.'</h3>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>'.$product->product_desc.'</p>
                            </div>
                            <div class="product-description border-product">

                                        <h6 class="product-title">quantity</h6>
                                        <div class="qty-box">
                                            <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                                <input type="text" name="quantity" class="form-control input-number" value="1" id="quantity"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span></div>
                                        </div>
                                    </div>
                            <div class="col-md-12 form-group">
                                        <label for="exampleFormControlSelect1">Size:</label>
                                        <select class="form-control" name="size">
                                            <option value="1LITRE">1Litre Ksh: '.$product->product_price.'</option>
                                            <option value="750ML">750ML Ksh: '.$product->product_price750.'</option>
                                            <option value="375ML">375ML Ksh: '.$product->product_price375.'</option>
                                            <option value="250ML">250ML Ksh: '.$product->product_price250.'</option>

                                        </select>
                                    </div>

                        </div>
                    </div>
                </div>
                ';
        return response($output);
    }

    public function wine(){
        $wines = Product::where('product_category','wines')->inRandomOrder()->get();
        $newProducts = Product::where('product_category3','trending')->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.wines',[
            'wines'=>$wines,
            'newProducts'=>$newProducts,
             'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function getWine(Request $request){
        if ($request->ajax()){
            $output = "";
            $product = Product::where('id',$request->product)->first();
        }
        $output = '

 <input type="hidden" name="productId" value='.$product->id.' id="productId">
 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="quick-view-img"><img src="uploads/product/'.$product->product_image.'" alt="" class="img-fluid "></div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2>'.$product->product_name.'</h2>
                            <h3>Ksh: '.$product->product_price.'</h3>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>'.$product->product_desc.'</p>
                            </div>
                            <div class="product-description border-product">

                                        <h6 class="product-title">quantity</h6>
                                        <div class="qty-box">
                                            <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                                <input type="text" name="quantity" class="form-control input-number" value="1" id="quantity"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span></div>
                                        </div>
                                    </div>
                            <div class="col-md-12 form-group">
                                        <label for="exampleFormControlSelect1">Size:</label>
                                        <select class="form-control" name="size">
                                            <option value="750ML">750ML Ksh:'.$product->product_price750.'</option>
                                            <option value="1LITRE">1Litre Ksh: '.$product->product_price.'</option>
                                            <option value="375ML">375ML Ksh: '.$product->product_price375.'</option>
                                           <option value="250ML">250ML Ksh: '.$product->product_price250.'</option>
                                            <option value="330ML">330ML Ksh: '.$product->product_price330.'</option>
                                            <option value="350ML">350ML Ksh: '.$product->product_price350.'</option>
                                            <option value="500ML">500ML Ksh: '.$product->product_price500.'</option>
                                            <option value="1.5LITRES">1.5Litres Ksh: '.$product->product_price1500.'</option>
                                            <option value="4.5LITRES">4.5Litres Ksh: '.$product->product_price4500.'</option>
                                            <option value="5LITRES">5Litres Ksh: '.$product->product_price5000.'</option>

                                        </select>
                                    </div>

                        </div>
                    </div>
                </div>
                ';
        return response($output);
    }

    public function soft(){
        $softs = Product::where('product_category','soft')->inRandomOrder()->get();
        $newProducts = Product::where('product_category3','trending')->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.soft',[
            'softs'=>$softs,
            'newProducts'=>$newProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function getSoft(Request $request){
        if ($request->ajax()){
            $output = "";
            $product = Product::where('id',$request->product)->first();
        }
        $output = '

 <input type="hidden" name="productId" value='.$product->id.' id="productId">
 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="quick-view-img"><img src="uploads/product/'.$product->product_image.'" alt="" class="img-fluid "></div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2>'.$product->product_name.'</h2>
                            <h3>Ksh: '.$product->product_price.'</h3>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>'.$product->product_desc.'</p>
                            </div>
                            <div class="product-description border-product">

                                        <h6 class="product-title">quantity</h6>
                                        <div class="qty-box">
                                            <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                                <input type="text" name="quantity" class="form-control input-number" value="1" id="quantity"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span></div>
                                        </div>
                                    </div>
                            <div class="col-md-12 form-group">
                                        <label for="exampleFormControlSelect1">Size:</label>
                                        <select class="form-control" name="size">
                                            <option value="750ML">750ML Ksh:'.$product->product_price750.'</option>
                                            <option value="1LITRE">1Litre Ksh: '.$product->product_price.'</option>
                                            <option value="375ML">375ML Ksh: '.$product->product_price375.'</option>
                                           <option value="250ML">250ML Ksh: '.$product->product_price250.'</option>
                                            <option value="330ML">330ML Ksh: '.$product->product_price330.'</option>
                                            <option value="350ML">350ML Ksh: '.$product->product_price350.'</option>
                                            <option value="500ML">500ML Ksh: '.$product->product_price500.'</option>
                                            <option value="1.5LITRES">1.5Litres Ksh: '.$product->product_price1500.'</option>
                                            <option value="4.5LITRES">4.5Litres Ksh: '.$product->product_price4500.'</option>
                                            <option value="5LITRES">5Litres Ksh: '.$product->product_price5000.'</option>

                                        </select>
                                    </div>

                        </div>
                    </div>
                </div>
                ';
        return response($output);
    }

    public function extra(){
        $extras = Product::where('product_category','extra')->inRandomOrder()->get();
        $newProducts = Product::where('product_category3','trending')->inRandomOrder()->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.extra',[
            'extras'=>$extras,
            'newProducts'=>$newProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function getExtra(Request $request){
        if ($request->ajax()){
            $output = "";
            $product = Product::where('id',$request->product)->first();
        }
        $output = '

 <input type="hidden" name="productId" value='.$product->id.' id="productId">
 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="quick-view-img"><img src="uploads/product/'.$product->product_image.'" alt="" class="img-fluid "></div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2>'.$product->product_name.'</h2>
                            <h3>Ksh: '.$product->product_price.'</h3>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>'.$product->product_desc.'</p>
                            </div>
                            <div class="product-description border-product">

                                        <h6 class="product-title">quantity</h6>
                                        <div class="qty-box">
                                            <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                                <input type="text" name="quantity" class="form-control input-number" value="1" id="quantity"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span></div>
                                        </div>
                                    </div>
                            <div class="col-md-12 form-group">
                                        <label for="exampleFormControlSelect1">Size:</label>
                                        <select class="form-control" name="size">
                                            <option value="1LITRE">1Litre Ksh: '.$product->product_price.'</option>
                                            <option value="750ML">750ML Ksh: '.$product->product_price750.'</option>
                                            <option value="375ML">375ML Ksh: '.$product->product_price375.'</option>
                                            <option value="250ML">250ML Ksh: '.$product->product_price250.'</option>

                                        </select>
                                    </div>

                        </div>
                    </div>
                </div>
                ';
        return response($output);
    }


    public function mostSold(){
        $mostSolds = Product::where('product_category1','mostSold')->inRandomOrder()->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.mostSold',[
            'mostSolds'=>$mostSolds,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function under1000(){
        $under1000s = Product::where('product_price','<',1000)->where('product_category','!=','soft')->inRandomOrder()->get();
        $newProducts = Product::where('product_category3','trending')->inRandomOrder()->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.under1000',[
            'under1000s'=>$under1000s,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice,
            'newProducts'=>$newProducts

        ]);
    }
}
