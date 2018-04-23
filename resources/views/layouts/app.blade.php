<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blopp') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="loading">
        <ul class="bokeh">
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div id="app">
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        var countDownDate = new Date().getTime()+60000;
        var x = setInterval(function() {
            // Get todays time
            var now = new Date().getTime();
            // Find the distance between now an the count down date
            var distance = countDownDate - now;
            //console.log(distance);
            // Time calculations for minutes and seconds
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.cookie = "loader=; expires=Wed 01 Jan 1970;";
            }
        }, 1000);

        document.getElementById("app").setAttribute('style', 'display: none');

        if (getCookie("loader")) {
            //console.log(111);
            document.getElementById("loading").setAttribute('style', 'display: none');
            document.getElementById("app").removeAttribute('style');
        } else {
            setTimeout(function(){
                document.getElementById("loading").setAttribute('style', 'display: none');
                document.getElementById("app").removeAttribute('style');
            }, 3000);
            document.cookie="loader=Blopp;expires=Wed, 18 Dec 2023 12:00:00 GMT"
        }

        function getCookie(name) {
            var nameEQ = name + "=";
            // alert(document.cookie);
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1);
                if (c.indexOf(nameEQ) != -1) return c.substring(nameEQ.length,c.length);
            }
            return null;
        } 
        
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
