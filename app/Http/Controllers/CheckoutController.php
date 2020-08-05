<?php

namespace App\Http\Controllers;

use AfricasTalking\SDK\AfricasTalking;
use App\Cart;
use App\Cat;
use App\Checkout;
use App\CompletedOrder;
use App\Customer;
use App\Helpers\UserSystemInfoHelper;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class CheckoutController extends Controller
{
    public function index(){
        $user = User::where('id',Auth::id())->first();
       if (!Session::has('cat')){
           return view('customer.cart');
       }
       $oldCart = Session::get('cat');
       $cart = new Cat($oldCart);
       $totalPrice = $cart->totalPrice;
            return view('customer.checkout', [
                'checkouts'=>$cart->item,
                'products'=>$cart->item,
                'totalPrice' => $totalPrice,
                'user'=>$user
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
    public function placeOrder(Request $request)
    {
        if (Auth::check()) {
            $editUser = User::find($request->userId);
            $editUser->name = $request->name;
            if ($request->email) {
                $editUser->email = $request->email;
            }
            $editUser->phone = $request->phone;
            $editUser->location = $request->location;
            $editUser->save();

            $oldCart = Session::get('cat');
            $cart = new Cat($oldCart);
            $checkouts = $cart->item;
            foreach ($checkouts as $checkout) {
                $userPhone = User::where('id', Auth::id())->first();
                $phone = $userPhone->phone;;
                $order = new Order();
                $order->user_id = Auth::id();
                $order->product_id = $checkout['item']['id'];
                $order->quantity = $checkout['quantity'];
                $order->order_status = 'cash on delivery';
                $order->order_stats = 'Awaiting Confirmation';
                $order->save();
            }
            $request->session()->forget('cat');
            $username = 'bull'; // use 'sandbox' for development in the test environment
            $apiKey = '0aa4a7a4e921d26292c7d1f511f8cadcfca2a28d86e8e83d76c1863ad58ea9d0'; // use your sandbox app API key for development in the test environment
            $AT = new AfricasTalking($username, $apiKey);

// Get one of the services
            $sms = $AT->sms();

// Use the service
            $result = $sms->send([
                'to' => '0754238704',
                'message' => 'Available Order ' . $phone . ''
            ]);

            return redirect(url('success'))->with('success', 'Order Placed Successfully');
        }
        else{
            return redirect(url('loginUser'));
        }
    }

}
