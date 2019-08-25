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
							<a href="{{ url('/')}}" class="header__logo">
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
	</header>
	<!-- end header -->

	<!-- page title -->
	<section class="section section--first section--bg" data-bg="{{ asset('assets/frontend/img/section/section.jpg')}}">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">Tentang Kami</h2>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="{{ url('/')}}">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Tentang</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- about -->
	<section class="section">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title"><b>MrMovie</b> – Cari Informasi Seputar Dunia Perfilman</h2>
				</div>
				<!-- end section title -->

				<!-- section text -->
				<div class="col-12">
					<p class="section__text">Film adalah media komunikasi yang bersifat audio visual untuk menyampaikan suatu pesan kepada sekelompok orang yang berkumpul di suatu tempat tertentu. (Effendy, 1986: 134). Pesan film pada komunikasi massa dapat berbentuk apa saja tergantung dari misi film tersebut. Akan tetapi, umumnya sebuah film dapat mencakup berbagai pesan, baik itu pesan pendidikan, hiburan dan informasi. Pesan dalam film adalah menggunakan mekanisme lambang – lambang yang ada pada pikiran manusia berupa isi pesan, suara, perkataan, percakapan dan sebagainya.
						Film juga dianggap sebagai media komunikasi yang ampuh terhadap massa yang menjadi sasarannya, karena sifatnya yang audio visual, yaitu gambar dan suara yang hidup. Dengan gambar dan suara, film mampu bercerita banyak dalam waktu singkat. Ketika menonton film penonton seakan-akan dapat menembus ruang dan waktu yang dapat menceritakan kehidupan dan bahkan dapat mempengaruhi audiens.
					</p>
				</div>
				<!-- end section text -->
				
			</div>
		</div>
	</section>
	<!-- end about -->

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
</body>

</html>