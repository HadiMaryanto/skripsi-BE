<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from radixtouch.in/templates/admin/aegis/source/light/vector-map.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Aug 2019 04:49:51 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Aegis - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">  
  
  <!-- <link rel="stylesheet" href="{{asset('assets/bundles/datatables/datatables.min.css')}}"> -->
  <!-- <link rel="stylesheet" href="{{asset('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}"> -->
  <link rel="stylesheet" href="{{asset('assets/css/ol.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/izitoast/css/iziToast.min.css')}}">
  <!-- <link rel="stylesheet" href="{{asset('assets/bundles/jqvmap/dist/jqvmap.min.css')}}"> -->
  <link rel="stylesheet" href="{{asset('assets/bundles/flag-icon-css/css/flag-icon.min.css')}}">  
  
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"> -->
  <link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
  
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href="{{asset('assets/img/favicon.ico')}}" />
  <style>
    .map {
      width: 100%;
      height: 400px;
    }
    iframe{
      width: 100%;
      height: 500px;
    }    
  </style>
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
        @include('layouts/header')
      

        @include('layouts/sidebar')
      <!-- Main Content -->

        @yield('content')
      
        @include('layouts.footer')
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{asset('assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  
  <script src="{{asset('assets/bundles/izitoast/js/iziToast.min.js')}}"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <!-- <script src="{{asset('assets/bundles/jqvmap/dist/jquery.vmap.min.js')}}"></script> -->
  <!-- <script src="{{asset('assets/bundles/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script> -->
  <!-- <script src="{{asset('assets/bundles/jqvmap/dist/maps/jquery.vmap.indonesia.js')}}"></script> -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
  <!-- Page Specific JS File -->
  <!-- <script src="{{asset('assets/bundles/datatables/datatables.min.js')}}"></script>  -->
  <!-- <script src="{{asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script> -->
  <!-- <script src="{{asset('assets/bundles/datatables/export-tables/dataTables.buttons.min.js')}}"></script> -->
  <!-- <script src="{{asset('assets/bundles/datatables/export-tables/buttons.flash.min.js')}}"></script> -->
  <!-- <script src="{{asset('assets/bundles/datatables/export-tables/jszip.min.js')}}"></script> -->
  <!-- <script src="{{asset('assets/bundles/datatables/export-tables/pdfmake.min.js')}}"></script> -->
  <!-- <script src="{{asset('assets/bundles/datatables/export-tables/vfs_fonts.js')}}"></script> -->
  <!-- <script src="{{asset('assets/bundles/datatables/export-tables/buttons.print.min.js')}}"></script> -->
  <!-- <script src="{{asset('assets/js/page/datatables.js')}}"></script> -->

  <script src="{{asset('assets/js/ol.js')}}"></script>
  <script src="{{asset('assets/js/map.js')}}"></script>
  <!-- <script src="{{asset('assets/js/page/vector-map.js')}}"></script> -->
  <!-- Template JS File -->
  <script src="{{asset('js/datatable.js')}}"></script>
  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <!-- <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> -->
  <script src="{{asset('assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset('assets/js/custom.js')}}"></script>
  <!-- <script src="{{asset('assets/js/grafik.js')}}"></script> -->
  <!-- <script src="{{asset('assets/js/barchar.js')}}"></script> -->
  