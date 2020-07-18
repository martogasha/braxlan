<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\VendorProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin(){
        if (Auth::check()) {
            return view('admin.index');
        }
        else{
            return redirect(url('login'));
        }
    }
    public function productList(){
        if (Auth::user()->role == 'admin') {
            $productLists = Product::all();
            return view('admin.productList', [
                'productLists' => $productLists
            ]);
        }
        else{
            return redirect(url('login'));
        }
    }
    public function getProductList(Request $request){
        if (Auth::user()->role == 'admin') {

            if ($request->ajax()) {
                $output = "";
                $getProductList = Product::where('id', $request->product)->first();
            }
            $output = '
<input type="hidden" name="productId" value='.$getProductList->id.'>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="quick-view-img"><img src="uploads/product/' . $getProductList->product_image . '" alt="" class="img-fluid "></div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2>' . $getProductList->product_name . '</h2>
                            <h3>Ksh: ' . $getProductList->product_price . '</h3>

                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>' . $getProductList->product_desc . '</p>
                            </div>
                            <div class="product-description border-product">
                                <h6 class="product-title">Vendor</h6>
                              <p>' . $getProductList->user->name . '</p>
                            </div>
                        </div>
                    </div>
                </div>
                ';
            return response($output);
        }
        else{
            return redirect(url('login'));
        }

    }
    public function vendorProduct(){
        $productLists = VendorProduct::all();
        return view('admin.vendorProduct',[
            'productLists'=>$productLists
        ]);
    }
    public function getVendorProduct(Request $request){
        if ($request->ajax()){
            $output = "";
            $getProduct = VendorProduct::where('id',$request->product)->first();
        }
        $output='<input type="hidden" name="userId" value='.$getProduct->user_id.'>
<input type="hidden" name="userId" value='.$getProduct->user_id.'>
<input type="hidden" name="productId" value='.$getProduct->id.'>
<input type="hidden" name="product_name" value='.$getProduct->product_name.'>
<input type="hidden" name="product_desc" value='.$getProduct->product_desc.'>
<input type="hidden" name="product_price" value='.$getProduct->product_price.'>
<input type="hidden" name="category" value='.$getProduct->product_category.'>
<input type="hidden" name="product_image" value='.$getProduct->product_image.'>
<input type="hidden" name="product_image1" value='.$getProduct->product_image1.'>
<input type="hidden" name="product_image2" value='.$getProduct->product_image2.'>
<input type="hidden" name="product_image3" value='.$getProduct->product_image3.'>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="quick-view-img"><img src="uploads/product/'.$getProduct->product_image.'" alt="" class="img-fluid "></div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2>'.$getProduct->product_name.'</h2>
                            <h3>Ksh: '.$getProduct->product_price.'</h3>

                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>'.$getProduct->product_desc.'</p>
                            </div>
                            <div class="product-description border-product">

                                <h6 class="product-title">Vendor</h6>
                                <p>'.$getProduct->user->name.'</p>
                            </div>
                        </div>
                    </div>
                </div>
';
        return response($output);
    }
    public function transferVendorProduct(Request $request){
            $pictures = new Product();
            $pictures->product_name = $request->input('product_name');
            $pictures->product_desc = $request->input('product_desc');
            $pictures->product_price = $request->input('product_price');
            $pictures->product_category = $request->input('category');

            $pictures->user_id = $request->input('userId');

            $pictures->product_image = $request->input('product_image');
            $pictures->product_image1 = $request->input('product_image1');
            $pictures->product_image2 = $request->input('product_image2');
            $pictures->product_image3 = $request->input('product_image3');



            $pictures->save();

            $deleteVproduct = VendorProduct::where('id',$request->productId)->delete();


            return redirect()->back()->with('success','Product Added Live Successfully');

        }
}
