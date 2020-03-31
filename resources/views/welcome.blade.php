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
