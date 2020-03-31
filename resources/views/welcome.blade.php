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
                <div class="card text-right">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <b class="num"> -1</b>
                            هل كنت في سفر للخارج موخرا أو على اتصال وثيق مع شخص عاد موخرا من الخارج أو من مدينة خطر الاصابة بداء كورونا عال فيها ؟
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="out1" name="out">
                                <label class="custom-control-label" for="out1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="out2" name="out">
                                <label class="custom-control-label" for="out2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            
                            <b class="num"> -2</b>
                            ماهي طبيعة مهنتك ؟ بعض المهن خطر الاصابة فيها عالي, هل مهنتك تجعلك على اتصال مع عدة اشخاص (تاجر,صيدلي,عامل في فندق,مقهى , مطعم,سائق سيارة أجرة أو حافلة ..),تشتغل مهني في الصحة (طبيب,ممرض,اداري في مستشفى أو عيادة ,سائق سيارة اسعاف) 
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="work1" name="work">
                                <label class="custom-control-label" for="work1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="work2" name="work">
                                <label class="custom-control-label" for="work2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل كنت على اتصال مع شخص تأكدت من اصابته بفيروس كورونا خلال ال 14 يوم السابقة ؟ 
                            <b class="num"> -3</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="contact1" name="contact">
                                <label class="custom-control-label" for="contact1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="contact2" name="contact">
                                <label class="custom-control-label" for="contact2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل سبق أن التقيت أو قدمت رعاية صحية لمريض مشبوه بالاصابة بكورونا, أو لديه اعراض زكام, حمى, سعال, ولم يتم تشخيصه أو تأكيد اصابته خلال 14 يوم السابقة ؟
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="meet1" name="meet">
                                <label class="custom-control-label" for="meet1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="meet2" name="meet">
                                <label class="custom-control-label" for="meet2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل حضرت وليمة ,عرس, احتفال عائلي خلال ال 14 يوم سبقت بداية الاعراض ؟
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="assist1" name="assist">
                                <label class="custom-control-label" for="assist1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="assist2" name="assist">
                                <label class="custom-control-label" for="assist2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل تعاني من الحمى ؟ (درجة حرارتك فوق 38 درجة )
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="fivers1" name="fivers">
                                <label class="custom-control-label" for="fivers1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="fivers2" name="fivers">
                                <label class="custom-control-label" for="fivers2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل تعاني 
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="mucils1" name="mucils">
                                <label class="custom-control-label" for="mucils1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="mucils2" name="mucils">
                                <label class="custom-control-label" for="mucils2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل تعاني 
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="cough1" name="cough">
                                <label class="custom-control-label" for="cough1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="cough2" name="cough">
                                <label class="custom-control-label" for="cough2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل تعاني 
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="smell1" name="smell">
                                <label class="custom-control-label" for="smell1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="smell2" name="smell">
                                <label class="custom-control-label" for="smell2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل تعاني 
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="gorge1" name="gorge">
                                <label class="custom-control-label" for="gorge1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="gorge2" name="gorge">
                                <label class="custom-control-label" for="gorge2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل تعاني 
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="vomiting1" name="vomiting">
                                <label class="custom-control-label" for="vomiting1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="vomiting2" name="vomiting">
                                <label class="custom-control-label" for="vomiting2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل تعاني 
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="age1" name="age">
                                <label class="custom-control-label" for="age1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="age2" name="age">
                                <label class="custom-control-label" for="age2">نعم</label>
                            </div>
                        </li>






                        <li class="list-group-item">
                            هل تعاني 
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="pressure1" name="pressure">
                                <label class="custom-control-label" for="pressure1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="pressure2" name="pressure">
                                <label class="custom-control-label" for="pressure2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل تعاني 
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="diab1" name="diab">
                                <label class="custom-control-label" for="diab1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="diab2" name="diab">
                                <label class="custom-control-label" for="diab2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل تعاني 
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="cancer1" name="cancer">
                                <label class="custom-control-label" for="cancer1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="cancer2" name="cancer">
                                <label class="custom-control-label" for="cancer2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل تعاني 
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="breathing1" name="breathing">
                                <label class="custom-control-label" for="breathing1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="breathing2" name="breathing">
                                <label class="custom-control-label" for="breathing2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل تعاني 
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="renal1" name="renal">
                                <label class="custom-control-label" for="renal1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="renal2" name="renal">
                                <label class="custom-control-label" for="renal2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل تعاني 
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="liver1" name="liver">
                                <label class="custom-control-label" for="liver1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="liver2" name="liver">
                                <label class="custom-control-label" for="liver2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل تعاني 
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="pregnant1" name="pregnant">
                                <label class="custom-control-label" for="pregnant1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="pregnant2" name="pregnant">
                                <label class="custom-control-label" for="pregnant2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل تعاني 
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="deasis1" name="deasis">
                                <label class="custom-control-label" for="deasis1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="deasis2" name="deasis">
                                <label class="custom-control-label" for="deasis2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل تعاني 
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="bcg1" name="bcg">
                                <label class="custom-control-label" for="bcg1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="bcg2" name="bcg">
                                <label class="custom-control-label" for="bcg2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل تعاني 
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="influenza1" name="influenza">
                                <label class="custom-control-label" for="influenza1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="influenza2" name="influenza">
                                <label class="custom-control-label" for="influenza2">نعم</label>
                            </div>
                        </li>
                    </ul>
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
        <script src="{{ asset('js/mdb.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
