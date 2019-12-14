
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>FERDINANFIV - {{$portofolio->title}} </title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="../plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="../plugins/themify-icons/themify-icons.css">

  <!-- Main Stylesheet -->
  <link href="../css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="../images/favicon.ico" type="image/x-icon">

</head>

<body>


  @include('layouts.header')
  

<!-- page title -->
<section class="page-title bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="text-white font-tertiary">
        	{{$portofolio->title}}
        </h1>
      </div>
    </div>
  </div>
  <!-- background shapes -->
  <img src="../images/illustrations/page-title.png" alt="illustrations" class="bg-shape-1 w-100">
  <img src="../images/illustrations/leaf-pink-round.png" alt="illustrations" class="bg-shape-2">
  <img src="../images/illustrations/dots-cyan.png" alt="illustrations" class="bg-shape-3">
  <img src="../images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
  <img src="../images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-5">
  <img src="../images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-6">
  <img src="../images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-7">
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
      </div>
    </div>
    <div class="row shuffle-wrapper">
      
      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
        <div class=" rounded hover-wrapper">
          <img src="../storage/portofolio_image/{{$portofolio->pic}}" alt="portfolio-image" class="img-fluid rounded w-100 d-block" >
         
        </div>
      </div>
      <div style="margin-left: 400px">
    	<h4>
    		{{$portofolio->desc}}
    	</h4>
    </div>

    </div>
    
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
<!-- <section class="section section-on-footer" data-background="../images/backgrounds/bg-dots.png">
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
@include('layouts.footer')
<!-- /footer -->

<!-- jQuery -->
<script src="../plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="../plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="../plugins/slick/slick.min.js"></script>
<!-- filter -->
<script src="../plugins/shuffle/shuffle.min.js"></script>

<!-- Main Script -->
<script src="../js/script.js"></script>

</body>
</html>