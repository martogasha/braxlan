<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Checkout;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\UserSystemInfoHelper;
use Session;

class CartController extends Controller
{
    public function index()
    {
        if (!Session::has('cat')){
            return view('customer.cart');
        }
        $oldCart = Session::get('cat');
        $cart = new Cat($oldCart);
        return view('customer.cart', ['products'=>$cart->item,'totalPrice'=>$cart->totalPrice]);
    }

    public function header(){
        $getIp = UserSystemInfoHelper::get_ip();
        $count = Cart::where('ip',$getIp)->count();
        return view('CPartials.header',[
            'count'=>$count
        ]);
    }
    public function store(Request $request){
        $product = Product::find($request->productId);
        $oldCart = Session::has('cat') ? Session::get('cat') : null;
        $cart = new Cat($oldCart);
        $cart->add($product , $product->id);
        $request->session()->put('cat',$cart);
        return redirect()->back()->with('success','ITEM SUCCESSFULLY ADDED TO CART');
    }
    public function storeOne(Request $request){
        $product = Product::find($request->productId);
        $oldCart = Session::has('cat') ? Session::get('cat') : null;
        $cart = new Cat($oldCart);
        $cart->add($product , $product->id);
        $request->session()->put('cat',$cart);
        return redirect(url('cart'))->with('success','ITEM SUCCESSFULLY ADDED TO CART');
    }
    public function getReduceByOne($id){
        $oldCart = Session::has('cat') ? Session::get('cat'):null;
        $cart = new Cat($oldCart);
        $cart->reduceByOne($id);
        if (count($cart->item)>0) {
            Session::put('cat', $cart);
        }
        else{
            Session::forget('cat');
        }
        return redirect()->back()->with('success','ITEM SUCCESSFULLY REMOVED TO CART');
    }
    public function addByOne($id){
        $oldCart = Session::has('cat') ? Session::get('cat'):null;
        $cart = new Cat($oldCart);
        $cart->addByOne($id);
        if (count($cart->item)>0) {
            Session::put('cat', $cart);
        }
        else{
            Session::forget('cat');
        }
        return redirect()->back()->with('success','ITEM SUCCESSFULLY ADDED TO CART');
    }
    public function removeItem($id){
        $oldCart = Session::has('cat') ? Session::get('cat'):null;
        $cart = new Cat($oldCart);
        $cart->removeItem($id);
        if (count($cart->item)>0) {
            Session::put('cat', $cart);
        }
        else{
            Session::forget('cat');
        }
        return redirect()->back()->with('success','ITEM SUCCESSFULLY REMOVED TO CART');
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
