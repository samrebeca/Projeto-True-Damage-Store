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

   <style type="text/css">

        @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
        .login-block{
            background:#560112;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to bottom,#560112,#560112);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to bottom,#560112,#560112); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            float:left;
            width:100%;
            padding : 200px 0;
        }

        .login-sec{padding: 50px 30px; position:relative;}
        .login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
        .login-sec .copy-text i{color:#FEB58A;}
        .login-sec .copy-text a{color:#E36262;}
        .login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #BF303C;}
        .login-sec h2:after{content:" "; width:100px; height:5px; background:#BF303C; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
        .btn-login{background: #BF303C; color:#fff; font-weight:600;}
    </style>

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
    <div class="sidebar" data-color="#560112" data-active-color="danger">
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
        <i class="nc-icon nc-paper"></i>
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
  <!-- Título -->
  <div class="col-md-4 login-sec">
  
        <h2 class="text-center" style="margin-top: 5%">Editar Clientes</h2>
      </div>

      <!-- End Título -->

       <!-- Form -->
      <div class="col-md-8" style="margin-left: 5%">
            <div class="card card-user" >
             
              <div class="card-body" >
                <form>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <h5>Nome do Cliente:</h5>
                        <input type="text" class="form-control"  >
                      </div>
                    </div>
                   
                    
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <h5>Nova Senha: </h5>
                        <input type="password" class="form-control" > 
                      </div>
                    </div>

                     <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <h5>Confirmar nova senha: </h5>
                        <input type="password" class="form-control" >
                      </div>
                    </div>
                   
                  </div>
                  
                 

                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <h5>E-mail: </h5>
                         <input type="email" class="form-control" placeholder="exemplo@gmail.com">
                        
                      </div>
                    </div>
                   
                  </div>
                    <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-login float-left" style="font-size: 100%; width: 120%;border-radius: 10px; margin-left: 200%"> <i class="nc-icon nc-check-2"></i> Confirmar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

<!-- End Form -->
 

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
