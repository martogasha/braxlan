<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index(){
        return view('customer.productDetail');
    }
    public function show($id){
        $productDetail = Product::where('id',$id)->first();
        $newProducts = Product::where('product_category3','trending')->get();
        return view('customer.productDetail',[
            'productDetail'=>$productDetail,
            'newProducts'=>$newProducts
        ]);

    }
}
