<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">

    <!-- favicon -->
    <link rel="icon" href="{{asset('logo3.png')}}" ype="image/png">
    @stack('styles')

</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('logo.png')}}" alt="logo" height="96" width="96">
    </div>

    @section('navbar')
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link"   href="{{ url('/dashboard') }}" title="home">
                        <i class="fa fa-home"></i>
                        <!-- <span class="badge badge-warning navbar-badge">15</span> -->
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#" title="Logged in user">
                            <i class="far fa-user"></i>
                            <!-- <span class="badge badge-warning navbar-badge">15</span> -->
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('signout') }}" class="dropdown-item">
                                <i class="fas fa-sign-out-alt mr-0"></i> Log out
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>

                </ul>
            </nav>
        <!-- /.navbar -->
    @show

    @section('sidebar')
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="{{URL::to('/')}}" class="brand-link">
                    <img src="{{asset('logo.png')}}" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Dairy MS</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <!-- @TODO : Change the avatar based on gender -->
                            <img src="{{asset('dist/img/avatar3.png')}}" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block"> {{ ucfirst(strtolower(Auth::user()->name))  }}</a>
                        </div>
                    </div>



                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                 with font-awesome or any other icon font library -->
                            <!--
                                (request()->is('admin/cities')) ? 'active' : '')

                                if( request()->is('admin/cities') ){
                                    echo "active";
                                }else{
                                    echo "";
                                }

                            -->
                            <li class="nav-item">
                                <a href="{{URL::to('/')}}" class="nav-link {{ (request()->is('role*')) ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>
                                        Home
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{URL::to('/dashboard')}}" class="nav-link {{ (request()->is('role*')) ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-chalkboard-teacher"></i>                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="{{URL::to('roles')}}" class="nav-link {{ (request()->is('role*')) ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-user-cog"></i>
                                    <p>
                                        Roles
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{URL::to('users')}}" class="nav-link {{ (request()->is('user*')) ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Users
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{URL::to('cows')}}" class="nav-link {{ (request()->is('cow*')) ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-list"></i>                                    <p>
                                        Herd
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{URL::to('productions')}}" class="nav-link {{ (request()->is('produce*')) ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-hand-holding-water"></i>
                                    <p>
                                        Produce
                                    </p>
                                </a>
                            </li>

                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="p-3">
                    <h5>Title</h5>
                    <p>Sidebar content</p>
                </div>
            </aside>
        <!-- /.control-sidebar -->
    @show

    @yield('content')

    @section('footer')
        <!-- Main Footer -->
        <footer class="main-footer">
                <!-- To the right -->
                <div class="float-right d-none d-sm-inline">
                    {{config('app.display')}} &copy; {{date('Y')}}
                </div>
                <!-- Default to the left -->
                <small>
                    <strong></strong> 
                </small>
            </footer>
    @show

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- Additional Scripts -->
@stack('scripts')
</body>
</html>