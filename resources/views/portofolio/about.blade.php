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
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 200vh;
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

        .links>a {
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

        .respo {
            width: 100%;
            max-width: 800px;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="position-ref full-height">

        @if (Route::has('login'))

        <div class="top-right links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('about') }}">About</a>
            <a href="portofolio">Portofolio</a>
            <a href="#">Store</a>
            <a href="{{ url('profile') }}">Contact</a>
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

        <div style="position:absolute; margin:0%;">
            <div style="float: left; margin-left: 50px;margin-top: 150px; width:50%;">
                <img src="{{asset('bg/WALKING WITH CONFIDENCE.jpg')}}" class="respo" style="float: left; position: relative; left: 0;">
            </div>

            <div style="float: right; right:80px; margin-top: 12%; margin-bottom: 1%; top:20%; background-color:wheat; padding:2%; position:sticky; width:40%;">
                <div class="title m-b-md">
                    ABOUT
                </div>

                <div style=" width:100%;">
                    <p style="font-size:large;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>

    </div>
</body>

</html>