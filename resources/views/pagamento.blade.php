<!DOCTYPE html>
<html>
<head>
	<title>Pagamento</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ url ('assets/css/bootstrap.min.css')}}"/>

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="{{ url ('assets/css/slick.css')}}"/>
	<link type="text/css" rel="stylesheet" href="{{ url ('assets/css/slick-theme.css')}}"/>

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="{{ url ('assets/css/nouislider.min.css')}}"/>

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ url ('assets/css/font-awesome.min.css')}}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ url ('assets/css/style.css')}}"/>


	<script type="text/javascript">
		$(document).ready(function() {
			
			$('.method').on('click', function() {
				$('.method').removeClass('blue-border');
				$(this).addClass('blue-border');
			});
			
		})
		var $cardInput = $('.input-fields input');
		
		$('.next-btn').on('click', function(e) {
			
			$cardInput.removeClass('warning');
			
			$cardInput.each(function() {    
				var $this = $(this);
				if (!$this.val()) {
					$this.addClass('warning');
				}
			})
		});
	</script>
	<style type="text/css">
		* {
			box-sizing: border-box;
		}
		
		html,
		body {
			font-family: 'Montserrat', sans-serif;
			font-size-adjust: ;
			width: 100%;
			height: 100%;
			background:#83aefc;
			justify-content: center;
			align-items: center;
		}
		.checkout-panel {
			display: flex;
			flex-direction: column;
			width: 940px;
			height: 766px;
			background-color: rgb(255, 255, 255);
			box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .2);
		}
		.panel-body {
			padding: 45px 80px 0;
			flex: 1;
		}
		
		.title {
			font-weight: 700;
			margin-top: 0;
			margin-bottom: 40px;
			color: #2e2e2e;
		}
		.progress-bar {
			display: flex;
			margin-bottom: 50px;
			justify-content: space-between;
		}
		
		.step {
			box-sizing: border-box;
			position: relative;
			z-index: 1;
			display: block;
			width: 25px;
			height: 25px;
			margin-bottom: 30px;
			border: 4px solid #fff;
			border-radius: 50%;
			background-color: #efefef;
		}
		
		.step:after {
			position: absolute;
			z-index: -1;
			top: 5px;
			left: 22px;
			width: 225px;
			height: 6px;
			content: '';
			background-color: #efefef;
		}
		
		.step:before {
			color: #2e2e2e;
			position: absolute;
			top: 40px;
		}
		
		.step:last-child:after {
			content: none;
		}
		
		.step.active {
			background-color: #1abc9c;
		}
		.step.active:after {
			background-color: #1abc9c;
		}
		.step.active:before {
			color: #1abc9c;
		}
		.step.active + .step {
			background-color: #1abc9c;
		}
		.step.active + .step:before {
			color: #1abc9c;
		}
		
		.step:nth-child(1):before {
			
		}
		.step:nth-child(2):before {
			right: -40px;
			
		}
		.step:nth-child(3):before {
			right: -30px;
			
		}
		.step:nth-child(4):before {
			right: 0;
			
		}
		.payment-method {
			display: flex;
			margin-bottom: 60px;
			justify-content: space-between;
		}
		
		.method {
			display: flex;
			flex-direction: column;
			width: 382px;
			height: 122px;
			padding-top: 20px;
			cursor: pointer;
			border: 1px solid transparent;
			border-radius: 2px;
			background-color: rgb(249, 249, 249);
			justify-content: center;
			align-items: center;
		}
		
		.card-logos {
			display: flex;
			width: 150px;
			justify-content: space-between;
			align-items: center;
		}
		
		.radio-input {
			margin-top: 20px;
		}
		
		input[type='radio'] {
			display: inline-block;
		}
		.input-fields {
			display: flex;
			justify-content: space-between;
		}
		
		.input-fields label {
			display: block;
			margin-bottom: 10px;
			color: #b4b4b4;
		}
		
		.info {
			font-size: 12px;
			font-weight: 300;
			display: block;
			margin-top: 50px;
			opacity: .5;
			color: #2e2e2e;
		}
		
		div[class*='column'] {
			width: 382px;
		}
		select {
			font-size: 16px;
			width: 100%;
			height: 50px;
			padding-right: 40px;
			padding-left: 16px;
			border: 1px solid #BF303C;
			border-radius: 4px;
		}
		
		input[type='text'],
		input[type='password'] {
			font-size: 16px;
			width: 100%;
			height: 50px;
			padding-right: 40px;
			padding-left: 16px;
			color: rgba(46, 46, 46, .8);
			border: 1px solid #BF303C;
			border-radius: 4px;
			outline: none;
		}
		
		input[type='text']:focus,
		input[type='password']:focus {
			border-color: #BF303C;
		}
		
		#date { background: url(img/icons_calendar_black.png) no-repeat 95%; }
		#cardholder { background: url(img/icons_person_black.png) no-repeat 95%; }
		#cardnumber { background: url(img/icons_card_black.png) no-repeat 95%; }
		#cardcpf { background: url(img/icons_card_black.png) no-repeat 95%; width: 205%;}
		#verification { background: url(img/icons_lock_black.png) no-repeat 95%; }
		
		.small-inputs {
			display: flex;
			margin-top: 20px;
			justify-content: space-between;
		}
		
		.small-inputs div {
			width: 182px;
		}
		.panel-footer {
			display: flex;
			width: 100%;
			height: 96px;
			padding: 0 80px;
			background-color: rgb(239, 239, 239);
			justify-content: space-between;
			align-items: center;
		}
		.btn {
			background: #BF303C; color:#fff; font-weight:600;}
		
		.back-btn {
			color: #fff;
			background: #BF303C;
		}
		
		.next-btn {
			color: #fff;
			background: #BF303C;
		}
		
		.btn:focus {
			outline: none;
		}
		
		.btn:hover {
			transform: scale(1.1);
		}
		.blue-border {
			border: 1px solid rgb(110, 178, 251);
		}
		.warning {
			border-color: #1abc9c;
		}
	</style>
</head>
<body>

	<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li style="color: #ffffff"><i class="fa fa-phone"></i>(84) 4002-8922 </a></li>
						<li style="color: #ffffff"><i class="fa fa-envelope-o"></i> TrueDamageStore@gmail.com</a></li>
						<li style="color: #ffffff"><i class="fa fa-map-marker"></i> Caicó / Jucurutu</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="{{route('login')}}"><i class="fa fa-user-o"></i> Minha Conta</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo" id="product-imgs">
									<img  src="{{ url ('assets/img/1.png')}}" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
							<img src="{{ url ('assets/img/logo3.png')}}" class="icbarra">
							</div>
						</div>
						
						
								</div>
								

								
 <center>
	<div class="checkout-panel">
		<div class="panel-body">
			<h2 style= "margin-bottom:30px; font-weight:800; font-size:30px; color: #BF303C; "class="title">DETALHES DE FATURAMENTO</h2>
			
			<div class="progress-bar">
				<div class="step active"></div>
				<div class="step active"></div>
				<div class="step"></div>
				<div class="step"></div>
			</div>
			
			<div class="payment-method">
				<label for="card" class="method card">
					<div class="card-logos">
						<img src="https://designmodo.com/demo/checkout-panel/img/visa_logo.png"/>
						<img src="https://designmodo.com/demo/checkout-panel/img/mastercard_logo.png"/>
					</div>
					
					<div class="radio-input">
						<input id="card" type="radio" name="payment">
						Pagar com cartão de crédito
					</div>
				</label>
				
				<label for="paypal" class="method paypal">
					<img src="https://designmodo.com/demo/checkout-panel/img/paypal_logo.png"/>
					<div class="radio-input">
						<input id="paypal" type="radio" name="payment">
						Pagar com PayPal
					</div>
				</label>
			</div>
			
			<div class="input-fields">
				<div class="column-1">
					<label for="cardholder">Nome: (como gravado no cartão)</label>
					<input type="text" id="cardholder" />

					<label for="cardnumber" >CPF</label>
					<input type="text" id="cardcpf"/>

				<label for="verification">Número do Cartão:</label>
							<input type="password" id="verification"/>



					
					
					<div class="small-inputs">
						<div>
							<label for="date">Data de Validade:</label>
							<input type="text" id="date"/>
						</div>
						
						<div>
							<label for="verification">Código de Segurança:</label>
							<input type="password" id="verification"/>
						</div>
					</div>
					
				</div>

				
				<br>
				<div class="column-2">
					<label for="cardholder">Tipo de Pessoa:</label>
					<select>
					<option value="">-</option>
					<option value="">Pessoa Física</option>
					<option value="">Pessoa Jurídica</option>
				</select>
					
					
					
				</div>
			</div>
		</div>
		
		<div class="panel-footer">
			<button class="btn back-btn">Voltar</button>
			<button class="btn next-btn">Finalizar Pagamento</button>
		</div>
	</div>
	</center>
</body>
</html>