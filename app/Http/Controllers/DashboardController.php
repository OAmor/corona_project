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
            'out' => 'in:oui,non|required',
            'work' => 'in:oui,non|required',
            'contact' => 'in:oui,non|required',
            'meet' => 'in:oui,non|required',
            'assist' => 'in:oui,non|required',
            'fivers' => 'in:oui,non|required',
            'mucils' => 'in:oui,non|required',
            'cough' => 'in:oui,non|required',
            'smell' => 'in:oui,non|required',
            'gorge' => 'in:oui,non|required',
            'chest' => 'in:oui,non|required',
            'nose' => 'in:oui,non|required',
            'vomiting' => 'in:oui,non|required',
            'age' => 'numeric|required',
            'weight' => 'numeric|required',
            'tall' => 'numeric|required',
            'pressure' => 'in:oui,non|required',
            'diab' => 'in:oui,non|required',
            'cancer' => 'in:oui,non|required',
            'breathing' => 'in:oui,non|required',
            'renal' => 'in:oui,non|required',
            'liver' => 'in:oui,non|required',
            'pregnant' => 'in:oui,non,non_concerne|required',
            'deasis' => 'in:oui,non|required',
            'bcg' => 'in:oui,non|required',
            'influenza' => 'in:oui,non|required',
            'phone' => 'regex:/^0\d{9}/',
            'email' => 'email'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if($errors->has('phone')){
                return response()->json([
                    'message' => 'رقم الهاتف مطلوب ويجب أن يكون صالحًا',
                ], 422);
            }else{
                return response()->json([
                    'message' => 'كل الحقول مطلوبة '
                ], 422);
            }
        }

        try{
            $data = $request->all();
            $result = $this->getResult($request);
            $message = $this->getMessage($request);
    
            $data['result'] = $result;    
            $data['ip'] = request()->ip();    
                
            $case = new Cases($data);
            $case->save();

            return response()->json([
                'message' => $message
            ], 200);

        }catch(\Exception $e){
            Log::error($e->getMessage());
            return response()->json([
                'message' => 'خطأ تقني !'
            ], 422);
        }
    }

    public function cases(){
        $cases = Cases::latest()->paginate(50);
        return view('dashboard.cases.index')->with('cases',$cases);
    }

    public function destroy(Request $request)
    {
        try{
            $c = Cases::find($request->id);
            $c->delete();
            Session::flash('success','Le cas a été supprimé !');
            return redirect()->back();
        }catch (\Exception $e){
            Log::error($e->getMessage());
            Session::flash('error','Une erreur ineterne !');
            return redirect()->back();
        }
    }

    /**
     * Private methods
     */
    private function getResult(Request $request){
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

        return $result;
    }
    private function getMessage(Request $request){
        if($request->out == 'oui' || $request->work == 'oui' || $request->contact == 'oui' || $request->meet == 'oui' || $request->assist == 'oui'){
            if($request->fivers != 'oui' && $request->mucils != 'oui' && $request->cough != 'oui' && $request->smell != 'oui' && $request->gorge != 'oui' && $request->vomiting !='oui'){
                return 'من الرجاء الإتصال بالرقم الأخضر لإكمال 3030 لإكمال التشخيص';
            }else{
                return 'الرجاء الاتصال بسرعة على الرقم الأخضر 3030 أو على رقم الحماية المدنية 14 أو 1';
            }
        }else{
            if($request->cough == 'oui' && ($request->fivers == 'oui' || $request->mucils == 'oui')){
                return 'يجب الاتصال فورا على الرقم الأخضر 3030 إكمال التشخيص';
            }else if($request->smell=='oui'){
                return 'الرجاء الاتصال بالرقم الأخضر 3030 الاستفسار أكثر';
            }else if($request->fevers == 'oui' || $request->mucils == 'oui' || $request->cough == 'oui' || $request->gorge == 'oui'){
                return 'أنت تعاني من أعراض الانفلونزا الموسمية ! عليك الاتصال بطبيب، واتبع اإلرشادات الوقائية';
            }else{
                return 'الزم بيتك واتبع الإرشادات الوقائية';
            }

        }
    }
}
