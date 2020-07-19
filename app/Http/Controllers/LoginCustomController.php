<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginCustomController extends Controller
{
    public function login(Request $request)
    {
        if ($request->email ==null){
            return  redirect(url('login'))->with('error','Email Required');

        }
        if ($request->password ==null){
            return  redirect(url('login'))->with('error','Password Required');

        }
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            $user = User::where('email', $request->email)->first();

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
