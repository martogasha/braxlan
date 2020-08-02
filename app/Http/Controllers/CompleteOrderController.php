<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\DeclareDeclare;

class CompleteOrderController extends Controller
{
    public function index(){

        $comps = Order::where('order_stats','Delivered')->get();
        return view('admin.transaction',[
            'comps'=>$comps
        ]);
    }
    public function store(Request $request){
        if ($request->orderStats=='Awaiting') {
            $customerId = User::where('id',$request->userId)->first();
            $deleteOrder = Order::where('user_id', $customerId->id)->where('order_stats','Awaiting Confirmation')->update(['order_stats' => ('Order on the Way')]);
            return redirect(url('orders'))->with('success','Order Confirmed Successfully');

        }
        else{
            $customerId = User::where('id',$request->userId)->first();
            $deleteOrder = Order::where('user_id', $customerId->id)->where('order_stats','Order on the Way')->update(['order_stats' => ('Delivered')]);
            return redirect(url('orders'))->with('success','Order Completed Successfully');


        }
    }
}
