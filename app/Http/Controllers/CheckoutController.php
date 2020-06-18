<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Checkout;
use App\CompletedOrder;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(){
        $checkouts =Checkout::where('user_id',Auth::user()->id)->get();
        $checks =Checkout::where('user_id',Auth::user()->id)->get();
        $user = User::where('id',Auth::user()->id)->first();
        $totalSum=0;
        foreach ($checks as $check){
            $sum = $check->product->product_price;
            $quant = $check->quantity;

            $total = $sum*$quant;
            $totalSum+=$total;
        }

        return view('customer.checkout',[
            'user'=>$user,
            'checkouts'=>$checkouts,
            'totalSum'=>$totalSum
        ]);
    }
    public function store(Request $request){
        $Checkout = Cart::where('user_id',auth()->user()->id)->get();
        foreach ($Checkout as $moveItem){
            $getCheckout = Checkout::create([
                'product_id'=>$moveItem->product_id,
                'user_id'=>Auth::user()->id,
                'quantity'=>$moveItem->quantity,
            ]);
        }
        return redirect(url('checkout'));
    }
    public function placeOrder(){
        $Checkouts = Checkout::where('user_id',auth()->user()->id)->get();
        foreach ($Checkouts as $Checkout) {
            $placeOrder = Order::create([
                'product_id'=>$Checkout->product_id,
                'user_id'=>Auth::user()->id,
                'quantity'=>$Checkout->quantity,
                'order_status' => 'cash on delivery',
                'order_stats' => 'Order on the Way',

            ]);

        }
        $deleteCart = Cart::where('user_id',Auth::user()->id)->delete();
        $deleteCheckout = Checkout::where('user_id',Auth::user()->id)->delete();

        return redirect(url('success'))->with('success','Order Placed Successfully');
    }
}
