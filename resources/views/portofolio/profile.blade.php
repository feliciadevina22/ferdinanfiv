<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('/css/sb-admin-2.min.css')}}" rel="stylesheet">


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
    </style>
</head>

<body>
    <div class="position-ref full-height" ; background-repeat: no-repeat;">
        <!-- <img src="{{asset('bg/welcomebg.jpg')}}" style="float: left; position: relative; left: 0;"> -->
        @if (Route::has('login'))
        <div class="top-left links">
            <br>
            <a href="#" style="font-size: 20px;">CONTACT</a>
        </div>
        <div class="top-right links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('about') }}">About</a>
            <a href="{{ url('portofolio') }}">Portofolio</a>
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
        <br><br>

        <div class="container-fluid">



            <!-- Content Row -->
            <div class="row">
                    <!-- First Column -->
                    <div class="col-lg-4">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <center>
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/LINE_logo.svg/1200px-LINE_logo.svg.png" style="max-height: 200px;">
                                </center>

                                <br>

                                <div class="card-header py-3">
                                    <center>
                                        <h6 class="m-0 font-weight-bold text-primary">ferdinanfiv</h6>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <center>
                                    <img src="https://cdn3.iconfinder.com/data/icons/linecons-free-vector-icons-pack/32/mail-512.png" style="max-height: 200px;">
                                </center>

                                <br>

                                <div class="card-header py-3">
                                    <center>
                                        <h6 class="m-0 font-weight-bold text-primary">ferdinanfiv@something.com</h6>
                                    </center>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <center>
                                    <img src="https://instagram-brand.com/wp-content/themes/ig-branding/assets/images/ig-logo-email.png" style="max-height: 200px;">
                                </center>

                                <br>

                                <div class="card-header py-3">
                                    <center>
                                        <h6 class="m-0 font-weight-bold text-primary">ferdinanfiv</h6>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



    </div>

    </div>
</body>

</html>