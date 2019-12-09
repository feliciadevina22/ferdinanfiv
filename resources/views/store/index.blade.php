
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>FERDINANFIV'S PORTOFOLIO </title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('plugins/bootstrap/bootstrap.min.css')}}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{{asset('plugins/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('css/fontawesome/all.css')}}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Main Stylesheet -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">

</head>

<body>


  <header class="navigation fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand font-tertiary h3" href="{{url('/')}}"><h3 class="font-tertiary text-white" style="margin-top: 20px">FERDINANFIV</h3></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
      aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navigation">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('about')}}">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('store')}}">Store</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('portofolio')}}">Portofolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('contact')}}">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<!-- page title -->
<section class="page-title bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="text-white font-tertiary">Store</h1>
      </div>
    </div>
  </div>
  <!-- background shapes -->
  <img src="{{asset('images/illustrations/page-title.png')}}" alt="illustrations" class="bg-shape-1 w-100">
  <img src="{{asset('images/illustrations/leaf-pink-round.png')}}" alt="illustrations" class="bg-shape-2">
  <img src="{{asset('images/illustrations/dots-cyan.png')}}" alt="illustrations" class="bg-shape-3">
  <img src="{{asset('images/illustrations/leaf-orange.png')}}" alt="illustrations" class="bg-shape-4">
  <img src="{{asset('images/illustrations/leaf-yellow.png')}}" alt="illustrations" class="bg-shape-5">
  <img src="{{asset('images/illustrations/dots-group-cyan.png')}}" alt="illustrations" class="bg-shape-6">
  <img src="{{asset('images/illustrations/leaf-cyan-lg.png')}}" alt="illustrations" class="bg-shape-7">
</section>
<!-- /page title -->

<!-- portfolio -->
<section class="section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12">
        <!-- <div class="btn-group btn-group-toggle justify-content-center d-flex" data-toggle="buttons">
          <label class="btn btn-sm btn-primary active">
            <input type="radio" name="shuffle-filter" value="all" checked="checked" />All
          </label>
          <label class="btn btn-sm btn-primary">
            <input type="radio" name="shuffle-filter" value="design" />UI/UX Design
          </label>
          <label class="btn btn-sm btn-primary">
            <input type="radio" name="shuffle-filter" value="branding" />BRANDING
          </label>
          <label class="btn btn-sm btn-primary">
            <input type="radio" name="shuffle-filter" value="illustration" />ILLUSTRATION
          </label>
        </div> -->


        <?php 
        if(isset($_GET['search'])){
          ?>
          <form action="../store/search" method="GET" role="search">
            
            <div class="input-group">
              <input type="search" class="form-control" name="search"
              placeholder="Search item"> 
              <span class="input-group-prepend">
                <button type="submit" class="btn btn-default">
                 <i class="fas fa-search"></i>
               </button>
             </span>
           </div>
         </form>
         <?php
       }else{
        ?>
        <form action="store/search" method="GET" role="search">
          
          <div class="input-group">
            <input type="search" class="form-control" name="search"
            placeholder="Search item"> 
            <span class="input-group-prepend">
              <button type="submit" class="btn btn-default">
               <i class="fas fa-search"></i>
             </button>
           </span>
         </div>
       </form>
       <?php
     }
     ?>






   </div>
 </div>
 <div class="row shuffle-wrapper">
  @if(count($store)>0)
  @foreach ($store as $s)
  <div class="col-lg-3 col-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]" style="box-shadow: 0px 1px 3px #909999; margin: 20px; padding: 15px;">
    <div class="position-relative rounded hover-wrapper" style="">


      <?php 
      if(isset($_GET['search'])){
        ?>
        <a class="" href="{{$s->id}}">
          <img src="../storage/store_image/{{$s->pic}}" alt="store-image" class="img-fluid rounded w-100 d-block">

          <?php
        }else{

          ?>
          <a class="" href="store/{{$s->id}}">
            <img src="storage/store_image/{{$s->pic}}" alt="store-image" class="img-fluid rounded w-100 d-block">
          </a>
          <?php
        }
        ?>



      </div>
      <div style="text-align: center; font-family: century gothic;  max-height: 90px; padding-bottom: 20px;">
        <br>
        <b>
          {{$s->title}}
        </b>
        <br><br>
        IDR {{$s->price}}
      </div>

    </div>

    @endforeach
    @endif
  </div>
</section>
<!-- /portfolio -->

<!-- clients -->
<!-- <section class="section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">My Clients</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="client-logo-slider d-flex align-items-center">
          <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="images/clients-logo/client-logo-1.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="images/clients-logo/client-logo-2.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="images/clients-logo/client-logo-3.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="images/clients-logo/client-logo-4.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="images/clients-logo/client-logo-5.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="images/clients-logo/client-logo-1.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="images/clients-logo/client-logo-2.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="images/clients-logo/client-logo-3.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="images/clients-logo/client-logo-4.png" alt="client-logo"></a>
          <a href="#" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="images/clients-logo/client-logo-5.png" alt="client-logo"></a>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- /clients -->

<!-- contact -->
<!-- <section class="section section-on-footer" data-background="images/backgrounds/bg-dots.png">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">Contact Info</h2>
      </div>
      <div class="col-lg-8 mx-auto">
        <div class="bg-white rounded text-center p-5 shadow-down">
          <h4 class="mb-80">Contact Form</h4>
          <form action="#" class="row">
            <div class="col-md-6">
              <input type="text" id="name" name="name" placeholder="Full Name" class="form-control px-0 mb-4">
            </div>
            <div class="col-md-6">
              <input type="email" id="email" name="email" placeholder="Email Address" class="form-control px-0 mb-4">
            </div>
            <div class="col-12">
              <textarea name="message" id="message" class="form-control px-0 mb-4"
              placeholder="Type Message Here"></textarea>
            </div>
            <div class="col-lg-6 col-10 mx-auto">
              <button class="btn btn-primary w-100">send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- /contact -->

<!-- footer -->
<footer class="bg-dark footer-section">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5 class="text-light">Email</h5>
          <p class="text-white paragraph-lg font-secondary">steve.fruits@email.com</p>
        </div>
        <div class="col-md-4">
          <h5 class="text-light">Phone</h5>
          <p class="text-white paragraph-lg font-secondary">+880 2544 658 256</p>
        </div>
        <div class="col-md-4">
          <h5 class="text-light">Address</h5>
          <p class="text-white paragraph-lg font-secondary">125/A, CA Commercial Area, California, USA</p>
        </div>
      </div>
    </div>
  </div>
  <div class="border-top text-center border-dark py-5">
    <p class="mb-0 text-light">Copyright ©<script>
      var CurrentYear = new Date().getFullYear()
      document.write(CurrentYear)
    </script></p>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="{{asset('plugins/jQuery/jquery.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- slick slider -->
<script src="{{asset('plugins/slick/slick.min.js')}}"></script>
<!-- filter -->
<script src="{{asset('plugins/shuffle/shuffle.min.js')}}"></script>

<!-- Main Script -->
<script src="{{asset('js/script.js')}}"></script>

</body>
</html>