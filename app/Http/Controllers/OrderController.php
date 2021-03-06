<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Checkout;
use App\Customer;
use App\Helpers\UserSystemInfoHelper;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::where('user_id', Auth::id())->where('order_stats','Awaiting Confirmation')->get();
            $orderSums = Order::where('user_id', Auth::id())->where('order_stats','Awaiting Confirmation')->get();
        $customer = User::where('id', Auth::id())->first();



        $totalSum=0;

            foreach ($orderSums as $orderSum){

                        $sum = $orderSum->product->product_price;
                        $quant = $orderSum->quantity;

                        $total = $sum * $quant;
                        $totalSum += $total;

            }
            return view('customer.orderSuccess', [
                'orders' => $orders,
                'totalSum'=>$totalSum,
                'customer'=>$customer
            ]);
    }
    public function orders(){
        if (Auth::user()->role =='admin') {
            $orders = Order::where('order_stats','Awaiting Confirmation')->orWhere('order_stats','Order on the Way')->get()->unique('ip');
            return view('admin.orders', [
                'orders' => $orders
            ]);
        }
        else{
            return redirect(url('login'));
        }
    }
    public function buyNow(Request $request){
        if (Auth::check()){
            $addCart = Cart::create([
                'product_id'=>$request->input('productId'),
                'quantity'=>$request->input('quantity'),
                'user_id'=>Auth::user()->id,
            ]);
            $addCart = Checkout::create([
                'product_id'=>$request->input('productId'),
                'quantity'=>$request->input('quantity'),
                'user_id'=>Auth::user()->id,
            ]);
            return redirect(url('checkout'))->with('success', 'Item Added to Cart Successfully');
        }
        else{
            return redirect(url('login'));
        }
    }
    public function getOrderDetails(Request $request){
        $checks = Order::where('user_id',$request->order)->where('order_stats','Awaiting Confirmation')->orWhere('order_stats','Order on the Way')->get();
        $totalSum=0;
        foreach ($checks as $check){

                    $sum = $check->product->product_price;
                    $quant = $check->quantity;

                    $total = $sum * $quant;
                    $totalSum += $total;
        }
        if ($request->ajax()){
            $output="";
            $orders = Order::where('user_id',$request->order)->where('order_stats','Awaiting Confirmation')->orWhere('order_stats','Order on the Way')->get();
        }
        foreach ($orders as $order) {
            $output .= '<tbody>
                    <tr>
                    <input type="hidden" name="orderStats" value='.$order->order_stats.'>
                        <td>
                            <div class="d-flex">
                                <img src="uploads/product/'.$order->product->product_image.'" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                            </div>
                        </td>
                        <input type="hidden" name="userId" value='.$order->user_id.' id="userId">
                        <td>'.$order->product->product_name.'</td>
                        <td><span class="badge badge-primary">Cash on Delivery</span></td>
                        <td><span class="badge badge-secondary">'.$order->size.'</span></td>

                        <td>'.$order->quantity.'</td>
                        <td>Total:Ksh: '.$totalSum.'</td>
                    </tr>
                    </tbody>

';
        }
        return response($output);
    }
    public function trackOrder(){
        $trackOrders = Order::where('user_id',Auth::user()->id)->latest('id')->get();
            return view('customer.orders', [
                'trackOrders' => $trackOrders
            ]);

    }
    public function getEachOrder($id){
        $getEachOrder = Order::find($id);
        return view('customer.orderSuccess',[
            'getEachOrder'=>$getEachOrder
        ]);
}
    public function deleteOrder(Request $request, $id){
        $delete = Order::find($id);
        $delete->delete();
        return redirect()->back()->with('success','Order Cancelled Successfully');

    }
}
