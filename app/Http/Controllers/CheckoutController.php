<?php

namespace App\Http\Controllers;

use AfricasTalking\SDK\AfricasTalking;
use App\Cart;
use App\Checkout;
use App\CompletedOrder;
use App\Customer;
use App\Helpers\UserSystemInfoHelper;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(){
        $getIp = UserSystemInfoHelper::get_ip();

        $checkouts = Checkout::where('ip', $getIp)->get();
            $checks = Checkout::where('ip', $getIp)->get();
            if (Auth::check())
            $user = User::where('id', Auth::user()->id)->first();
            $totalSum = 0;
            foreach ($checks as $check) {
                switch ($check) {
                    case($check->size == '1LITRE'):
                        $sum = $check->product->product_price;
                        $quant = $check->quantity;

                        $total = $sum * $quant;
                        $totalSum += $total;
                        break;
                    case ($check->size == '750ML'):
                        $sum = $check->product->product_price750;
                        $quant = $check->quantity;

                        $total = $sum * $quant;
                        $totalSum += $total;
                        break;
                    case ($check->size == '375ML'):
                        $sum = $check->product->product_price375;
                        $quant = $check->quantity;

                        $total = $sum * $quant;
                        $totalSum += $total;
                        break;
                    case ($check->size == '250ML'):
                        $sum = $check->product->product_price250;
                        $quant = $check->quantity;

                        $total = $sum * $quant;
                        $totalSum += $total;
                        break;
                }
            }

            return view('customer.checkout', [
                'checkouts' => $checkouts,
                'totalSum' => $totalSum
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
    public function placeOrder(Request $request){
        $getIp = UserSystemInfoHelper::get_ip();
        $customer = new Customer();
        if ($request->name==null){
            return redirect()->back()->with('error','NAME REQUIRED');

        }
        $customer->name = $request->name;
        if ($request->phone==null){
            return redirect()->back()->with('error','PHONE REQUIRED');

        }
        $customer->phone = $request->phone;
        if ($request->location==null){
            return redirect()->back()->with('error','LOCATION REQUIRED');

        }
        $customer->location = $request->location;
        $customer->ip = $getIp;
        $customer->save();
        $customerPhone = Customer::where('ip',$getIp)->first();

        $phone = $customerPhone->phone;
        $Checkouts = Checkout::where('ip',$getIp)->get();
        foreach ($Checkouts as $Checkout) {
            $placeOrder = Order::create([
                'product_id'=>$Checkout->product_id,
                'ip'=>$getIp,
                'size' => $Checkout->size,
                'flavour'=>$Checkout->flavour,
                'customer_id'=>$customerPhone->id,
                'quantity'=>$Checkout->quantity,
                'order_status' => 'cash on delivery',
                'order_stats' => 'Awaiting Confirmation',

            ]);

        }
        $deleteCart = Cart::where('ip',$getIp)->delete();
        $deleteCheckout = Checkout::where('ip',$getIp)->delete();
        $username = 'bull'; // use 'sandbox' for development in the test environment
        $apiKey   = '0aa4a7a4e921d26292c7d1f511f8cadcfca2a28d86e8e83d76c1863ad58ea9d0'; // use your sandbox app API key for development in the test environment
        $AT       = new AfricasTalking($username, $apiKey);

// Get one of the services
        $sms = $AT->sms();

// Use the service
        $result = $sms->send([
            'to'      => '0754238704',
            'message' => 'Available Order '.$phone.''
        ]);


        return redirect(url('success'))->with('success','Order Placed Successfully');
    }
}
