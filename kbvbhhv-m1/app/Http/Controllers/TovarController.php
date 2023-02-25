<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TovarController extends Controller
{


    public function about(){
        $p=\App\Models\tovar::OrderBy('id','desc')->limit(5)->get();
        return view ('about', ['tovar'=>$p]);
    }
    public function katalog(){
        $p=\App\Models\tovar::OrderBy('id','desc')->get();
        return view ('katalog', ['tovar'=>$p]);
    }
}

