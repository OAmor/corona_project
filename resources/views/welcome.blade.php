<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CORONA</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;900&display=swap" rel="stylesheet"> 
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{asset('css/fa_all.min.css')}}">
        <!-- Theme style -->
        <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">

        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="header-banner">
                <h1>فحص كورونا</h1>
            </div>
            <div class="clear"></div>
            <nav>
                <div class="site-title">فحص كورونا</div>
            </nav>
        </header>


        <div class="container">
        <div class="card my-5">
            <form action="{{route('postData')}}" method="post">
                @csrf()
                <div class="card text-right">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <b class="num"> -1</b>
                            هل كنت في سفر للخارج موخرا أو على اتصال وثيق مع شخص عاد موخرا من الخارج أو من مدينة خطر الاصابة بداء كورونا عال فيها ؟
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="out1" value="non" name="out">
                                <label class="custom-control-label" for="out1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="out2" value="oui" name="out">
                                <label class="custom-control-label" for="out2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            
                            <b class="num"> -2</b>
                            ما هي طبيعة مهنتك؟ بعض المهن خطر الإصابة فيها عالي، هل مهنتك تجعلك على اتصال مع عدة أشخاص (محطات
النقل الجوي أو البحري، تاجر، صيدلي، عامل في فندق، مقهى، مطعم، سائق سيارة أجرة أو حافلة ...) تشتغل مهنة في 
إطار الخدمات الاجتماعية (البلدية، البريد والمواصلات، شرطي، رجل أمن، الحماية المدنية، حارس)، تشتغل مهني في
الصحة (طبيب، ممرض، إداري في مستشفى أو عيادة، سائق سيارة إسعاف)
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="work1" value="non" name="work">
                                <label class="custom-control-label" for="work1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="work2" value="oui" name="work">
                                <label class="custom-control-label" for="work2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل كنت على اتصال مع شخص تأكدت من اصابته بفيروس كورونا خلال ال 14 يوم السابقة ؟ 
                            <b class="num"> -3</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="contact1" value="non" name="contact">
                                <label class="custom-control-label" for="contact1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="contact2" value="oui" name="contact">
                                <label class="custom-control-label" for="contact2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل سبق أن التقيت أو قدمت رعاية صحية لمريض مشبوه بالاصابة بكورونا, أو لديه اعراض زكام, حمى, سعال, ولم يتم تشخيصه أو تأكيد اصابته خلال 14 يوم السابقة ؟
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="meet1" value="non" name="meet">
                                <label class="custom-control-label" for="meet1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="meet2" value="oui" name="meet">
                                <label class="custom-control-label" for="meet2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل حضرت وليمة ,عرس, احتفال عائلي خلال ال 14 يوم سبقت بداية الاعراض ؟
                            <b class="num"> -5</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="assist1" value="non" name="assist">
                                <label class="custom-control-label" for="assist1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="assist2" value="oui" name="assist">
                                <label class="custom-control-label" for="assist2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل تعاني من الحمى ؟ (درجة حرارتك فوق 38 درجة )
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="fivers1" value="non" name="fivers">
                                <label class="custom-control-label" for="fivers1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="fivers2" value="oui" name="fivers">
                                <label class="custom-control-label" for="fivers2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                        هل تعاني من صداع حاد مع آلام في العضلات؟ 
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="mucils1" value="non" name="mucils">
                                <label class="custom-control-label" for="mucils1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="mucils2" value="oui" name="mucils">
                                <label class="custom-control-label" for="mucils2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                        هل تعاني من السعال، أو من عسر في التنفس أو من آلام في الصدر؟ (منذ مدة غير بعيدة)                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="cough1" value="non" name="cough">
                                <label class="custom-control-label" for="cough1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="cough2" value="oui" name="cough">
                                <label class="custom-control-label" for="cough2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                        هل تعاني من فقدان حاسة ال ّشم أو حاسة الذوق خلال الأيام القليلة الماضية؟                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="smell1" value="non" name="smell">
                                <label class="custom-control-label" for="smell1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="smell2" value="oui" name="smell">
                                <label class="custom-control-label" for="smell2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                        هل تعاني من رشح الأنف (سيلان الأنف) أو آلام في الحلق؟
                                                    <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="gorge1" value="non" name="gorge">
                                <label class="custom-control-label" for="gorge1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="gorge2" value="oui" name="gorge">
                                <label class="custom-control-label" for="gorge2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                        هل تعاني من القيئ أو من الإسهال؟
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="vomiting1" value="non" name="vomiting">
                                <label class="custom-control-label" for="vomiting1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="vomiting2" value="oui" name="vomiting">
                                <label class="custom-control-label" for="vomiting2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                        كم عمرك؟ أكثر من 65 أم أقل
                                                    <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="age1" value="non" name="age">
                                <label class="custom-control-label" for="age1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="age2" value="oui" name="age">
                                <label class="custom-control-label" for="age2">نعم</label>
                            </div>
                        </li>


                        <li class="list-group-item">
                        كم زونك ؟
                            <b class="num"> -4</b>
            
                            <input style="direction:rtl" type="number" name="weight" class="form-control" value="0">
                        </li>

                        <li class="list-group-item">
                        كم طولك ؟
                            <b class="num"> -4</b>
            
                            <input style="direction:rtl" type="number" name="tall" class="form-control" value="0">

                        </li>



                        <li class="list-group-item">
                        هل تشتكي من ارتفاع في ضغط أو من مرض في القلب والشرايين، أو هل تتناول أدوية لعلاج القلب؟
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="pressure1" value="non" name="pressure">
                                <label class="custom-control-label" for="pressure1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="pressure2" value="oui" name="pressure">
                                <label class="custom-control-label" for="pressure2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                        هل تشتكي من داء السكري؟  
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="diab1" value="non" name="diab">
                                <label class="custom-control-label" for="diab1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="diab2" value="oui" name="diab">
                                <label class="custom-control-label" for="diab2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                        هل أصبت بداء السرطان في آخر ثلاث سنوات؟
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="cancer1" value="non" name="cancer">
                                <label class="custom-control-label" for="cancer1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="cancer2" value="oui" name="cancer">
                                <label class="custom-control-label" for="cancer2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                        هل تشتكي من مرض تنفسي أو هل تجري فحوصات دورية عند الطبيب المختص في الأمراض الصدرية؟ 
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="breathing1" value="non" name="breathing">
                                <label class="custom-control-label" for="breathing1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="breathing2" value="oui" name="breathing">
                                <label class="custom-control-label" for="breathing2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                        هل تشتكي من فشل كلوي مزمن؟
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="renal1" value="non" name="renal">
                                <label class="custom-control-label" for="renal1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="renal2" value="oui" name="renal">
                                <label class="custom-control-label" for="renal2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                        هل تشتكي من مرض في الكبد؟ 
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="liver1" value="non" name="liver">
                                <label class="custom-control-label" for="liver1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="liver2" value="oui" name="liver">
                                <label class="custom-control-label" for="liver2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                        هل أنت حامل؟
                            <b class="num"> -4</b>
                                <!-- Default inline 1-->
                                <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="non_concerne0" value="non_concerne" name="pregnant">
                                <label class="custom-control-label" for="non_concerne0">ﻻ</label>
                            </div>
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="pregnant1" value="non" name="pregnant">
                                <label class="custom-control-label" for="pregnant1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="pregnant2" value="oui" name="pregnant">
                                <label class="custom-control-label" for="pregnant2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                        هل تشتكي من مرض معروف أنه ينقص من مناعتك؟
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="deasis1" value="non" name="deasis">
                                <label class="custom-control-label" for="deasis1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="deasis2" value="oui" name="deasis">
                                <label class="custom-control-label" for="deasis2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                        BCG هل تلقيت القاح المضاد للسل  ؟
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="bcg1" value="non" name="bcg">
                                <label class="custom-control-label" for="bcg1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="bcg2" value="oui" name="bcg">
                                <label class="custom-control-label" for="bcg2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                        هل تلقيت اللقاح المضاد للأنفلونزا هذه السنة؟
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="influenza1" value="non" name="influenza">
                                <label class="custom-control-label" for="influenza1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="influenza2" value="oui" name="influenza">
                                <label class="custom-control-label" for="influenza2">نعم</label>
                            </div>
                        </li>
                    </ul>
                </div>


                <div class="text-center">
                    <button class="btn btn-success">
                        <i class="fa fa-check"></i>
                        عرض النتيجة
                    </button>
                </div>
            </form>
        </div>
        </div>





        <!-- Footer -->
        <footer class="page-footer font-small blue">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 جميع الحقوق محفوظة
            <a href="/">CORONA</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->

        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/toastr.min.js') }}"></script>
        <script src="{{ asset('js/mdb.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

        @if(Session::has('success'))
    <script>
        toastr.success("{{ Session::get('success') }}");
    </script>
@endif

@if(Session::has('warning'))
    <script>
        toastr.warning("{{ Session::get('warning') }}");
    </script>
@endif

@if(Session::has('error'))
    <script>
        toastr.error("{{ Session::get('error') }}");
    </script>
@endif
    </body>
</html>