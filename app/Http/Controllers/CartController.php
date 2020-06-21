<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Checkout;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        if (Auth::check()){
        $carts = Cart::where('user_id',Auth::user()->id)->get();
        $cartTotals = Cart::where('user_id',Auth::user()->id)->get();
        $totalSum=0;
            foreach ($cartTotals as $cartTotal) {
                $sum = $cartTotal->product->product_price;
                $quant = $cartTotal->quantity;

                $total = $sum * $quant;
                $totalSum += $total;

            }
        }
        else{
            return redirect(url('login'));
        }


        return view('customer.cart',[
            'carts'=>$carts,
            'totalSum'=>$totalSum
        ]);
    }
    public function store(Request $request){
        if (Auth::check()){
            $getProductId =Cart::where('product_id',$request->productId)->where('user_id',Auth::user()->id)->first();
            if (isset($getProductId)){
            $productId = $getProductId->product_id;
                $getQuantity = Cart::where('user_id',Auth::user()->id)->where('product_id',$request->productId)->first();
                $quantity = $getQuantity->quantity;
                $updateQuantity = $quantity + $request->quantity;
            $updateCart = Cart::where('user_id',Auth::user()->id)->where('product_id',$request->productId)->update(['quantity'=>($updateQuantity)]);
            $updateCart = Checkout::where('user_id',Auth::user()->id)->where('product_id',$request->productId)->update(['quantity'=>($updateQuantity)]);

                return redirect(url('cart'))->with('success', 'Item Added to Cart Successfully');


            }
            else {
                $addCart = Cart::create([
                    'product_id' => $request->input('productId'),
                    'quantity' => $request->input('quantity'),
                    'user_id' => Auth::user()->id,
                ]);
                $addCart = Checkout::create([
                    'product_id' => $request->input('productId'),
                    'quantity' => $request->input('quantity'),
                    'user_id' => Auth::user()->id,
                ]);
                return redirect(url('cart'))->with('success', 'Item Added to Cart Successfully');
            }
        }
        else{
            return redirect(url('login'));
        }


    }
    public function delete($id){
        $deleteCart = Cart::where('product_id',$id)->where('user_id',Auth::user()->id)->delete();
        $deleteCheckout = Checkout::where('product_id',$id)->where('user_id',Auth::user()->id)->delete();


        return redirect()->back()->with('success','Item Removed From Cart');
    }
}
