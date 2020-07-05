<?php

namespace App\Http\Controllers;

use AfricasTalking\SDK\AfricasTalking;
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
            switch ($check){
                case($check->size=='1LITRE'):
                    $sum = $check->product->product_price;
                    $quant = $check->quantity;

                    $total = $sum * $quant;
                    $totalSum += $total;
                    break;
                case ($check->size=='750ML'):
                    $sum = $check->product->product_price750;
                    $quant = $check->quantity;

                    $total = $sum * $quant;
                    $totalSum += $total;
                    break;
                case ($check->size=='375ML'):
                    $sum = $check->product->product_price375;
                    $quant = $check->quantity;

                    $total = $sum * $quant;
                    $totalSum += $total;
                    break;
                case ($check->size=='250ML'):
                    $sum = $check->product->product_price250;
                    $quant = $check->quantity;

                    $total = $sum * $quant;
                    $totalSum += $total;
                    break;
            }
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
                'size' => $Checkout->size,
                'quantity'=>$Checkout->quantity,
                'order_status' => 'cash on delivery',
                'order_stats' => 'Awaiting Confirmation',

            ]);

        }
        $deleteCart = Cart::where('user_id',Auth::user()->id)->delete();
        $deleteCheckout = Checkout::where('user_id',Auth::user()->id)->delete();
//        $username = 'sandbox'; // use 'sandbox' for development in the test environment
//        $apiKey   = '44a616cdbb47adafaa4e62f34003aca52733a2a61403200e174b7e73913bc4af'; // use your sandbox app API key for development in the test environment
//        $AT       = new AfricasTalking($username, $apiKey);
//
//// Get one of the services
//        $sms      = $AT->sms();
//
//// Use the service
//        $result   = $sms->send([
//            'to'      => '0790268795',
//            'message' => 'Hello World!'
//        ]);


        return redirect(url('success'))->with('success','Order Placed Successfully');
    }
}
