<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;
use App\Cases;

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
            "weight" => "numeric|required",
            "tall" => "numeric|required",
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

        try{
            $data = $request->all();
            $result = 0;
            if($request->out == 'oui' || $request->work == 'oui' || $request->contact == 'oui' || $request->meet == 'oui' || $request->assist == 'oui')
                $result += 2;
            
            if($request->fivers == 'oui' || $request->mucils == 'oui' )
                $result += 2;  
                
            if($request->cough == 'oui' )
                $result += 2;
            
            if($request->smell == 'oui' )
                $result += 2;
                
            if($request->gorge == 'oui' )
                $result += 1;
                
            if($request->vomiting == 'oui' )
                $result += 1;
    
            $data['result'] = $result;    
                
            $case = new Cases($data);
            $case->save();

            return view('result')->with('res',$result);

        }catch(\Exception $e){
            Log::error($e->getMessage());
            Session::flash('error',"خطأ تقني !");
            return redirect()->back();
        }
    }
}
