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
            // Qsts from 1 to 5 are true
            if($request->chest == 'oui'){
                //Qst 12 is true
                return 'الرجاء الاتصال  بسرعة بالرقم الاخضر 3030 للحصول على النصائح الضرورية, و اذا حدثت عندك مضاعفات من جراء ضيق التنفس اتصل بالحماية المدنية 14 أو 1021, أو اتصل ب SAMU';
            }elseif($request->fivers != 'oui' && $request->mucils != 'oui' && $request->cough != 'oui' && $request->smell != 'oui' && $request->gorge != 'oui' && $request->vomiting !='oui'
                && $request->nose != 'oui') {
                // Qsts from 6 to 13 are false
                return 'عليك الاحتياط و الحذر, التزم الحجر المنزلي , اذا ظهر عليك احد الاعراض التي سالناك عنها , استشر طبيبا عبر الرقم الاخضر 3030';
            }else{
                // At least one of qsts 6 to 13 (except 12) is true
                return ' الرجاء الاتصال على الرقم الأخضر 3030 لاكمال التشخيص, ﻻ تنسى الاجراءات والوقائية';
            }
        }else{
            // Qsts from 1 to 5 are false
            if($request->chest == 'oui'){
                //Qst 12 is true
                if($request->fivers == 'oui' || $request->mucils == 'oui' || $request->cough == 'oui' || $request->gorge == 'oui' || $request->vomiting =='oui') {
                    // At least one of qsts 6  7 8 9 and 13 is true
                    return 'الرجاء الاتصال  بسرعة بالرقم الاخضر 3030 لاكمال التشخيص , و اذا حدثت عندك مضاعفات من جراء ضيق التنفس اتصل بالحماية المدنية 14 أو 1021, أو اتصل ب SAMU';
                }
            }
            if($request->smell == 'oui' && $request->nose != 'oui'){
                // Qst 11 is true and 10 false
                return 'التزم الحجر المنزلي و اتصل على الرقم الأخصر 3030 لاكمال التشخيص';
            }
            if($request->fivers == 'oui' || $request->mucils == 'oui' || $request->cough == 'oui' || $request->gorge == 'oui' || $request->vomiting =='oui') {
                // At least one of qsts 6  7 8 9 and 13 is true
                return ' التزم الحجر المنزلي , اذا ظهر عليك احد الاعراض التي سالناك عنها , استشر طبيبا عبر الرقم الاخضر 3030';
            }
            return 'التزم الحجر الصحي واتبع الإرشادات الوقائية';
        }
    }
}
