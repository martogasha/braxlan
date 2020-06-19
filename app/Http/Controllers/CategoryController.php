<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function supermarket(){
        $supermarkets = Product::where('product_category','supermarket')->get();
        return view('customer.supermarket',[
            'supermarkets'=>$supermarkets
        ]);
    }
    public function homestead(){
        $kitchens = Product::where('product_category','kitchen')->get();
        return view('customer.kitchen',[
            'kitchens'=>$kitchens
        ]);
    }
    public function saftey(){
        $safteys = Product::where('product_category','saftey')->get();
        return view('customer.saftey',[
            'safteys'=>$safteys
        ]);
    }
    public function drinks(){
        $drinks = Product::where('product_category','drinks')->get();
        return view('customer.drinks',[
            'drinks'=>$drinks
        ]);
    }
}
