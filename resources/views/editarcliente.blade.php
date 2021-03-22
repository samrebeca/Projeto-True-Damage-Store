<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url ('assets2/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{ url ('assets2/img/icon.jpg')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Administrador do sistema
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ url ('assets2/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ url ('assets2/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ url ('assets2/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="{{route('adminmaster')}}" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{ url ('assets2/img/icon.jpg')}}">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="{{route('adminmaster')}}" class="simple-text logo-normal">
          True Damage Store
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
        </div> -->
    </a>
</div>
<div class="sidebar-wrapper">
  <ul class="nav">
    <li>
      <a href="{{route('addproduto')}}">
        <i class="nc-icon nc-simple-add"></i>
        <p>Adicionar produto</p>
      </a>
    </li>
    <li>
      <a href="{{route('visucliente')}}">
        <i class="nc-icon nc-bullet-list-67"></i>
        <p>Visualizar clientes</p>
      </a>
    </li>
    <li>
      <a href="{{route('editarproduto')}}">
        <i class="nc-icon nc-app"></i>
        <p>Editar produtos</p>
      </a>
    </li>
    <li>
      <a href="{{route('editarcliente')}}">
        <i class="nc-icon nc-circle-10"></i>
        <p>Editar clientes</p>
      </a>
    </li>
    <li>
      <a href="{{route('home')}}">
        <i class="nc-icon nc-minimal-left"></i>
        <p>Sair</p>
      </a>
    </li>
  </ul>
</div>
</div>
<div class="main-panel">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <div class="navbar-toggle">
          <button type="button" class="navbar-toggler">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
        </div>
        <a class="navbar-brand" href="javascript:;">Editar clientes</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
      </button>

    </div>
  </nav>
  <!-- End Navbar -->
  <div class="content">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
      </div>
    </div>
  </div>
  <footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
      <div class="row">
        <nav class="footer-nav">
          <div class="credits ml-auto">
          </div>
        </div>
      </div>
    </footer>
  </div>
</div>
<!--   Core JS Files   -->
<script src="{{ url ('assets2/js/core/jquery.min.js')}}"></script>
<script src="{{ url ('assets2/js/core/popper.min.js')}}"></script>
<script src="{{ url ('assets2/js/core/bootstrap.min.js')}}"></script>
<script src="{{ url ('assets2/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="{{ url ('assets2/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{ url ('assets2/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ url ('assets2/js/paper-dashboard.min.js?v=2.0.1')}}" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ url ('assets2/demo/demo.js')}}"></script>
<script>
  $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
  });
</script>
</body>

</html>
