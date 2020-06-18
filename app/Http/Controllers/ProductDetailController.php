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
        return view('customer.productDetail',[
            'productDetail'=>$productDetail
        ]);

    }
}
