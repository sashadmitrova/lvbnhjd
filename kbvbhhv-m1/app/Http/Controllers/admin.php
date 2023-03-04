<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
    public function admin()
    {
        $prod = \App\Models\product::all();
        $cat = \App\Models\category::all();
        return view('admin', ['prod' => $prod,'cat'=>$cat ]);
    
    }
    public function creatcat(Request $request){
        \App\Models\category::create([
            'name'=>$request->input('name')
        ]);
        return redirect(route('admin'));
    }
}

