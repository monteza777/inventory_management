<!DOCTYPE html>
<html>
  @include('include.header')

<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  @include('layouts.header')
  <!-- Sidebar -->
  @include('layouts.sidebar')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <!-- li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li-->
        <!-- <li class="active">@yield('page_title')</li> -->
      </ol>
    </section>
    <h1 class="container">@yield('head_title')</h1>
    <section class="content">

      @section('content')
      @show
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  @include('layouts.footer')
<!-- REQUIRED JS SCRIPTS -->

 <!-- jQuery 2.1.3 -->
  @include('include.script')
</body>
</html>
