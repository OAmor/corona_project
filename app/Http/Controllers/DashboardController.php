<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function post(Request $request){
        $validator = Validator::make(request()->all(),[
            "out" => "in:oui,non|required",
            "work" => "in:oui,non|required",
            "contact" => "in:oui,non|required",
            "meet" => "in:oui,non|required",
            "assist" => "in:oui,non|required",
            "fivers" => "in:oui,non|required",
            "mucils" => "in:oui,non|required",
            "cough" => "in:oui,non|required",
            "smell" => "in:oui,non|required",
            "gorge" => "in:oui,non|required",
            "vomiting" => "in:oui,non|required",
            "age" => "in:oui,non|required",
            "weight" => "in:oui,non|required",
            "tall" => "in:oui,non|required",
            "pressure" => "in:oui,non|required",
            "diab" => "in:oui,non|required",
            "cancer" => "in:oui,non|required",
            "breathing" => "in:oui,non|required",
            "renal" => "in:oui,non|required",
            "liver" => "in:oui,non|required",
            "pregnant" => "in:oui,non,non_concerne|required",
            "deasis" => "in:oui,non|required",
            "bcg" => "in:oui,non|required",
            "influenza" => "in:oui,non|required"
        ]);

        if ($validator->fails()) {
            Session::flash('warning',"كل الحقول مطلوبة ");
            return redirect()->back();
        }
    }
}
