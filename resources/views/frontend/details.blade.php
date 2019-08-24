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

	<!-- details -->
	<section class="section details">
		<!-- details background -->
		<div class="details__bg" data-bg="{{ asset('assets/frontend/img/home/home__bg.jpg')}}"></div>
		<!-- end details background -->

		<!-- details content -->
		<div class="container">
			<div class="row">
				<!-- title -->
				<div class="col-12">
					<h1 class="details__title">{{ $artikel->judul }}</h1>
				</div>
				<!-- end title -->

				<!-- content -->
				<div class="col-12 col-xl-6">
					<div class="card card--details">
						<div class="row">
							<!-- card cover -->
							<div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-5">
								<div class="card__cover">
									<img src="{{ asset('assets/img/artikel/'.$artikel->foto)}}" alt="">
								</div>
							</div>
							<!-- end card cover -->

							<!-- card content -->
							<div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-7">
								<div class="card__content">
									<div class="card__wrap">
										<span class="card__rate"><i class="icon ion-ios-star"></i>{{ $artikel->created_at }}</span>

										<ul class="card__list">
										@foreach($artikel->tag as $key)
											<li>{{ $key->nama_tag }}</li>
										@endforeach
										</ul>
									</div>

									<ul class="card__meta">
										<li><span>Genre:</span> <a href="#">{{ $artikel->kategori->nama_kategori }}</a>
										<li><span>Release year:</span> 2017</li>
										<li><span>Running time:</span> 120 min</li>
										<li><span>Country:</span> <a href="#">USA</a> </li>
									</ul>

									<div class="card__description card__description--details">
										{!! $artikel->konten !!}
									</div>
								</div>
							</div>
							<!-- end card content -->
						</div>
					</div>
				</div>
				<!-- end content -->

				<!-- player -->
				<iframe width="420" height="307"
					src="{{ $artikel->link }}">
				</iframe>
				<!-- end player -->

				<div class="col-12">
					<div class="details__wrap">

						<!-- share -->
						<div class="details__share">
							<span class="details__share-title">Share with friends:</span>

							<ul class="details__share-list">
								<li class="facebook"><a href="https://www.facebook.com"><i class="icon ion-logo-facebook"></i></a></li>
								<li class="instagram"><a href="https://www.instagram.com"><i class="icon ion-logo-instagram"></i></a></li>
								<li class="twitter"><a href="https://www.twitter.com"><i class="icon ion-logo-twitter"></i></a></li>
							</ul>
						</div>
						<!-- end share -->
					</div>
				</div>
			</div>
		</div>
		<!-- end details content -->
	</section>
	<!-- end details -->

	<!-- content -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2 class="content__title">Jelajahi</h2>
						<!-- end content title -->

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Comments</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Reviews</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Photos</a>
							</li>
						</ul>
						<!-- end content tabs nav -->

						<!-- content mobile tabs nav -->
						<div class="content__mobile-tabs" id="content__mobile-tabs">
							<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="Comments">
								<span></span>
							</div>

							<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Comments</a></li>

									<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Reviews</a></li>

									<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Photos</a></li>
								</ul>
							</div>
						</div>
						<!-- end content mobile tabs nav -->
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 col-xl-8">
					<!-- content tabs -->
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
							<div class="row">
								<!-- comments -->
								<div class="col-12">
									<div class="comments">
									<div id="disqus_thread"></div>
									</div>
								</div>
								<!-- end comments -->
							</div>
						</div>
					</div>
					<!-- end content tabs -->
				</div>
			</div>
		</div>
	</section>
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

	<!-- Root element of PhotoSwipe. Must have class pswp. -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		<!-- Background of PhotoSwipe. 
		It's a separate element, as animating opacity is faster than rgba(). -->
		<div class="pswp__bg"></div>

		<!-- Slides wrapper with overflow:hidden. -->
		<div class="pswp__scroll-wrap">

			<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
			<!-- don't modify these 3 pswp__item elements, data is added later on. -->
			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>

			<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
			<div class="pswp__ui pswp__ui--hidden">

				<div class="pswp__top-bar">

					<!--  Controls are self-explanatory. Order can be changed. -->

					<div class="pswp__counter"></div>

					<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

					<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

					<!-- Preloader -->
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
						</div>
					</div>
				</div>

				<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

				<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>
			</div>
		</div>
	</div>

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
	<script>
	/**
	*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
	*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
	/*
	var disqus_config = function () {
	this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
	this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
	};
	*/
	(function() { // DON'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement('script');
	s.src = 'https://mrmovie-1.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
	})();
	</script>
	<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	
	</body>
</html>