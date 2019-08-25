<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap-reboot.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.mCustomScrollbar.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/nouislider.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/ionicons.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/plyr.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/photoswipe.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/default-skin.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css')}}">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{ asset('assets/frontend/icon/favicon-32x32.png')}}" sizes="32x32">
	<link rel="apple-touch-icon" href="{{ asset('assets/frontend/icon/favicon-32x32.png')}}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/frontend/icon/apple-touch-icon-72x72.png')}}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/frontend/icon/apple-touch-icon-114x114.png')}}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/frontend/icon/apple-touch-icon-144x144.png')}}">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>MrMovie – Cari Informasi Film di Sini</title>

</head>
<body class="body">
	<!-- header -->
	<header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<a href="index.html" class="header__logo">
								<img src="{{ asset('assets/frontend/img/logo.svg')}}" alt="">
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								<li class="header__nav-item">
									<a href="{{ url('/')}}" class="header__nav-link">Home</a>
								</li>

								<li class="header__nav-item">
									<a href="{{ url('katalog')}}" class="header__nav-link">Catalog</a>
								</li>

								<li class="header__nav-item">
									<a href="{{ url('about')}}" class="header__nav-link">About</a>
								</li>
							</ul>
							<!-- end header nav -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header search -->
		<form action="#" class="header__search">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
							<input type="text" placeholder="Search for a movie, TV Series that you are looking for">

							<button type="button">search</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- end header search -->
	</header>
	<!-- end header -->

	<!-- home -->
	<section class="home">
		<!-- home bg -->
		<div class="owl-carousel home__bg">
			<div class="item home__cover" data-bg="{{ asset('assets/frontend/img/home/home__bg.jpg')}}"></div>
			<div class="item home__cover" data-bg="{{ asset('assets/frontend/img/home/home__bg2.jpg')}}"></div>
			<div class="item home__cover" data-bg="{{ asset('assets/frontend/img/home/home__bg3.jpg')}}"></div>
			<div class="item home__cover" data-bg="{{ asset('assets/frontend/img/home/home__bg4.jpg')}}"></div>
		</div>
		<!-- end home bg -->

		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="home__title"><b>APA SAJA YANG BARU</b></h1>

					<button class="home__nav home__nav--prev" type="button">
						<i class="icon ion-ios-arrow-round-back"></i>
					</button>
					<button class="home__nav home__nav--next" type="button">
						<i class="icon ion-ios-arrow-round-forward"></i>
					</button>
				</div>

				<div class="col-12">
					<div class="owl-carousel home__carousel">
					@foreach($slidebar as $data)
						<div class="item">
							<!-- card -->
							<div class="card card--big">
								<div class="card__cover">
									<img src="{{ asset('assets/img/artikel/'.$data->foto)}}" style="height: 400px;" alt="">
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="katalog/{{ $data->slug }}">{{ $data->judul }}</a></h3>
									<span class="card__category">
										@foreach($data->tag as $item)
                                    		<a href="#">{{ $item->name }}</a>
                            			@endforeach
									<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
								</div>
							</div>
							<!-- end card -->
						</div>
					@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end home -->

	<!-- content -->
	@yield('content')
	<!-- end content -->

	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<!-- footer list -->
				<div class="col-12 col-sm-4 col-md-3">
					<h6 class="footer__title">Contact</h6>
					<ul class="footer__list">
						<li><a href="#">0896756457</a></li>
						<li><a href="#">bagasbaldguy5@gmail.com</a></li>
					</ul>
					<ul class="footer__social">
						<li class="facebook"><a href="https://www.facebook.com"><i class="icon ion-logo-facebook"></i></a></li>
						<li class="instagram"><a href="https://www.instagram.com"><i class="icon ion-logo-instagram"></i></a></li>
						<li class="twitter"><a href="https://www.twitter.com"><i class="icon ion-logo-twitter"></i></a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer copyright -->
				<div class="col-12">
					<div class="footer__copyright">
						<small><a href="https://templatespoint.net" target="_blank"><b>MrMovie</b></a></small>

						<ul>
							<li><a href="#">2019</a></li>
						</ul>
					</div>
				</div>
				<!-- end footer copyright -->
			</div>
		</div>
	</footer>
	<!-- end footer -->

	<!-- JS -->
	<script src="{{ asset('assets/frontend/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{ asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('assets/frontend/js/jquery.mousewheel.min.js')}}"></script>
	<script src="{{ asset('assets/frontend/js/jquery.mCustomScrollbar.min.js')}}"></script>
	<script src="{{ asset('assets/frontend/js/wNumb.js')}}"></script>
	<script src="{{ asset('assets/frontend/js/nouislider.min.js')}}"></script>
	<script src="{{ asset('assets/frontend/js/plyr.min.js')}}"></script>
	<script src="{{ asset('assets/frontend/js/jquery.morelines.min.js')}}"></script>
	<script src="{{ asset('assets/frontend/js/photoswipe.min.js')}}"></script>
	<script src="{{ asset('assets/frontend/js/photoswipe-ui-default.min.js')}}"></script>
	<script src="{{ asset('assets/frontend/js/main.js')}}"></script>
	<script src="{{ asset('/js/index.js')}}"></script>
</body>

</html>