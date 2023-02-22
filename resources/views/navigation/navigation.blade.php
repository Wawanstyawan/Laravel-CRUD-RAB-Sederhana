<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>RAB Kegiatan @yield('title')</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Aguafina+Script&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 

  <link rel="shortcut icon" href="{{asset('template/img/logo_favicon.png')}}">
  <link rel="stylesheet" href="{{asset('template/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('template/css/main.css')}}">
  <link rel="stylesheet" href="{{asset('template/css/layout.css')}}">
  <link rel="stylesheet" href="{{asset('template/css/sweetalert2.min.css')}}">
  <link rel="stylesheet" href="{{asset('template/css/Chart.min.css')}}">
  <link rel="stylesheet" href="{{asset('template/css/bootstrap-select.min.css')}}">
</head>

<style>
  .navbar-nav{
    flex-direction: row;
  }
  .nav-link {
    padding-right: .5rem !important;
    padding-left: .5rem !important;
  }

  /* Fixes dropdown menus placed on the right side */
  .ml-auto .dropdown-menu {
    left: auto !important;
    right: 0px;
  }

</style>
<body class="wrap">         
  <aside class="main-side bg-side">
    <div class="container">
      <div class="slide-button d-flex">
        <a class="ml-auto btn-side" data-widget="pushmenu" href="#" role="button" id="btn_side"><i class="fa fa-arrow-left"></i></a>
      </div>
      <div class="navbar justify-content-center text-center">
        <!-- <div class=""></div> -->              
        <h3>Menu</h3>             
      </div>            
      <div class="navbar-main">              
        <ul>
         <li class="navbar-item @yield('home')">
          <a href="{{route('home')}}" class="btn-custom-menu active">
            <span class="fa fa-dashboard"></span>
            <p class="custom-menu-text">                          
              Dashboard
            </p>                        
          </a>
        </li>
        <li class="navbar-item @yield('kegiatans')">
          <a href="{{ route('kegiatans.index') }}" class="btn-custom-menu">
            <span class="fa fa-cash-register"></span>
            <p class="custom-menu-text">  
              RAB Kegiatan
            </p>
          </a>
        </li>                    
        <li class="navbar-item @yield('katalogs')">
          <a href="{{ route('katalogs.index') }}" class="btn-custom-menu ">
            <span class="fa fa-store"></span>
            <p class="custom-menu-text">  
              Katalog
            </p>
          </a>
        </li>     


        @if (\Auth::user()->role_id == 1) 
        <li class="navbar-item {{Request::segment(1) == 'user' ? 'active' : ''}}">
          <a href="{{route('user')}}" class="btn-custom-menu">
            <span class="fa fa-user"></span>
            <p class="custom-menu-text">                                          
              Data Pengguna
            </p>
          </a>
        </li>    
        
        @endif                
      </ul>
    </div>
  </div>        
</aside>   
<nav class="navbar navbar-expand atas navbar-dark topbar static-top shadow" style="background-color: #262930;">
  <div class="collapse navbar-collapse" id="navbarNav">          
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <div class="content-header ml-4 mt-2">
          <h2>@yield('title')</h2>
        </div> 
      </li>            
    </ul> 
    <ul class="navbar-nav ml-auto navbar-user-profile">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle font-weight-bold text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          @if (\Auth::user()->foto == null)
          <img src="{{asset('template/img/user1.svg')}}" alt="" class="user-profile-img-sm">
          @else
          <img src="{{asset('storage/profile/'.\Auth::user()->foto)}}" alt="" class="user-profile-img-sm">
          @endif   
          {{\Auth::user()->username}} 
        </a>
        <div class="dropdown-menu user-area" aria-labelledby="navbarDropdown">                
                  <!-- <div class="col-sm-12">                  
                    <div class="d-flex justify-content-center box-user-area">
                      <img src="/img/programmer.png" alt="" class="user-profile-img-area">
                    </div>
                  </div>                    -->                    
                  <a href="{{route('profile_user')}}" class="dropdown-item btn-custom-sm"><i class="fa fa-user"></i> &nbsp; Edit Profile</a>                                        
                  <a href="#" onclick="$('#logout').submit()" id="logout_button" class="dropdown-item btn-custom-sm btn-logout"><i class="fa fa-sign-out-alt"></i> &nbsp; Logout</a>                    
                  <form action="{{route('logout')}}" method="POST" id="logout">            
                    @csrf
                  </form> 
                </div>
              </li>
            </ul>         
          </div>
        </nav>          
        <section class="content">           
          <div class="container-fluid">            
            <div class="container">
              <div class="row">            
                @yield('content')                   
              </div>            
            </div>     
          </div>
        </section>    
        @isset($confirmModal)
        {!! $confirmModal !!}
        @endisset          
        <footer>
          <div class="d-flex justify-content-center">                                                         
            <div class="d-flex align-items-center">                                        
              <p>Copyright &copy; RAB Kegiatan 2022</p>
            </div>                                                                            
          </div>                      
        </footer> 
        <script src="{{asset('template/js/fontawesome.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('template/js/jquery-3.3.1.slim.min.js')}}"></script>
        <script src="{{asset('template/js/popper.min.js')}}"></script>
        <script src="{{asset('template/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('template/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('template/js/app.js')}}"></script>
        <script src="{{asset('template/js/Chart.min.js')}}"></script>
        <script src="{{asset('template/js/sweetalert2.all.min.js')}}"></script>            
        <script src="{{asset('template/js/bootstrap-select.min.js')}}"></script>

        @stack('js')

        <script type="text/javascript">
          $('#edit').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('myid')
            var urn_kebutuhan = button.data('myurn_kebutuhan')
            var sumber_barang = button.data('mysumber_barang')
            var kuantitas = button.data('mykuantitas')
            var harga_satuan = button.data('myharga_satuan')

            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #e_bth').val(urn_kebutuhan);
            modal.find('.modal-body #e_sbrg').val(sumber_barang);
            modal.find('.modal-body #e_ktt').val(kuantitas);
            modal.find('.modal-body #e_hsat').val(harga_satuan);
          })
        </script>
        @if (session('status'))
        {!!session('status')!!}
        @endif
        @stack('scripts')      
      </body>
      </html>