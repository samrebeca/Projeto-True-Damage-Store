<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<style type="text/css">

		@import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
		.login-block{
			background:#560112;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to bottom,#560112,#560112);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to bottom,#560112,#560112); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			float:left;
			width:100%;
			padding : 50px 0;
		}
		.banner-sec{background:url()  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
		.container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
		.carousel-inner{border-radius:0 10px 10px 0;}
		.carousel-caption{text-align:left; left:5%;}
		.login-sec{padding: 50px 30px; position:relative;}
		.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
		.login-sec .copy-text i{color:#FEB58A;}
		.login-sec .copy-text a{color:#E36262;}
		.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #BF303C;}
		.login-sec h2:after{content:" "; width:100px; height:5px; background:#BF303C; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
		.btn-login{background: #BF303C; color:#fff; font-weight:600;}
		.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
		.banner-text h2{color:#fff; font-weight:600;}
		.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
		.banner-text p{color:#fff;}

	</style>
</head>
<body>
	<section class="login-block">
		<div class="container">
			<div class="row">
				<div class="col-md-4 login-sec">
					<h2 class="text-center">Cadastre-se</h2>
					<form class="login-form">
						<div class="form-group">
							<label for="exampleInputEmail1" class="text-uppercase">Nome do Usuário</label>
							<input type="text" class="form-control" placeholder="">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1" class="text-uppercase">E-mail</label>
							<input type="text" class="form-control" placeholder="">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="text-uppercase">Senha</label>
							<input type="password" class="form-control" placeholder="">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="text-uppercase">Confirmar Senha</label>
							<input type="password" class="form-control" placeholder="">
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input">
								<small>Lembrar senha</small>
							</label>
							<br>
							<br>
							<button type="submit" class="btn btn-login float-right">Cadastrar</button>
						</div>

					</form>

				</div>
				<div class="col-md-8 banner-sec">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<img class="d-block img-fluid" src="{{ url ('assets/img/TrueDamage.jpg')}}" alt="First slide">
								<div class="carousel-caption d-none d-md-block">
									<div class="banner-text">

									</div>  
								</div>
							</div>
							
							
						</div>     

					</div>
				</div>
			</div>
		</section>
	</body>
	</html>