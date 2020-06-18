<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){
        if (Auth::check()) {
            $orders = Order::where('user_id', Auth::user()->id)->get();
            $orderSums = Order::where('user_id', Auth::user()->id)->get();

            $totalSum=0;

            foreach ($orderSums as $orderSum){
                $sum = $orderSum->product->product_price;
                $quant = $orderSum->quantity;

                $total = $sum*$quant;
                $totalSum+=$total;
            }
            return view('customer.orderSuccess', [
                'orders' => $orders,
                'totalSum'=>$totalSum
            ]);
        }
        else{
            return redirect(url('login'));
        }
    }
    public function orders(){
        $orders = Order::where('order_stats','Order on the Way')->get()->unique('user_id');
        return view('admin.orders',[
            'orders'=>$orders
        ]);
    }
    public function getOrderDetails(Request $request){
        $checks = Order::where('user_id',$request->order)->get();
        $totalSum=0;
        foreach ($checks as $check){
            $sum = $check->product->product_price;
            $quant = $check->quantity;

            $total = $sum*$quant;
            $totalSum+=$total;
        }
        if ($request->ajax()){
            $output="";
            $orders = Order::where('user_id',$request->order)->get();
        }
        foreach ($orders as $order) {
            $output .=
                '<tbody>
                    <tr>
                        <td>
                            <div class="d-flex">
                                <img src="{{asset(uploads/product/.'.$order->product->product_image.')}}" alt="" class="img-fluid img-30 mr-2 blur-up lazyloaded">
                            </div>
                        </td>
                        <input type="hidden" name="userId" value='.$order->user_id.' id="userId">
                        <td>'.$order->product->product_name.'</td>
                        <td><span class="badge badge-primary">Cash on Delivery</span></td>
                        <td>'.$order->created_at->format('d/m/y:m/s').'</td>
                        <td>Total:Ksh: '.$totalSum.'</td>
                    </tr>
                    </tbody>

';
        }
        return response($output);
    }
    public function trackOrder(){
        $trackOrders = Order::where('user_id',Auth::user()->id)->get();
        return view('customer.orders',[
            'trackOrders'=>$trackOrders
        ]);
    }
}
