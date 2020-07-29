<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Checkout;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\UserSystemInfoHelper;

class CartController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $carts = Cart::where('user_id', Auth::user()->id)->get();
            $cartTotals = Cart::where('user_id', Auth::user()->id)->get();
            $totalSum = 0;
            foreach ($cartTotals as $cartTotal) {
                switch ($cartTotal) {
                    case($cartTotal->size == '1LITRE'):
                        $sum = $cartTotal->product->product_price;
                        $quant = $cartTotal->quantity;

                        $total = $sum * $quant;
                        $totalSum += $total;
                        break;
                    case ($cartTotal->size == '750ML'):
                        $sum = $cartTotal->product->product_price750;
                        $quant = $cartTotal->quantity;

                        $total = $sum * $quant;
                        $totalSum += $total;
                        break;
                    case ($cartTotal->size == '375ML'):
                        $sum = $cartTotal->product->product_price375;
                        $quant = $cartTotal->quantity;

                        $total = $sum * $quant;
                        $totalSum += $total;
                        break;
                    case ($cartTotal->size == '250ML'):
                        $sum = $cartTotal->product->product_price250;
                        $quant = $cartTotal->quantity;

                        $total = $sum * $quant;
                        $totalSum += $total;
                        break;
                }

            }
        }

        else{
            $getIp = UserSystemInfoHelper::get_ip();

            $carts = Cart::where('ip',$getIp)->get();
            $cartTotals = Cart::where('ip',$getIp)->get();
            $totalSum=0;
            foreach ($cartTotals as $cartTotal) {
                switch ($cartTotal){
                    case($cartTotal->size=='5LITRES'):
                        $sum = $cartTotal->product->product_price5000;
                        $quant = $cartTotal->quantity;

                        $total = $sum * $quant;
                        $totalSum += $total;
                        break;
                    case($cartTotal->size=='4.5LITRES'):
                        $sum = $cartTotal->product->product_price4500;
                        $quant = $cartTotal->quantity;

                        $total = $sum * $quant;
                        $totalSum += $total;
                        break;
                    case($cartTotal->size=='1.5LITRES'):
                        $sum = $cartTotal->product->product_price1500;
                        $quant = $cartTotal->quantity;

                        $total = $sum * $quant;
                        $totalSum += $total;
                        break;
                    case($cartTotal->size=='1LITRE'):
                        $sum = $cartTotal->product->product_price;
                        $quant = $cartTotal->quantity;

                        $total = $sum * $quant;
                        $totalSum += $total;
                        break;
                    case ($cartTotal->size=='750ML'):
                        $sum = $cartTotal->product->product_price750;
                        $quant = $cartTotal->quantity;

                        $total = $sum * $quant;
                        $totalSum += $total;
                        break;
                    case ($cartTotal->size=='500ML'):
                        $sum = $cartTotal->product->product_price500;
                        $quant = $cartTotal->quantity;

                        $total = $sum * $quant;
                        $totalSum += $total;
                        break;
                    case ($cartTotal->size=='375ML'):
                        $sum = $cartTotal->product->product_price375;
                        $quant = $cartTotal->quantity;

                        $total = $sum * $quant;
                        $totalSum += $total;
                        break;
                    case ($cartTotal->size=='350ML'):
                        $sum = $cartTotal->product->product_price350;
                        $quant = $cartTotal->quantity;

                        $total = $sum * $quant;
                        $totalSum += $total;
                        break;
                    case ($cartTotal->size=='330ML'):
                        $sum = $cartTotal->product->product_price330;
                        $quant = $cartTotal->quantity;

                        $total = $sum * $quant;
                        $totalSum += $total;
                        break;
                    case ($cartTotal->size=='250ML'):
                        $sum = $cartTotal->product->product_price250;
                        $quant = $cartTotal->quantity;

                        $total = $sum * $quant;
                        $totalSum += $total;
                        break;
                }

            }
        }


        return view('customer.cart',[
            'carts'=>$carts,
            'totalSum'=>$totalSum
        ]);
    }
    public function header(){
        $getIp = UserSystemInfoHelper::get_ip();
        $count = Cart::where('ip',$getIp)->count();
        return view('CPartials.header',[
            'count'=>$count
        ]);
    }
    public function store(Request $request){
        if (Auth::check()){
            $getProductId =Cart::where('product_id',$request->productId)->where('user_id',Auth::user()->id)->where('size',$request->size)->first();
            if (isset($getProductId)){
            $productId = $getProductId->product_id;
                $getQuantity = Cart::where('user_id',Auth::user()->id)->where('product_id',$request->productId)->first();
                $quantity = $getQuantity->quantity;
                $updateQuantity = $quantity + $request->quantity;
            $updateCart = Cart::where('user_id',Auth::user()->id)->where('product_id',$request->productId)->where('size',$request->size)->update(['quantity'=>($updateQuantity)]);
            $updateCart = Checkout::where('user_id',Auth::user()->id)->where('product_id',$request->productId)->where('size',$request->size)->update(['quantity'=>($updateQuantity)]);

                return redirect(url('cart'))->with('success', 'Item Added to Cart Successfully');

            }
            else {
                $addCart = Cart::create([
                    'product_id' => $request->input('productId'),
                    'quantity' => $request->input('quantity'),
                    'size' => $request->input('size'),
                    'user_id' => Auth::user()->id,
                    'flavour'=>$request->input('flavour'),
                ]);
                $addCart = Checkout::create([
                    'product_id' => $request->input('productId'),
                    'quantity' => $request->input('quantity'),
                    'size' => $request->input('size'),
                    'user_id' => Auth::user()->id,
                    'flavour'=>$request->input('flavour'),

                ]);
                return redirect(url('cart'))->with('success', 'Item Added to Cart Successfully');
            }
        }
        else{
            $getIp = UserSystemInfoHelper::get_ip();
            $getProductId =Cart::where('product_id',$request->productId)->where('ip',$getIp)->where('size',$request->size)->first();
            if (isset($getProductId)){
                $productId = $getProductId->product_id;
                $getQuantity = Cart::where('ip',$getIp)->where('product_id',$request->productId)->first();
                $quantity = $getQuantity->quantity;
                $updateQuantity = $quantity + $request->quantity;
                $updateCart = Cart::where('ip',$getIp)->where('product_id',$request->productId)->where('size',$request->size)->update(['quantity'=>($updateQuantity)]);
                $updateCart = Checkout::where('ip',$getIp)->where('product_id',$request->productId)->where('size',$request->size)->update(['quantity'=>($updateQuantity)]);

                return redirect(url('cart'))->with('success', 'Item Added to Cart Successfully');


            }
            else {
                $getIp = UserSystemInfoHelper::get_ip();
                $addCart = Cart::create([
                    'product_id' => $request->input('productId'),
                    'quantity' => $request->input('quantity'),
                    'size' => $request->input('size'),
                    'ip' => $getIp,
                    'flavour'=>$request->input('flavour'),

                ]);
                $addCart = Checkout::create([
                    'product_id' => $request->input('productId'),
                    'quantity' => $request->input('quantity'),
                    'size' => $request->input('size'),
                    'ip' => $getIp,
                    'flavour'=>$request->input('flavour'),

                ]);
                return redirect(url('cart'))->with('success', 'Item Added to Cart Successfully');

            }
        }


    }
    public function delete(Request $request,$id){
        $getIp = UserSystemInfoHelper::get_ip();
        if (Auth::check()) {
            $updateCart = Cart::where('product_id', $id)->where('user_id', Auth::user()->id)->where('size', $request->size)->first();
            if ($updateCart->quantity > 1) {
                $quantity = $updateCart->quantity;
                $updateQuantity = $quantity - 1;
                $update = Cart::where('user_id', Auth::user()->id)->where('product_id', $id)->where('size', $request->size)->update(['quantity' => ($updateQuantity)]);

            } else {
                $deleteCart = Cart::where('product_id', $id)->where('user_id', Auth::user()->id)->where('size', $request->size)->delete();
                $deleteCheckout = Checkout::where('product_id', $id)->where('user_id', Auth::user()->id)->where('size', $request->size)->delete();
            }


            $checkCart = Cart::where('user_id', Auth::user()->id)->first();
            if (isset($checkCart)) {
                return redirect()->back()->with('success', 'Item Removed From Cart');
            } else {
                return redirect(url('/'))->with('success', 'Your Cart is Empty');
            }
        }
        else{
            $updateCart = Cart::where('product_id',$id)->where('ip',$getIp)->where('size',$request->size)->first();
            if ($updateCart->quantity>1){
                $quantity = $updateCart->quantity;
                $updateQuantity = $quantity-1;
                $update = Cart::where('ip',$getIp)->where('product_id',$id)->where('size',$request->size)->update(['quantity'=>($updateQuantity)]);

            }
            else{
                $deleteCart = Cart::where('product_id',$id)->where('ip',$getIp)->where('size',$request->size)->delete();
                $deleteCheckout = Checkout::where('product_id',$id)->where('ip',$getIp)->where('size',$request->size)->delete();
            }


            $checkCart = Cart::where('ip',$getIp)->first();
            if (isset($checkCart)) {
                return redirect()->back()->with('success', 'Item Removed From Cart');
            }
            else{
                return redirect(url('/'))->with('success','Your Cart is Empty');
            }
        }
    }
}
