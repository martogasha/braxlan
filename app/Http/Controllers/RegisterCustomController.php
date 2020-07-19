<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterCustomController extends Controller
{
    public function register(Request $request){
        $register = User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'location'=>$request->input('location'),
            'password' => Hash::make($request['password']),
        ]);
        return redirect(url('login'))->with('success','Registered Successfully');
    }
}
