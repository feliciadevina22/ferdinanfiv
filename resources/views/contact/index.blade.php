<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Contact - FERDINANFIV</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>

@extends('layouts.header')

  <!-- page title -->
  <section class="page-title bg-primary position-relative">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="text-white font-tertiary">Contacts</h1>
        </div>
      </div>
    </div>
    <!-- background shapes -->
    <img src="images/illustrations/page-title.png" alt="illustrations" class="bg-shape-1 w-100">
    <img src="images/illustrations/leaf-pink-round.png" alt="illustrations" class="bg-shape-2">
    <img src="images/illustrations/dots-cyan.png" alt="illustrations" class="bg-shape-3">
    <img src="images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
    <img src="images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-5">
    <img src="images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-6">
    <img src="images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-7">
  </section>
  <!-- /page title -->

  <!-- contact -->
  <section class="section section-on-footer" data-background="images/backgrounds/bg-dots.png">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">Contact Info</h2>
        </div>
        <div class="col-lg-8 mx-auto">
          <div class="bg-white rounded text-center p-5 shadow-down">

            {!! Form::open([
            'action' => 'ContactsController@store',
            'method' => 'POST',
            'enctype'=>'multipart/form-data'
            ]) !!}

            <h4 class="mb-80">Contact Form</h4>

            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ $message }}</strong>
            </div>
            @endif
            
            <class="row">
              <div class="col-md-6" style="max-width: 100%">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', '', 
              ['class' => 'form-control px-0 mb-4', 
              'placeholder' => 'Full Name'])}}
                <!-- <input type="text" id="name" name="name" placeholder="Full Name" class="form-control px-0 mb-4"> -->
              </div>

              <div class="col-md-6" style="max-width: 100%">
                {{Form::label('email', 'Email')}}
                {{Form::email('email', '', 
              ['class' => 'form-control px-0 mb-4', 
              'placeholder' => 'Email Address'])}}

                <!-- <input type="email" id="email" name="email" placeholder="Email Address" class="form-control px-0 mb-4"> -->
              </div>

              <div class="col-12">
                {{Form::label('message', 'Message')}}
                {{Form::textarea('message', '', 
              ['class' => 'form-control px-0 mb-4', 
              'placeholder' => 'Type Message Here'])}}

                <!-- <textarea name="message" id="message" class="form-control px-0 mb-4"placeholder="Type Message Here"></textarea> -->
              </div>

              {{ Form::hidden('isEmail', '0') }}
              {{ Form::hidden('isDeleted', '0') }}
              {{ Form::hidden('adminmessage', '') }}

              <div class="col-lg-6 col-10 mx-auto">
                {{Form::submit('Save', ['class'=>'btn btn-primary w-100'])}}
                {!! Form::close() !!}
                <!-- <button class="btn btn-primary w-100">send</button> -->
              </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /contact -->
  
<!-- footer -->
@include('layouts.footer')
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- filter -->
<script src="plugins/shuffle/shuffle.min.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>

</html>