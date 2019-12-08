
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>About Template</title>

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
<section class="page-title-alt bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-white font-tertiary">About Me</h1>
      </div>
    </div>
  </div>
  <!-- background shapes -->
  <img src="images/illustrations/leaf-bg-top.png" alt="illustrations" class="bg-shape-1 w-100">
  <img src="images/illustrations/dots-group-sm.png" alt="illustrations" class="bg-shape-2">
  <img src="images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-3">
  <img src="images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
  <img src="images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-5">
  <img src="images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-6">
</section>
<!-- /page title -->

<!-- about -->
<section class="section pt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <p>{{$abouts[0]->about}}</p>
      </div>
      <div class="col-md-4 text-center drag-lg-top">
        <div class="shadow-down mb-4">
          <img src="storage/about_image/{{$abouts[0]->pic}}" alt="author" class="img-fluid w-100 rounded-lg border-thick border-white">
        </div> 
        <h4>FERDINANFIV</h4>
      </div>
    </div>
  </div>
</section>
<!-- /about -->

<!-- Work Process -->
<section class="section">
  <div class="container">
    <div class="row justify-content-around">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Work Process</h2>
      </div>
      <div class="col-lg-3 col-md-4 text-center hover-shadow pt-3">
        <div class="">
          <img src="images/icons/plan.png" class="mb-4" alt="icon">
          <h4 class="mb-4">Research and Plan</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 text-center hover-shadow pt-3">
        <img src="images/icons/design.png" class="mb-4" alt="icon">
        <h4 class="mb-4">Design and Develop</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua.</p>
      </div>
      <div class="col-lg-3 col-md-4 text-center hover-shadow pt-3">
        <img src="images/icons/print.png" class="mb-4" alt="icon">
        <h4 class="mb-4">Deliver</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua.</p>
      </div>
    </div>
  </div>
</section>
<!-- ./Work Process -->

<!-- team -->
<section class="section bg-cover" data-background="images/backgrounds/team-bg.png">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">My Contact</h2>
      </div>


      @foreach($profiles as $p)
      <div class="col-md-4 col-sm-6 mb-4 mb-md-0">
        <div class="card text-center">
          <img src="storage/profile_image/{{$p->pic}}" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title">{{$p->name}}</h4>
            <p class="text-light font-secondary">{{$p->desc}}</p>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>
<!-- /team -->

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