<?php

namespace App\Http\Controllers;

use App\Poster;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\Promise\all;

class ProductController extends Controller
{
    public function index()
    {
            $whiskys = Product::where('product_category', 'whisky')->get();
            $beers = Product::where('product_category', 'beer')->get();
            $vodkas = Product::where('product_category', 'vodka')->get();
            $gins = Product::where('product_category', 'gin')->get();
            $rums = Product::where('product_category', 'RUM')->get();
            $wines = Product::where('product_category', 'wines')->get();
            $softs = Product::where('product_category', 'soft')->get();
            $extras = Product::where('product_category', 'extra')->get();
            $mostSolds = Product::where('product_category1', 'mostSold')->get();
            $under1000s = Product::where('product_category2', 'under1000')->get();
            $poster = Poster::where('poster_category', 'first')->first();
            $poster2 = Poster::where('poster_category', 'second')->first();
            $poster3 = Poster::where('poster_category', 'third')->first();

            return view('customer.index', [
                'whiskys' => $whiskys,
                'beers' => $beers,
                'vodkas' => $vodkas,
                'gins' => $gins,
                'rums' => $rums,
                'wines' => $wines,
                'softs' => $softs,
                'extras' => $extras,
                'mostSolds' => $mostSolds,
                'under1000s' => $under1000s,
                'poster' => $poster,
                'poster2' => $poster2,
                'poster3' => $poster3
            ]);
    }

    public function shopping(){
        return view('customer.shop');
    }
    public function shop(Request $request){
        $search = $request->input('searchProduct');
        $searchProducts = Product::where('product_name','like',"%$search%")->get();
        $newProducts = Product::where('product_category3','trending')->get();


        return view('customer.shop',[
            'searchProducts'=>$searchProducts,
            'newProducts'=>$newProducts,


        ]);
    }
    public function shopDetails(Request $request){
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

    public function store(Request $request){
        $pictures = new Product();
        $pictures->product_name = $request->input('product_name');
        $pictures->product_desc = $request->input('product_desc');
        $pictures->product_price1500 = $request->input('product_price1500');
        $pictures->product_price5000 = $request->input('product_price5000');
        $pictures->product_price4500 = $request->input('product_price4500');
        $pictures->product_price = $request->input('product_price');
        $pictures->product_price750 = $request->input('product_price750');
        $pictures->product_price500 = $request->input('product_price500');
        $pictures->product_price375 = $request->input('product_price375');
        $pictures->product_price350 = $request->input('product_price350');
        $pictures->product_price330 = $request->input('product_price330');
        $pictures->product_price250 = $request->input('product_price250');
        $pictures->product_category = $request->input('category');
        $pictures->product_category1 = $request->input('category1');
        $pictures->product_category2 = $request->input('category2');
        $pictures->product_category3 = $request->input('category3');
        $pictures->product_category4 = $request->input('category4');



        $pictures->product_status = 0;


        $pictures->user_id = Auth::user()->id;

        if ($request->product_image) {
            $file = $request->file('product_image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $pictures->product_image = $filename;
        }
        if ($request->product_image1) {
            $file1 = $request->file('product_image1');
            $extension1 = $file1->getClientOriginalName();
            $filename1 = time() . '.' . $extension1;
            $file1->move('uploads/product/', $filename1);
            $pictures->product_image1 = $filename1;
        }
        if ($request->product_image2) {

            $file2 = $request->file('product_image2');
            $extension2 = $file2->getClientOriginalName();
            $filename2 = time() . '.' . $extension2;
            $file2->move('uploads/product/', $filename2);
            $pictures->product_image2 = $filename2;
        }
        if ($request->product_image3) {

            $file3 = $request->file('product_image3');
            $extension3 = $file3->getClientOriginalName();
            $filename3 = time() . '.' . $extension3;
            $file3->move('uploads/product/', $filename3);
            $pictures->product_image3 = $filename3;
        }



        $pictures->save();


        return redirect()->back()->with('success','Product Added Successfully');


    }
    public function getCProduct(Request $request){
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
    public function deleteProduct(Request $request){
        $deleteProduct = Product::where('id',$request->productId)->delete();
        return redirect()->back()->with('success','Product Deleted Successfully');

    }
    public function edit(Request $request){
        $ppp = Product::where('id',$request->productId)->first();
        if ($ppp->product_status ==1) {
            $deleteP = Product::where('id', $request->productId)->update(['product_status' => 0]);
        }
        else {
            $deleteProduct = Product::where('id', $request->productId)->update(['product_status' => 1]);
        }

        return redirect()->back()->with('success','Product Edited Successfully');
    }
    public function eProduct(Request $request){
        $edit = Product::find($request->prodId);
        if ($request->product_image) {
            $file = $request->file('product_image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $edit->product_image = $filename;
        }
        $edit->product_name = $request->product_name;
        $edit->product_desc = $request->product_desc;
        $edit->product_price1500 = $request->input('product_price1500');
        $edit->product_price5000 = $request->input('product_price5000');
        $edit->product_price4500 = $request->input('product_price4500');
        $edit->product_price = $request->input('product_price');
        $edit->product_price750 = $request->input('product_price750');
        $edit->product_price500 = $request->input('product_price500');
        $edit->product_price375 = $request->input('product_price375');
        $edit->product_price350 = $request->input('product_price350');
        $edit->product_price330 = $request->input('product_price330');
        $edit->product_price250 = $request->input('product_price250');
        $edit->product_category = $request->category;
        $edit->product_category1 = $request->category1;
        $edit->product_category2 = $request->category2;
        $edit->product_category3 = $request->category3;


        $edit->save();

        return redirect(url('productList'))->with('success','Product Updated Successfully');

    }
    public function editProductDetails($id){
        $getProduct = Product::find($id);
        return view('admin.editProduct',[
            'getProduct'=>$getProduct
        ]);
    }
}
