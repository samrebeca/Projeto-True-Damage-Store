<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>True Damage Store</title>
	<link rel="icon" type="image/png" href="{{ url ('assets2/img/icon.jpg')}}">
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

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

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
						<li><a href="{{route('login')}}"><i class="fa fa-user-o"></i> {{ Auth::user()->name }} </a></li>
						<li style="color: #ffffff"><a href="{{route('login')}}"> Sair </a></li>
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
						<!-- /NAVIGATION -->

						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Carrinho</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="{{ url ('assets/img/acessorios/adesivoporta.jpg')}}" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">Adesivo de Porta</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$89.90</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="{{ url ('assets/img/almofadas/almofada.jpg')}}" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">Almofada</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$29.90</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) na lista</small>
											<h5>SUBTOTAL: $179.60</h5>
										</div>
										<div class="cart-btns">
											<a href="#">Ver Carrinho</a>
											<a href="{{route('pagamento')}}">Finalizar <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="{{route('home')}}">Início</a></li>
						<li><a href="{{route('acessorio')}}">Acessórios</a></li>
						<li><a href="{{route('almofada')}}">Almofadas</a></li>
						<li><a href="{{route('boneco')}}">Bonecos</a></li>
						<li><a href="{{route('camiseta')}}">Camisetas</a></li>
						<li><a href="{{route('caneca')}}">Canecas</a></li>
						<li><a href="{{route('moletom')}}">Moletons</a></li>
						<li><a href="{{route('mousepad')}}">Mousepad</a></li>
						<li><a href="{{route('placa')}}">Placas</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Placas</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<center>
						<div class="col-md-12">
							<div class="row">
								<div class="products-tabs">
									<!-- tab -->
									<div id="tab1" class="tab-pane active">
										<div class="products-slick" data-nav="#slick-nav-1">
											<!-- product -->
											<div class="product">
												<div class="product-img">
													<img src="{{ url ('assets/img/placas/placadecorativa1.png')}}" alt="">
													<div class="product-label">
														<span class="sale">-30%</span>
														<span class="new">NOVO</span>
													</div>
												</div>
												<div class="product-body">
													<p class="product-category">Categoria</p>
													<h3 class="product-name"><a href="#">Placa Decorativa - </a></h3>
													<h4 class="product-price">$16.69 <del class="product-old-price">$23.85</del></h4>
													<div class="product-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>

												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</button>
												</div>

											</div>
											<!-- /product -->

											<!-- product -->
											<div class="product">
												<div class="product-img">
													<img src="{{ url ('assets/img/placas/placayasuo.png')}}" alt="">
													<div class="product-label">
														<span class="new">NOVO</span>
													</div>
												</div>
												<div class="product-body">
													<p class="product-category">Categoria</p>
													<h3 class="product-name"><a href="#">Placa Decorativa - Yasuo</a></h3>
													<h4 class="product-price">$15.90 <del class="product-old-price">$22.40</del></h4>
													<div class="product-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</div>
												</div>
												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</button>
												</div>
											</div>
											<!-- /product -->

											<!-- product -->
											<div class="product">
												<div class="product-img">
													<img src="{{ url ('assets/img/placas/placa-caitlyn.jpg')}}" alt="">
													<div class="product-label">
														<span class="sale">-30%</span>
													</div>
												</div>
												<div class="product-body">
													<p class="product-category">Categoria</p>
													<h3 class="product-name"><a href="#">Placa Decorativa - Caitlyn</a></h3>
													<h4 class="product-price">$14.70 <del class="product-old-price">$21.00</del></h4>
													<div class="product-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</button>
												</div>
											</div>
											<!-- /product -->

											<!-- product -->
											<div class="product">
												<div class="product-img">
													<img src="{{ url ('assets/img/placas/placa-twistedfate.jpg')}}" alt="">
												</div>
												<div class="product-body">
													<p class="product-category">Categoria</p>
													<h3 class="product-name"><a href="#">Placa Decorativa - Twisted Fate</a></h3>
													<h4 class="product-price">$14.59 <del class="product-old-price">$18.70</del></h4>
													<div class="product-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</button>
												</div>
											</div>
											<!-- /product -->

											<!-- product -->
											<div class="product">
												<div class="product-img">
													<img src="{{ url ('assets/img/placas/placa-kindred.jpg')}}" alt="">
												</div>
												<div class="product-body">
													<p class="product-category">Categoria</p>
													<h3 class="product-name"><a href="#">Placa Decorativa - Kindred</a></h3>
													<h4 class="product-price">$18.70 <del class="product-old-price">$25.30</del></h4>
													<div class="product-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</button>
												</div>
											</div>
											<!-- /product -->
											<!-- product -->
											<div class="product">
												<div class="product-img">
													<img src="{{ url ('assets/img/placas/placa-jinx.jpg')}}" alt="">
													<div class="product-label">
														<span class="sale">-30%</span>
														<span class="new">NOVO</span>
													</div>
												</div>
												<div class="product-body">
													<p class="product-category">Categoria</p>
													<h3 class="product-name"><a href="#">Placa Decorativa - Jinx</a></h3>
													<h4 class="product-price">$11.20 <del class="product-old-price">$16.00</del></h4>
													<div class="product-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</button>
												</div>
											</div>
											<!-- /product -->

											<!-- product -->
											<div class="product">
												<div class="product-img">
													<img src="{{ url ('assets/img/placas/placa-rengar.jpg')}}" alt="">
													<div class="product-label">
														<span class="new">NOVO</span>
													</div>
												</div>
												<div class="product-body">
													<p class="product-category">Categoria</p>
													<h3 class="product-name"><a href="#">Placa Decorativa - Rengar</a></h3>
													<h4 class="product-price">$15.35 <del class="product-old-price">$20.00</del></h4>
													<div class="product-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</div>
												</div>
												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</button>
												</div>
											</div>
											<!-- /product -->

											<!-- product -->
											<div class="product">
												<div class="product-img">
													<img src="{{ url ('assets/img/placas/placa-darius.jpg')}}" alt="">
													<div class="product-label">
														<span class="sale">-20%</span>
													</div>
												</div>
												<div class="product-body">
													<p class="product-category">Categoria</p>
													<h3 class="product-name"><a href="#">Placa Decorativa - Darius</a></h3>
													<h4 class="product-price">$20.56 <del class="product-old-price">$25.07</del></h4>
													<div class="product-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</button>
												</div>
											</div>
											<!-- /product -->

											<!-- product -->
											<div class="product">
												<div class="product-img">
													<img src="{{ url ('assets/img/placas/placa-lol.jpg')}}" alt="">
												</div>
												<div class="product-body">
													<p class="product-category">Categoria</p>
													<h3 class="product-name"><a href="#">Placa Decorativa - LOL</a></h3>
													<h4 class="product-price">$23.80 <del class="product-old-price">$25.80</del></h4>
													<div class="product-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</button>
												</div>
											</div>
											<!-- /product -->

											<!-- product -->
											<div class="product">
												<div class="product-img">
													<img src="{{ url ('assets/img/placas/placa-fiora.jpg')}}" alt="">
												</div>
												<div class="product-body">
													<p class="product-category">Categoria</p>
													<h3 class="product-name"><a href="#">Placa Decorativa - Fiora</a></h3>
													<h4 class="product-price">$19.90 <del class="product-old-price">$22.20</del></h4>
													<div class="product-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</button>
												</div>
											</div>
											<!-- /product -->
										</div>
										<div id="slick-nav-1" class="products-slick-nav"></div>
									</div>
									<!-- /tab -->
								</div>
							</div>
						</div>
					</center>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">

									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Mais Vendido</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ url ('assets/img/placas/placa-jinx.jpg')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoria</p>
										<h3 class="product-name">Placa Decorativa - Jinx</a></h3>
										<h4 class="product-price">$11.20 <del class="product-old-price">$16.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ url ('assets/img/placas/placa-kindred.jpg')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoria</p>
										<h3 class="product-name">Placa Decorativa - Kindred</a></h3>
										<h4 class="product-price">$18.70 <del class="product-old-price">$25.30</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ url ('assets/img/placas/placa-lol.jpg')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoria</p>
										<h3 class="product-name">Placa Decorativa - LOL</a></h3>
										<h4 class="product-price">$23.80 <del class="product-old-price">$25.30</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Mais Baratos</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ url ('assets/img/placas/placa-jinx.jpg')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoria</p>
										<h3 class="product-name">Placa Decorativa - Jink</a></h3>
										<h4 class="product-price">$11.20 <del class="product-old-price">$16.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ url ('assets/img/placas/placa-twistedfate.jpg')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoria</p>
										<h3 class="product-name">Placa Decorativa - Twisted Fate</a></h3>
										<h4 class="product-price">$14.59  <del class="product-old-price">$18.70</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ url ('assets/img/placas/placa-caitlyn.jpg')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoria</p>
										<h3 class="product-name">Placa Decorativa - Caitlyn</a></h3>
										<h4 class="product-price">$14.70 <del class="product-old-price">$21.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Mais Caros</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ url ('assets/img/placas/placa-caitlyn.jpg')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoria</p>
										<h3 class="product-name">Placa Decorativa - LOL</a></h3>
										<h4 class="product-price">$23.80 <del class="product-old-price">$25.30</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ url ('assets/img/placas/placa-caitlyn.jpg')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoria</p>
										<h3 class="product-name">Placa Decorativa - Darius</a></h3>
										<h4 class="product-price">$20.56 <del class="product-old-price">$25.07</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="{{ url ('assets/img/placas/placa-caitlyn.jpg')}}" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Categoria</p>
										<h3 class="product-name">Placa Decorativa - Fiora</a></h3>
										<h4 class="product-price">$19.90 <del class="product-old-price">$22.20</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Sobre Nós</h3>
								<p>Estudantes de Informática fazendo projeto porque o professor pediu.</p>
								<ul class="footer-links">
									<li><i class="fa fa-map-marker"></i>Caicó / Jucurutu</a></li>
									<li><i class="fa fa-phone"></i>Call 911</a></li>
									<li><i class="fa fa-envelope-o"></i>TrueDamageStore@gmail.com</a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix visible-xs"></div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="{{ url ('assets/js/jquery.min.js')}}"></script>
		<script src="{{ url ('assets/js/bootstrap.min.js')}}"></script>
		<script src="{{ url ('assets/js/slick.min.js')}}"></script>
		<script src="{{ url ('assets/js/nouislider.min.js')}}"></script>
		<script src="{{ url ('assets/js/jquery.zoom.min.js')}}"></script>
		<script src="{{ url ('assets/js/main.js')}}"></script>

	</body>
	</html>
