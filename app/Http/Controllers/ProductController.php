<?php

namespace App\Http\Controllers;

use App\Poster;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\Promise\all;

class ProductController extends Controller
{
    public function index(){
        $supermarkets = Product::where('product_category','supermarket')->get();
        $safteys = Product::where('product_category','saftey')->get();
        $kitchens = Product::where('product_category','kitchen')->get();
        $drinks = Product::where('product_category','drinks')->get();
        $poster = Poster::where('poster_category','first')->first();
        $poster2 = Poster::where('poster_category','second')->first();
        $poster3 = Poster::where('poster_category','third')->first();

        return view('customer.index',[
            'supermarkets'=>$supermarkets,
            'safteys'=>$safteys,
            'kitchens'=>$kitchens,
            'drinks'=>$drinks,
            'poster'=>$poster,
            'poster2'=>$poster2,
            'poster3'=>$poster3
        ]);
    }

    public function store(Request $request){
        $pictures = new Product();
        $pictures->product_name = $request->input('product_name');
        $pictures->product_desc = $request->input('product_desc');
        $pictures->product_price = $request->input('product_price');
        $pictures->product_category = $request->input('category');

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

 <input type="hidden" name="productId" value="4" id="productId">
  <input type="hidden" name="quantity" value="1" id="quantity">
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
}
