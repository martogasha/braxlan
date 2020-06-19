<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\VendorProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorController extends Controller
{
    public function index(){
        if (Auth::user()->role == 'vendor') {
            return view('Vendor.index');
        }
        else{
            return redirect(url('login'));
        }
    }
    public function productList(){
        if (Auth::check()) {

            $productLists = Product::where('user_id', Auth::user()->id)->get();
            return view('Vendor.productList', [
                'productLists' => $productLists
            ]);
        }
        else{
            return redirect(url('login'));
        }

    }
    public function order(){
        $products = Product::where('user_id',Auth::user()->id)->get();
        foreach ($products as $product){
            $orders = Order::where('product_id',$product->id)->where('order_stats','Order on the Way')->get();
        }
        if (isset($orders))
        return view('Vendor.orders',[
            'orders'=>$orders,
        ]);
    }
    public function transaction(){
        $getProducts = Product::where('user_id',Auth::user()->id)->get();
        foreach ($getProducts as $getProduct) {
            $completeOrders = Order::where('order_stats', 'Delivered')->where('product_id',$getProduct->id)->get();
        }
            return view('Vendor.transaction', [
                'completeOrders' => $completeOrders
            ]);
    }
    public function product(){
        return view('Vendor.addProduct');
    }
    public function addProduct(Request $request){
        $pictures = new VendorProduct();
        $pictures->product_name = $request->input('product_name');
        $pictures->product_desc = $request->input('product_desc');
        $pictures->product_price = $request->input('product_price');
        $pictures->product_category = $request->input('category');

        $pictures->user_id = Auth::user()->id;

        $file = $request->file('product_image');
        $extension = $file->getClientOriginalName();
        $filename = time() . '.' . $extension;
        $file->move('uploads/product/', $filename);
        $pictures->product_image = $filename;

        $file1 = $request->file('product_image1');
        $extension1 = $file1->getClientOriginalName();
        $filename1 = time() . '.' . $extension1;
        $file1->move('uploads/product/', $filename1);
        $pictures->product_image1 = $filename1;

        $file2 = $request->file('product_image2');
        $extension2 = $file2->getClientOriginalName();
        $filename2 = time() . '.' . $extension2;
        $file2->move('uploads/product/', $filename2);
        $pictures->product_image2 = $filename2;

        $file3 = $request->file('product_image3');
        $extension3 = $file3->getClientOriginalName();
        $filename3 = time() . '.' . $extension3;
        $file3->move('uploads/product/', $filename3);
        $pictures->product_image3 = $filename3;



        $pictures->save();


        return redirect()->back()->with('success','Product Added Successfully');


    }
}
