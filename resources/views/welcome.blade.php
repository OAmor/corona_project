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
        <div class="card">
            <form action="">
                <div class="card text-right">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <b class="num"> -1</b>
                            هل كنت في سفر للخارج موخرا أو على اتصال وثيق مع شخص عاد موخرا من الخارج أو من مدينة خطر الاصابة بداء كورونا عال فيها ؟
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline1" name="out">
                                <label class="custom-control-label" for="defaultInline1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline2" name="out">
                                <label class="custom-control-label" for="defaultInline2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            
                            <b class="num"> -2</b>
                            ماهي طبيعة مهنتك ؟ بعض المهن خطر الاصابة فيها عالي, هل مهنتك تجعلك على اتصال مع عدة اشخاص (تاجر,صيدلي,عامل في فندق,مقهى , مطعم,سائق سيارة أجرة أو حافلة ..),تشتغل مهني في الصحة (طبيب,ممرض,اداري في مستشفى أو عيادة ,سائق سيارة اسعاف) 
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline1" name="work">
                                <label class="custom-control-label" for="defaultInline1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline2" name="work">
                                <label class="custom-control-label" for="defaultInline2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل كنت على اتصال مع شخص تأكدت من اصابته بفيروس كورونا خلال ال 14 يوم السابقة ؟ 
                            <b class="num"> -3</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline1" name="contact">
                                <label class="custom-control-label" for="defaultInline1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline2" name="contact">
                                <label class="custom-control-label" for="defaultInline2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل سبق أن التقيت أو قدمت رعاية صحية لمريض مشبوه بالاصابة بكورونا, أو لديه اعراض زكام, حمى, سعال, ولم يتم تشخيصه أو تأكيد اصابته خلال 14 يوم السابقة ؟
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline1" name="meet">
                                <label class="custom-control-label" for="defaultInline1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline2" name="meet">
                                <label class="custom-control-label" for="defaultInline2">نعم</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            هل حضرت وليمة ,عرس, احتفال عائلي خلال ال 14 يوم سبقت بداية الاعراض ؟
                            <b class="num"> -4</b>
            
                            <!-- Default inline 1-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline1" name="assist">
                                <label class="custom-control-label" for="defaultInline1">ﻻ</label>
                            </div>

                            <!-- Default inline 2-->
                            <div style="float:left" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="defaultInline2" name="assist">
                                <label class="custom-control-label" for="defaultInline2">نعم</label>
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
