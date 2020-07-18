<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function whisky(){
        $whiskys = Product::where('product_category','whisky')->get();
        $newProducts = Product::where('product_category3','trending')->get();
        return view('customer.whisky',[
            'whiskys'=>$whiskys,
            'newProducts'=>$newProducts
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
        $beers = Product::where('product_category','beer')->get();
        $newProducts = Product::where('product_category3','trending')->get();
        return view('customer.beer',[
            'beers'=>$beers,
            'newProducts'=>$newProducts
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
    public function vodka(){
        $vodkas = Product::where('product_category','vodka')->get();
        $newProducts = Product::where('product_category3','trending')->get();

        return view('customer.vodka',[
            'vodkas'=>$vodkas,
            'newProducts'=>$newProducts
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

    public function gin(){
        $gins = Product::where('product_category','gin')->get();
        $newProducts = Product::where('product_category3','trending')->get();
        return view('customer.gin',[
            'gins'=>$gins,
            'newProducts'=>$newProducts
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
        $rums = Product::where('product_category','rum')->get();
        $newProducts = Product::where('product_category3','trending')->get();
        return view('customer.rum',[
            'rums'=>$rums,
            'newProducts'=>$newProducts
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
        $wines = Product::where('product_category','wines')->get();
        $newProducts = Product::where('product_category3','trending')->get();
        return view('customer.wines',[
            'wines'=>$wines,
            'newProducts'=>$newProducts
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
        $softs = Product::where('product_category','soft')->get();
        $newProducts = Product::where('product_category3','trending')->get();
        return view('customer.soft',[
            'softs'=>$softs,
            'newProducts'=>$newProducts
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
        $extras = Product::where('product_category','extra')->get();
        $newProducts = Product::where('product_category3','trending')->get();
        return view('customer.extra',[
            'extras'=>$extras,
            'newProducts'=>$newProducts
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
        $mostSolds = Product::where('product_category1','mostSold')->get();
        return view('customer.mostSold',[
            'mostSolds'=>$mostSolds
        ]);
    }
    public function under1000(){
        $under1000s = Product::where('product_category2','under1000')->get();
        $newProducts = Product::where('product_category3','trending')->get();
        return view('customer.under1000',[
            'under1000s'=>$under1000s,
            'newProducts'=>$newProducts

        ]);
    }
}
