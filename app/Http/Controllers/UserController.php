<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function editUser(Request $request){
        $edit = User::find($request->userId);
        $edit->name = $request->name;
        $edit->phone = $request->phone;
        $edit->email = $request->email;
        $edit->location = $request->location;
        $edit->save();
        return redirect()->back()->with('success', 'User Details Updated Successfully');


    }
}
