<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Royale Karthago Hotel Djerba</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset ('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset ('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
<br/>
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{asset('dashboard') }}">
        <div class="sidebar-brand-icon ">
          <img width="70%" height="50%" src="https://res.cloudinary.com/hotelnet-srl/image/upload/h_250,c_scale,f_auto/v1558974391/Hotels/8784/HotelLogo/jsffty2edjsevp3eyilq"/>
          
        </div>
        
      </a>
      <br/>


      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item ">
        <a class="nav-link" href="{{asset('dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="{{asset('news') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>News</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
      <a class="nav-link" href="{{asset('deals') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Deals</span></a>
      </li>

       <!-- Nav Item - Tables -->
       <li class="nav-item">
        <a class="nav-link" href="{{asset('amenitys') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Amenitys</span></a>
        </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>  
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="post">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            
            <img class="img-profile rounded-circle" src="data:image/png;base64,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">
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>
          
          <!-- Dropdown - User Information -->
         <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
         <!-- //<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">-->
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form> 
        </div>
        </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


      </div>
      <!-- End of Main Content -->
      @yield("content")
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            
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
  <script src="{{ asset ('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset ('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset ('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset ('js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset ('vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset ('js/demo/chart-area-demo.js')}}"></script>
  <script src="{{ asset ('js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>
