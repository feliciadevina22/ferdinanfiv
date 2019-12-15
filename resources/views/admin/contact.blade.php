<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FERDINANFIV Admin- PROFILE</title>

  <!-- Custom fonts for this template-->
  <!-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">  -->

  <link href="{{ asset('/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('/css/sb-admin-2.min.css')}}" rel="stylesheet">

  <!-- jquery -->
  <!-- datatables -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<script type="text/javascript">
		$(document).ready( function () {
			$('#example').DataTable();
		} );
	</script>



</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" style="position: fixed" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <br>
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin">
        <div class="sidebar-brand-icon rotate-n-15">
          <!-- <i class="fas fa-laugh-wink"></i> -->
        </div>
        <div class="sidebar-brand-text mx-3">FERDINANFIV Admin</div>
      </a>
      
      
      <br>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item ">
        <a class="nav-link" href="{{url('admin')}}">
          <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
          <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <!-- <hr class="sidebar-divider"> -->

        <!-- Heading -->
        <div class="sidebar-heading">
          <!-- Interface -->
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="{{url('adminportofolio')}}" data-toggle="" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <!-- <i class="fas fa-fw fa-cog"></i> -->
            <span>Portofolio</span>
          </a>
        <!-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div> -->
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('adminstore')}}" data-toggle="" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <!-- <i class="fas fa-fw fa-wrench"></i> -->
          <span>Store</span>
        </a>
        <!-- <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div> -->
      </li>

      <!-- Divider -->


      <!-- Heading -->
      <div class="sidebar-heading">
        <!-- Addons -->
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('adminprofile')}}" data-toggle="" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <!-- <i class="fas fa-fw fa-folder"></i> -->
          <span>Profile</span>
        </a>
        <!-- <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div> -->
      </li>

      <li class="nav-item active">
        <a class="nav-link collapsed" href="admincontact" data-toggle="" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <!-- <i class="fas fa-fw fa-folder"></i> -->
          <span>Contact</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        
        @else
        <li class="nav-item dropdown">
          <button style="color: black" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </button>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        
      </li>
      @endguest
    </div>

  </ul>
  <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" style="margin-left: 15%;" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-light bg-white  mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <!-- <i class="fa fa-bars"></i> -->
          </button>

          <!-- Topbar Search -->
          <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form> -->

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Feedbacks</h1>
          <p class="mb-4">Feedbacks from people</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Contact</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width=3%>No</th>
                      <th width=17%>Name</th>
                      <th width=20%>Email</th>
                      <th width=40%>Message</th>
                      <th width=20% colspan="2">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $number = 1; ?>
                    @if(count($contact)>0)
                    @foreach ($contact as $c)
                    @if($c->isEmail === 0 && $c->isDeleted ===0)
                    <tr>
                      <td>
                        <center><?php echo $number;
                                $number++; ?></center>
                      </td>
                      <td>{{$c->name}}</td>
                      <td>{{$c->email}}</td>
                      <td>{{$c->message}}</td>
                      <td><a href="contact/{{$c->id}}/edit" class="btn btn-primary" role="button">Send Email</a>
                      </td>
                      <td>
                        {!! Form::open(['action' => ['ContactsController@update',
                        $c->id],'method' => 'PUT',
                        'class' => 'float-left']) !!}

                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                          <button type="button" class="close" data-dismiss="alert">×</button>
                          <strong>{{ $message }}</strong>
                        </div>
                        @endif

                        {{ Form::hidden('email', $c->email) }}
                        {{ Form::hidden('name', $c->name) }}
                        {{ Form::hidden('isEmail', '0') }}
                        {{ Form::hidden('isDeleted', '1') }}
                        {{ Form::hidden('message', $c->message) }}
                        {{ Form::hidden('adminmessage', $c->adminmessage) }}

                        {{Form::submit("Delete", ['class'=>'btn btn-danger'])}}
                        {!! Form::close() !!}</td>
                    </tr>
                    @endif
                    @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>

         <!-- DataTales Example -->
         <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Contact</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width=3%>No</th>
                      <th width=17%>Name</th>
                      <th width=20%>Email</th>
                      <th width=21%>Message</th>
                      <th width=21%>Reply Message</th>
                      <th width=18% colspan="2">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $number = 1; ?>
                    @if(count($contact)>0)
                    @foreach ($contact as $c)

                    @if($c->isEmail === 1)
                    <tr>
                      <td>
                        <center><?php echo $number;
                                $number++; ?></center>
                      </td>
                      <td>{{$c->name}}</td>
                      <td>{{$c->email}}</td>
                      <td>{{$c->message}}</td>
                      <td>{{$c->adminmessage}}</td>
                      <td>You have answer this feedback </td>
                      <td>
                        {!! Form::open(['action' => ['ContactsController@destroy',
                        $c->id],'method' => 'POST',
                        'class' => 'float-left']) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit("Delete", ['class'=>'btn btn-danger'])}}
                        {!! Form::close() !!}</td>
                    </tr>
                    @endif

                    @if($c->isDeleted === 1)
                    <tr>
                      <td>
                        <center><?php echo $number;
                                $number++; ?></center>
                      </td>
                      <td>{{$c->name}}</td>
                      <td>{{$c->email}}</td>
                      <td>{{$c->message}}</td>
                      <td style="color: red">No Reply</td>
                      <td style="color: red">This feedback has been deleted</td>
                      <td>
                        {!! Form::open(['action' => ['ContactsController@destroy',
                        $c->id],'method' => 'POST',
                        'class' => 'float-left']) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit("Delete", ['class'=>'btn btn-danger'])}}
                        {!! Form::close() !!}</td>
                    </tr>
                    @endif

                    @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>