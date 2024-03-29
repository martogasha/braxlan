<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterCustomOneController extends Controller
{
    public function index(){
        return view('customer.registerUser');
    }
    public function register(Request $request){
        if ($request->name ==null){
            return  redirect(url('register'))->with('error','Name Required');
        }
        if ($request->password ==null){
            return  redirect(url('register'))->with('error','Password Required');
        }
        if ($request->passwordConfirm ==null){
            return  redirect(url('register'))->with('error','Please Confirm Password Required');

        }
        $password = $request->password;
        $passwordConfirm = $request->passwordConfirm;
        if ($password!=$passwordConfirm){
            return  redirect(url('register'))->with('error','Password does not match');

        }
        $user = User::where('email',$request->email)->first();
        $register = User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'location'=>$request->input('location'),
            'password' => Hash::make($request['password']),
        ]);
        return redirect(url('loginUser'))->with('success','Registered Successfully');
    }
}
