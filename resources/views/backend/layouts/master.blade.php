<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.includes.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('sweetalert::alert')
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
@include('backend.includes.header')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('backend.includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
   @yield('content')
    <!-- /.content-wrapper -->
@include('backend.includes.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('backend.includes.foot')
</body>

</html>
