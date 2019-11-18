<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="position-ref full-height" style="background-image: url('{{asset('bg/welcomebg.jpg')}}'); background-repeat: no-repeat;">
        <!-- <img src="{{asset('bg/welcomebg.jpg')}}" style="float: left; position: relative; left: 0;"> -->
        @if (Route::has('login'))
        
        <div class="top-right links">
            <a href="{{ url('/') }}">Home</a>
                <a href="#">About</a>
                <a href="portofolio">Portofolio</a>
                <a href="#">Store</a>
                <a href="#">Contact</a>
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif
        <div>

        </div>
        <div style="float: left; position:absolute; right:0; margin-right: 50px;margin-top: 150px;">
            <div class="title m-b-md">
                    FERDINANFIV
            </div>
        </div>

    </div>
</body>
</html>
