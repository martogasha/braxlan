<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class ProductController extends Controller
{
    public function index(){
        $supermarkets = Product::where('product_category','supermarket')->get();
        $safteys = Product::where('product_category','saftey')->get();
        $kitchens = Product::where('product_category','kitchen')->get();
        $drinks = Product::where('product_category','drinks')->get();

        return view('customer.index',[
            'supermarkets'=>$supermarkets,
            'safteys'=>$safteys,
            'kitchens'=>$kitchens,
            'drinks'=>$drinks
        ]);
    }

    public function store(Request $request){
        $pictures = new Product();
        $pictures->product_name = $request->input('product_name');
        $pictures->product_desc = $request->input('product_desc');
        $pictures->product_price = $request->input('product_price');
        $pictures->product_category = $request->input('category');

        $pictures->user_id = 1;

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
