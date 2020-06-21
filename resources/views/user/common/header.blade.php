<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Scoutpads | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('public/admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ URL::asset('public/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ URL::asset('public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ URL::asset('public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ URL::asset('public/admin/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('public/admin/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ URL::asset('public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ URL::asset('public/admin/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ URL::asset('public/admin/plugins/summernote/summernote-bs4.css') }}">
   <link rel="stylesheet" href="{{ URL::asset('public/admin/dist/css/custom.css') }}">
   <link rel="stylesheet" href="{{ URL::asset('public/admin/dist/css/jquery-confirm.min.css') }}">
  

   
   
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" >&nbsp;</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link">&nbsp;</a>
      </li>
      
    </ul>

    

    
  </nav>
  <!-- /.navbar -->