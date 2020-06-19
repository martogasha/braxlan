<?php

namespace App\Http\Controllers;

use App\Poster;
use App\User;
use Illuminate\Http\Request;

class PosterController extends Controller
{
    public function index(){
        return view('customer.index');
    }
    public function poster(){
        $poster = Poster::where('poster_category','first')->first();
        $poster2 = Poster::where('poster_category','second')->first();
        $poster3 = Poster::where('poster_category','third')->first();
            return view('admin.post', [
                'poster' => $poster,
                'poster2' => $poster2,
                'poster3' => $poster3

            ]);

    }
    public function edit($id){
        $edit = Poster::find($id);
        return view('admin.posterEdit', compact('edit'));
    }
    public function update(Request $request, $id){
        $edit = Poster::find($id);
        $edit->poster_category = $request->get('poster_category');
        $file = $request->file('poster_image');
        $extension = $file->getClientOriginalName();
        $filename = time() . '.' . $extension;
        $file->move('uploads/product/', $filename);
        $edit->poster_image = $filename;

        $edit->save();
        return redirect()->back()->with('success','Poster Edited Successfully');
    }

    public function store(Request $request){
        $poster = new Poster();
        $poster->poster_category = $request->input('poster_category');

        $file = $request->file('poster_image');
        $extension = $file->getClientOriginalName();
        $filename = time() . '.' . $extension;
        $file->move('uploads/product/', $filename);
        $poster->poster_image = $filename;
        $poster->save();


        return redirect()->back()->with('success','Poster Added Successfully');

    }
}
