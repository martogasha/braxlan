<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class CompleteOrderController extends Controller
{
    public function index(){
        return view('admin.transaction');
    }
    public function store(Request $request){
        $deleteOrder = Order::where('user_id',$request->userId)->update(['order_stats'=>('Delivered')]);
        return redirect(url('orders'))->with('success','Order Completed Successfully');
    }
}
