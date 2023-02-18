
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{config('app.name')}} - @yield('title')</title>

  <!-- General CSS Files -->

  <link rel="stylesheet" href="{{asset('stisla/assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('stisla/assets/modules/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('stisla\assets\modules\datatables\DataTables-1.10.16\css\dataTables.bootstrap4.min.css')}}">
  <link rel="canonical" href="https://getbootstrap.com/docs/4.6/components/modal/">
  <link href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" rel="stylesheet">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('stisla/assets/modules/jqvmap/dist/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{asset('stisla/assets/modules/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{asset('stisla/assets/modules/prism/prism.css')}}">
  <link rel="stylesheet" href="{{asset('stisla/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('stisla/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('stisla/assets/modules/fullcalendar/fullcalendar.min.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('stisla/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('stisla/assets/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>

<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
        @includeIf('layouts.header')
      <div class="main-sidebar sidebar-style-2">
        @includeIf('layouts.sidebar')
      </div>

      <!-- Main Content -->
      @yield('content')
      @includeIf('layouts.footer')
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('stisla/assets/modules/jquery.min.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/popper.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/tooltip.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('stisla/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('stisla/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/moment.min.js')}}"></script>
  <script src="{{asset('stisla/assets/js/stisla.js')}}"></script>


  <!-- JS Libraies -->
  <script src="{{asset('stisla/assets/modules/jquery.sparkline.min.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/chart.min.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/summernote/summernote-bs4.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/fullcalendar/fullcalendar.min.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{asset('stisla/assets/js/page/bootstrap-modal.js')}}"></script>
  <script src="{{asset('stisla/assets/js/page/index.js')}}"></script>
  <script src="{{asset('stisla/assets/js/page/modules-calendar.js')}}"></script>
  <script src="{{asset('stisla/assets/js/page/bootstrap-modal.js')}}"></script>

  <!-- Template JS File -->
  <script src="{{asset('stisla/assets/js/scripts.js')}}"></script>
  <script src="{{asset('stisla/assets/js/custom.js')}}"></script>
</body>
</html>
