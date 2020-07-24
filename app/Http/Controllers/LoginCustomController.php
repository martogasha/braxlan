<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Checkout;
use App\Helpers\UserSystemInfoHelper;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginCustomController extends Controller
{
    public function login(Request $request)
    {
        $getIp = UserSystemInfoHelper::get_ip();

        if ($request->email ==null){
            return  redirect(url('login'))->with('error','Email Required');

        }
        if ($request->password ==null){
            return  redirect(url('login'))->with('error','Password Required');

        }
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]))
        {
            $user = User::where('email', $request->email)->first();
            $updateCart = Cart::where('ip',$getIp)->update(['user_id'=>($user->id)]);
            $updateCart = Checkout::where('ip',$getIp)->update(['user_id'=>($user->id)]);


            if ($user->role == 'admin') {
                return redirect()->route('admin');

            } elseif ($user->role == 'customer') {
                return redirect()->route('customer');
            }
            elseif ($user->role == 'vendor') {
                return redirect()->route('vendor.index');
            }

            else{
                return redirect(url('/'));
            }

        }
        else{
            return redirect(url('login'))->with('error', 'CREDENTIALS DOES NOT MATCH');
        }
    }
}
