<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function post(Request $request){
        dd($request);
        $this->validate($request,[
            'name' => 'required|max:100',
            'shipping_price' => 'required|numeric',
            'image' => 'file'
        ]);
    }
}
