<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Product;
use Illuminate\Http\Request;
use Session;

class ProductDetailController extends Controller
{
    public function index(){
        return view('customer.productDetail');
    }
    public function show($id){
        $productDetail = Product::where('id',$id)->first();
        $newProducts = Product::where('product_category3','trending')->get();
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.productDetail',[
            'productDetail'=>$productDetail,
            'newProducts'=>$newProducts,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);

    }
}
