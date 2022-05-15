<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @include('layouts.backend-dashboard.stylesheet')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 @include('layouts.backend-dashboard.navbar')

 @include('layouts.backend-dashboard.sidebar')
 
  <!-- Content Wrapper. Contains page content -->
  
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('layouts.backend-dashboard.footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('layouts.backend-dashboard.javascript')
@yield('extra_javascript')
@stack('custom-scripts')
</body>
</html>
