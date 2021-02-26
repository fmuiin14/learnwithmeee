<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the HandheldFriendly -->
	<meta name="HandheldFriendly" content="True">
	<!-- set the description -->
	<meta name="description" content="STUDYLMS HTML Template">
	<!-- set the Keyword -->
	<meta name="keywords" content="">
	<meta name="author" content="STUDYLMS HTML Template">
	<!-- set the page title -->
	<title>Learn With Me - Belajar Lebih Asyik dan Menyenangkan Dengan Pembelajaran Terstruktur</title>
	<!-- include google roboto font cdn link -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<!-- include the site bootstrap stylesheet -->
	<link rel="stylesheet" href="<?= 'assets/' ?>css/bootstrap.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="<?= 'assets/' ?>css/plugins.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="<?= 'assets/' ?>css/colors.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="<?= 'assets/' ?>style.css">
	<!-- include the site responsive stylesheet -->
	<link rel="stylesheet" href="<?= 'assets/' ?>css/responsive.css">
</head>
<body>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<!-- header of the page -->
		<header id="page-header">
			<!-- top bar -->
			<div class="top-bar bg-dark text-gray">
				<div class="container">
					<div class="row top-bar-holder">
						<div class="col-xs-9 col">
							<!-- bar links -->
							<ul class="font-lato list-unstyled bar-links">
								
							</ul>
						</div>
						<div class="col-xs-3 col justify-end">
							<!-- user links -->
							<ul class="list-unstyled user-links fw-bold font-lato">
								<li><a href="#popup1" class="lightbox">Login</a> <span class="sep">|</span> <a href="#popup2" class="lightbox">Register</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- header holder -->
			<div class="header-holder">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-sm-3">
							<!-- logo -->
							<div class="logo">
								<a href="home.html">
									<img src="<?= 'assets/' ?>images/logo-dark.png" alt="studylms">
								</a>
							</div>
						</div>
						<div class="col-xs-6 col-sm-9 static-block">
							<!-- nav -->
							<nav id="nav" class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<!-- navbar collapse -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<!-- main navigation -->
									<ul class="nav navbar-nav navbar-right main-navigation text-uppercase font-lato">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Beranda</a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tentang</a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pelajaran</a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kontak</a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Masuk</a>
										</li>
									</ul>
								</div>
								<!-- navbar form -->
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- contain main informative part of the site -->
		<main id="main">
			<!-- intro learn search block -->
			<section class="intro-learn-search-block bg-cover text-center" style="background-image: url(http://placehold.it/1920x740);">
				<div class="container holder">
					<!-- learn search form -->
					<div class="align">
						<form action="#" class="align learn-search-form text">
							<h1>Belajar dari yang terbaik. Dimanapun.</h1>
							<p>Tingkatkan skill kamu untuk bekal masa depan, mulai dari sekarang.</p>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Apa yang ingin kamu pelajari hari ini?">
								<span class="input-group-btn">
									<button class="btn btn-warning btn-theme" type="button"><i class="fas fa-search"></i></button>
								</span>
							</div>
							<!-- learning cources list -->
							<ul class="list-unstyled learning-cources-list text-left">
								<li>
									<a href="#">
										<i class="far fa-user icn"></i>
										<span class="text">Lebih dari 25+ instruktur</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="far fa-file-alt icn"></i>
										<span class="text">25000+ Pembelajaran online</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-desktop icn"></i>
										<span class="text">Belajar online dimanapun</span>
									</a>
								</li>
							</ul>
						</form>
					</div>
				</div>
			</section>
			<!-- popular posts block -->
			<section class="popular-posts-block container">
				<header class="popular-posts-head">
					<h2 class="popular-head-heading">Kursus Paling Populer</h2>
				</header>
				<div class="row">
					<!-- popular posts slider -->
					<div class="slider popular-posts-slider">
						<div>
							<div class="col-xs-12">
								<!-- popular post -->
								<article class="popular-post">
									<div class="aligncenter">
										<img src="http://placehold.it/262x212" alt="image description">
									</div>
									<div>
										<strong class="bg-success text-white font-lato text-uppercase price-tag">Free</strong>
									</div>
									<h3 class="post-heading"><a href="course-single.html">Introduction to Mobile Apps Development</a></h3>
									<div class="post-author">
										<div class="alignleft no-shrink rounded-circle">
											<a href="instructor-single.html"><img src="http://placehold.it/35x35" class="rounded-circle" alt="image description"></a>
										</div>
										<h4 class="author-heading"><a href="instructor-single.html">Sarah Johnson</a></h4>
									</div>
									<footer class="post-foot gutter-reset">
										<ul class="list-unstyled post-statuses-list">
											<li>
												<a href="#">
													<span class="fas icn fa-users no-shrink"><span class="sr-only">users</span></span>
													<strong class="text fw-normal">200</strong>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="fas icn no-shrink fa-comments"><span class="sr-only">comments</span></span>
													<strong class="text fw-normal">3</strong>
												</a>
											</li>
										</ul>
										<ul class="star-rating list-unstyled">
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="far fa-star"><span class="sr-only">star</span></span></li>
										</ul>
									</footer>
								</article>
							</div>
						</div>
						<div>
							<div class="col-xs-12">
								<!-- popular post -->
								<article class="popular-post">
									<div class="aligncenter">
										<img src="http://placehold.it/262x212" alt="image description">
									</div>
									<div>
										<strong class="bg-primary text-white font-lato text-uppercase price-tag">$85.60</strong>
									</div>
									<h3 class="post-heading"><a href="course-single.html">How to Become a Startup Founder</a></h3>
									<div class="post-author">
										<div class="alignleft no-shrink rounded-circle">
											<a href="instructor-single.html"><img src="http://placehold.it/35x35" class="rounded-circle" alt="image description"></a>
										</div>
										<h4 class="author-heading"><a href="instructor-single.html">Jhon Milton</a></h4>
									</div>
									<footer class="post-foot gutter-reset">
										<ul class="list-unstyled post-statuses-list">
											<li>
												<a href="#">
													<span class="fas icn fa-users no-shrink"><span class="sr-only">users</span></span>
													<strong class="text fw-normal">200</strong>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="fas icn no-shrink fa-comments"><span class="sr-only">comments</span></span>
													<strong class="text fw-normal">3</strong>
												</a>
											</li>
										</ul>
										<ul class="star-rating list-unstyled">
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="far fa-star-half"><span class="sr-only">star</span></span></li>
										</ul>
									</footer>
								</article>
							</div>
						</div>
						<div>
							<div class="col-xs-12">
								<!-- popular post -->
								<article class="popular-post">
									<div class="aligncenter">
										<img src="http://placehold.it/262x212" alt="image description">
									</div>
									<div>
										<strong class="bg-primary text-white font-lato text-uppercase price-tag">$68.00</strong>
									</div>
									<h3 class="post-heading"><a href="course-single.html">Your Complete Guide to Self Devlopement</a></h3>
									<div class="post-author">
										<div class="alignleft no-shrink rounded-circle">
											<a href="instructor-single.html"><img src="http://placehold.it/35x35" class="rounded-circle" alt="image description"></a>
										</div>
										<h4 class="author-heading"><a href="instructor-single.html">Peter Parker</a></h4>
									</div>
									<footer class="post-foot gutter-reset">
										<ul class="list-unstyled post-statuses-list">
											<li>
												<a href="#">
													<span class="fas icn fa-users no-shrink"><span class="sr-only">users</span></span>
													<strong class="text fw-normal">48</strong>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="fas icn no-shrink fa-comments"><span class="sr-only">comments</span></span>
													<strong class="text fw-normal">5</strong>
												</a>
											</li>
										</ul>
										<ul class="star-rating list-unstyled">
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										</ul>
									</footer>
								</article>
							</div>
						</div>
						<div>
							<div class="col-xs-12">
								<!-- popular post -->
								<article class="popular-post">
									<div class="aligncenter">
										<img src="http://placehold.it/262x212" alt="image description">
									</div>
									<div>
										<strong class="bg-success text-white font-lato text-uppercase price-tag">Free</strong>
									</div>
									<h3 class="post-heading"><a href="#">Introduction to Mobile Apps Development</a></h3>
									<div class="post-author">
										<div class="alignleft no-shrink rounded-circle">
											<a href="#"><img src="http://placehold.it/35x35" class="rounded-circle" alt="image description"></a>
										</div>
										<h4 class="author-heading"><a href="#">Sarah Johnson</a></h4>
									</div>
									<footer class="post-foot gutter-reset">
										<ul class="list-unstyled post-statuses-list">
											<li>
												<a href="#">
													<span class="fas icn fa-users no-shrink"><span class="sr-only">users</span></span>
													<strong class="text fw-normal">200</strong>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="fas icn no-shrink fa-comments"><span class="sr-only">comments</span></span>
													<strong class="text fw-normal">3</strong>
												</a>
											</li>
										</ul>
										<ul class="star-rating list-unstyled">
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="far fa-star"><span class="sr-only">star</span></span></li>
										</ul>
									</footer>
								</article>
							</div>
						</div>
						<div>
							<div class="col-xs-12">
								<!-- popular post -->
								<article class="popular-post">
									<div class="aligncenter">
										<img src="http://placehold.it/262x212" alt="image description">
									</div>
									<div>
										<strong class="bg-primary text-white font-lato text-uppercase price-tag">$85.60</strong>
									</div>
									<h3 class="post-heading"><a href="course-single.html">How to Become a Startup Founder</a></h3>
									<div class="post-author">
										<div class="alignleft no-shrink rounded-circle">
											<a href="instructor-single.html"><img src="http://placehold.it/35x35" class="rounded-circle" alt="image description"></a>
										</div>
										<h4 class="author-heading"><a href="instructor-single.html">Jhon Milton</a></h4>
									</div>
									<footer class="post-foot gutter-reset">
										<ul class="list-unstyled post-statuses-list">
											<li>
												<a href="#">
													<span class="fas icn fa-users no-shrink"><span class="sr-only">users</span></span>
													<strong class="text fw-normal">200</strong>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="fas icn no-shrink fa-comments"><span class="sr-only">comments</span></span>
													<strong class="text fw-normal">3</strong>
												</a>
											</li>
										</ul>
										<ul class="star-rating list-unstyled">
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="far fa-star-half"><span class="sr-only">star</span></span></li>
										</ul>
									</footer>
								</article>
							</div>
						</div>
						<div>
							<div class="col-xs-12">
								<!-- popular post -->
								<article class="popular-post">
									<div class="aligncenter">
										<img src="http://placehold.it/262x212" alt="image description">
									</div>
									<div>
										<strong class="bg-primary text-white font-lato text-uppercase price-tag">$68.00</strong>
									</div>
									<h3 class="post-heading"><a href="course-single.html">Your Complete Guide to Self Devlopement</a></h3>
									<div class="post-author">
										<div class="alignleft no-shrink rounded-circle">
											<a href="instructor-single.html"><img src="http://placehold.it/35x35" class="rounded-circle" alt="image description"></a>
										</div>
										<h4 class="author-heading"><a href="instructor-single.html">Peter Parker</a></h4>
									</div>
									<footer class="post-foot gutter-reset">
										<ul class="list-unstyled post-statuses-list">
											<li>
												<a href="#">
													<span class="fas icn fa-users no-shrink"><span class="sr-only">users</span></span>
													<strong class="text fw-normal">48</strong>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="fas icn no-shrink fa-comments"><span class="sr-only">comments</span></span>
													<strong class="text fw-normal">5</strong>
												</a>
											</li>
										</ul>
										<ul class="star-rating list-unstyled">
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
											<li><span class="fas fa-star"><span class="sr-only">star</span></span></li>
										</ul>
									</footer>
								</article>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- categories aside -->
			<aside class="bg-cover categories-aside text-center" style="background-image: url(http://placehold.it/1920x365);">
				<div class="container holder">
					<header class="seperator-head text-center">
						<h2>Pelajaran Yang Tersedia di learnWithMeee</h2>
					</header>
					<!-- categories list -->
					<ul class="list-unstyled categories-list">
						<li>
							<a href="#">
								<div class="align">
									<span class="icn-wrap">
										<img src="<?= 'assets/' ?>images/icon05.svg" width="44" height="48" alt="image description">
									</span>
									<strong class="h h5 element-block text-uppercase">Bahasa</strong>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="align">
									<span class="icn-wrap">
										<img src="<?= 'assets/' ?>images/icon06.svg" width="51" height="42" alt="image description">
									</span>
									<strong class="h h5 element-block text-uppercase">Programming</strong>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="align">
									<span class="icn-wrap">
										<img src="<?= 'assets/' ?>images/icon09.svg" width="51" height="51" alt="image description">
									</span>
									<strong class="h h5 element-block text-uppercase">Web Development</strong>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</aside>
			<!-- how work block -->
			<section class="container how-work-block text-center">
				<header class="seperator-head">
					<h2>Bagaimana Cara Memulai Kelas?</h2>
					<p>Sebuah langkah besar selalu di awali dengan langkah kecil, mulai dari sekarang.</p>
				</header>
				<!-- steps guide holder -->
				<div class="row">
					<div class="steps-guide-holder">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<!-- guide column -->
							<div class="guide-column">
								<span class="icn-wrap"><i class="far fa-user icn"></i></span>
								<h3 class="fw-normal">Registrasi</h3>
								<p>Mulai daftar sekarang dan dapatkan pembelajaran terbaik kami.</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<!-- guide column -->
							<div class="guide-column">
								<span class="icn-wrap"><i class="far fa-question-circle icn"></i></span>
								<h3 class="fw-normal">Belajar Dengan Studi Kasus</h3>
								<p>Kami memberikan studi kasus dalam tiap pembelajaran sebagai bahan portofolio kamu.</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<!-- guide column -->
							<div class="guide-column">
								<span class="icn-wrap"><i class="fas fa-book icn"></i></span>
								<h3 class="fw-normal">Silabus Yang Tepat</h3>
								<p>Di desain secara khusus dari pengalaman dan komunitas.</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<!-- guide column -->
							<div class="guide-column">
								<span class="icn-wrap"><i class="far fa-thumbs-up icn"></i></span>
								<h3 class="fw-normal">Let's Begin!</h3>
								<p>Mari mulai petualanganmu dimulai dari sini.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
		
			<aside class="bg-theme aside-note-block text-white">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col">
							<span class="icn-wrap alignleft element-block">
								<img src="<?= 'assets/' ?>images/icon10.png" alt="image description">
							</span>
							<div class="descr-wrap">
								<h3>Pembelajar Baru Registasi Setiap Hari</h3>
								<p><strong class="fw-semi">Video baru, artikel baru, buku populer, dan lainnya.</strong></p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col text-right">
							<a href="#" class="btn btn-white btn-default text-capitalize font-lato fw-normal">Registrasi Sekarang</a>
						</div>
					</div>
				</div>
			</aside>
			<!-- professionals block -->
			<section class="container professionals-block">
				<header class="block-header">
					<h2 class="block-header-heading">Instruktur Kami</h2>
					<p>Kami memiliki instruktur yang paham dan mampu mengajar di bidangnya.</p>
				</header>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<!-- pro column -->
						<article class="pro-column over text-center">
							<div class="aligncenter">
								<a href="instructor-single.html"><img src="http://placehold.it/	262x210" alt="Steaven Maseri Designer"></a>
								<div class="caption">
									<ul class="socail-networks list-unstyled">
										<li><a href="#" class="facebook"><span class="fab fa-facebook-f"></span></a></li>
										<li><a href="#" class="twitter"><span class="fab fa-twitter"></span></a></li>
										<li><a href="#" class="google"><span class="fab fa-google-plus-g"></span></a></li>
									</ul>
								</div>
							</div>
							<h3 class="fw-normal text-capitalize"><a href="instructor-single.html">Steaven Maseri</a></h3>
							<h4 class="fw-normal text-capitalize">Designer</h4>
							<p>Fundamental parts of medi cal research include cellular and mol lecular biology.</p>
						</article>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<!-- pro column -->
						<article class="pro-column over text-center">
							<div class="aligncenter">
								<a href="instructor-single.html"><img src="http://placehold.it/	262x210" alt="Jackson James Designer"></a>
								<div class="caption">
									<ul class="socail-networks list-unstyled">
										<li><a href="#" class="facebook"><span class="fab fa-facebook-f"></span></a></li>
										<li><a href="#" class="twitter"><span class="fab fa-twitter"></span></a></li>
										<li><a href="#" class="google"><span class="fab fa-google-plus-g"></span></a></li>
									</ul>
								</div>
							</div>
							<h3 class="fw-normal text-capitalize"><a href="instructor-single.html">Jackson James</a></h3>
							<h4 class="fw-normal text-capitalize">Designer</h4>
							<p>Fundamental parts of medi cal research include cellular and mol lecular biology.</p>
						</article>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<!-- pro column -->
						<article class="pro-column over text-center">
							<div class="aligncenter">
								<a href="instructor-single.html"><img src="http://placehold.it/	262x210" alt="Thorsten Tailor Artist"></a>
								<div class="caption">
									<ul class="socail-networks list-unstyled">
										<li><a href="#" class="facebook"><span class="fab fa-facebook-f"></span></a></li>
										<li><a href="#" class="twitter"><span class="fab fa-twitter"></span></a></li>
										<li><a href="#" class="google"><span class="fab fa-google-plus-g"></span></a></li>
									</ul>
								</div>
							</div>
							<h3 class="fw-normal text-capitalize"><a href="instructor-single.html">Thorsten Tailor</a></h3>
							<h4 class="fw-normal text-capitalize">Artist</h4>
							<p>Fundamental parts of medi cal research include cellular and mol lecular biology.</p>
						</article>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<!-- pro column -->
						<article class="pro-column over text-center">
							<div class="aligncenter">
								<a href="instructor-single.html"><img src="http://placehold.it/	262x210" alt="Katrine Fonsmark Literature"></a>
								<div class="caption">
									<ul class="socail-networks list-unstyled">
										<li><a href="#" class="facebook"><span class="fab fa-facebook-f"></span></a></li>
										<li><a href="#" class="twitter"><span class="fab fa-twitter"></span></a></li>
										<li><a href="#" class="google"><span class="fab fa-google-plus-g"></span></a></li>
									</ul>
								</div>
							</div>
							<h3 class="fw-normal text-capitalize"><a href="instructor-single.html">Katrine Fonsmark</a></h3>
							<h4 class="fw-normal text-capitalize">Literature</h4>
							<p>Fundamental parts of medi cal research include cellular and mol lecular biology.</p>
						</article>
					</div>
				</div>
			</section>
			<!-- testimonials block -->
			<section class="testimonials-block text-center bg-cover" style="background-image: url(http://placehold.it/1920x461);">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-10 col-sm-offset-1">
							<h2 class="text-white">Testimoni</h2>
							<!-- testimonail slider -->
							<div class="slick-slider slider testimonail-slider">
								<div>
									<!-- testimonial quote -->
									<blockquote class="testimonial-quote font-serif text-white">
										<p>“ Trent from punchy rollie grab us a waggin school. Flat out like a bludger where he hasn't got a damper. As stands out like brass razoo heaps it'll be relo. As busy as a paddock.”</p>
										<cite class="element-block font-lato">
											<span class="avatar rounded-circle element-block">
												<img class="rounded-circle" src="http://placehold.it/65x65" alt="Nethor Doct -Developer">
											</span>
											<strong class="element-block h5 h text-yellow">Nethor Doct <span class="text-white">- Developer</span></strong>
										</cite>
									</blockquote>
								</div>
								<div>
									<!-- testimonial quote -->
									<blockquote class="testimonial-quote font-serif text-white">
										<p>“ Trent from punchy rollie grab us a waggin school. Flat out like a bludger where he hasn't got a damper. As stands out like brass razoo heaps it'll be relo. As busy as a paddock.”</p>
										<cite class="element-block font-lato">
											<span class="avatar rounded-circle element-block">
												<img class="rounded-circle" src="http://placehold.it/65x65" alt="Nethor Doct -Developer">
											</span>
											<strong class="element-block h5 h text-yellow">Nethor Doct <span class="text-white">- Developer</span></strong>
										</cite>
									</blockquote>
								</div>
								<div>
									<!-- testimonial quote -->
									<blockquote class="testimonial-quote font-serif text-white">
										<p>“ Trent from punchy rollie grab us a waggin school. Flat out like a bludger where he hasn't got a damper. As stands out like brass razoo heaps it'll be relo. As busy as a paddock.”</p>
										<cite class="element-block font-lato">
											<span class="avatar rounded-circle element-block">
												<img class="rounded-circle" src="http://placehold.it/65x65" alt="Nethor Doct -Developer">
											</span>
											<strong class="element-block h5 h text-yellow">Nethor Doct <span class="text-white">- Developer</span></strong>
										</cite>
									</blockquote>
								</div>
								<div>
									<!-- testimonial quote -->
									<blockquote class="testimonial-quote font-serif text-white">
										<p>“ Trent from punchy rollie grab us a waggin school. Flat out like a bludger where he hasn't got a damper. As stands out like brass razoo heaps it'll be relo. As busy as a paddock.”</p>
										<cite class="element-block font-lato">
											<span class="avatar rounded-circle element-block">
												<img class="rounded-circle" src="http://placehold.it/65x65" alt="Nethor Doct -Developer">
											</span>
											<strong class="element-block h5 h text-yellow">Nethor Doct <span class="text-white">- Developer</span></strong>
										</cite>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		
			<!-- subscription aside block -->
			<aside class="subscription-aside-block bg-gray">
				<!-- newsletter sub form -->
				<form action="#" class="container newsletter-sub-form">
					<div class="row form-holder">
						<div class="col-xs-12 col-sm-6 col">
							<div class="text-wrap">
								<span class="element-block icn no-shrink rounded-circle bg-theme text-white"><i class="far fa-envelope-open"><span class="sr-only">icn</span></i></span>
								<div class="inner-wrap">
									<label for="email" class="text-dark">Signup for Newsletter</label>
									<p>Subscribe now and receive weekly newsletter with new updates.</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col">
							<div class="input-group">
								<input type="email" id="email" class="form-control" placeholder="Enter your email&hellip;">
								<span class="input-group-btn">
									<button class="btn btn-dark text-uppercase" type="button">Submit</button>
								</span>
							</div>
						</div>
					</div>
				</form>
			</aside>
		</main>
		<!-- footer area container -->
		<div class="footer-area bg-dark text-gray">
			<!-- aside -->
			<aside class="aside container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3 col">
						<div class="logo"><a href="home.html"><img src="<?= 'assets/' ?>images/logo.png" alt="studyLMS"></a></div>
						<p>learnWithMeee dibuat untuk meningkatkan kualitas pendidikan di Indonesia, khususnya pembelajaran yang penting untuk dipahami demi masa depan</p>
						<a href="#" class="btn btn-default text-uppercase">Mulai Belajar Sekarang</a>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col hidden-xs">
						<h3>Kursus Populer</h3>
						<!-- widget cources list -->
						<ul class="widget-cources-list list-unstyled">
							<li>
								<a href="course-single.html">
									<div class="alignleft">
										<img src="http://placehold.it/60x60" alt="image description">
									</div>
									<div class="description-wrap">
										<h4>Introduction to Mobile Apps Development</h4>
										<strong class="price text-primary element-block font-lato text-uppercase">Rp 123.456</strong>
									</div>
								</a>
							</li>
							<li>
								<a href="course-single.html">
									<div class="alignleft">
										<img src="http://placehold.it/60x60" alt="image description">
									</div>
									<div class="description-wrap">
										<h4>Become a Professional Film Maker</h4>
										<strong class="price text-primary element-block font-lato text-uppercase">Rp 123.456</strong>
									</div>
								</a>
							</li>
							<li>
								<a href="course-single.html">
									<div class="alignleft">
										<img src="http://placehold.it/60x60" alt="image description">
									</div>
									<div class="description-wrap">
										<h4>Swift Programming For Beginners</h4>
										<strong class="price text-primary element-block font-lato text-uppercase">Rp 123.456</strong>
									</div>
								</a>
							</li>
						</ul>
					</div>
					<nav class="col-xs-12 col-sm-6 col-md-3 col">
						<h3>Link Cepat</h3>
						<!-- fooer navigation -->
						<ul class="fooer-navigation list-unstyled">
							<li><a href="#">Semua Kursus</a></li>
							<li><a href="#">Kursus terbaru</a></li>
							<li><a href="#">Kursus Premium</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms of Use</a></li>
						</ul>
					</nav>
					<div class="col-xs-12 col-sm-6 col-md-3 col">
						<h3>Kontak Kami</h3>
						<p>Jika kamu ingin menghubungi kami, ada masalah, atau mendukung, kami bisa membantumu di :</p>
						<!-- ft address -->
						<address class="ft-address">
							<dl>
								<dt><span class="fas fa-map-marker"><span class="sr-only">marker</span></span></dt>
								<dd>Alamat: Depok, Jawa Barat</dd>
								<dt><span class="fas fa-phone-square"><span class="sr-only">phone</span></span></dt>
								<dd>Phone: <a href="#">+ 999 999 9999 099</a></dd>
								<dt><span class="fas fa-envelope-square"><span class="sr-only">email</span></span></dt>
								<dd>Email: <a href="mailto:info@Studylms.com">learnwithmeee@fmuiin.com</a></dd>
							</dl>
						</address>
					</div>
				</div>
			</aside>
			<!-- page footer -->
			<footer id="page-footer" class="font-lato">
				<div class="container">
					<div class="row holder">
						<div class="col-xs-12 col-sm-push-6 col-sm-6">
							<ul class="socail-networks list-unstyled">
								<li><a href="#"><span class="fab fa-facebook"></span></a></li>
								<li><a href="#"><span class="fab fa-instagram"></span></a></li>
								<li><a href="#"><span class="fab fa-twitter-square"></span></a></li>
								<li><a href="#"><span class="fab fa-linkedin"></span></a></li>
								<li><a href="#"><span class="fab fa-youtube-square"></span></a></li>
								<li><a href="#"><span class="fab fa-github"></span></a></li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-pull-6 col-sm-6">
							<p><a href="#">learnWithMeee</a> | &copy; 2021 <a href="#"></a> - All rights reserved</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<!-- back top of the page -->
		<span id="back-top" class="text-center fa fa-caret-up"></span>
		<!-- loader of the page -->
		<div id="loader" class="loader-holder">
			<div class="block"><img src="<?= 'assets/' ?>images/svg/hearts.svg" width="100" alt="loader"></div>
		</div>
	</div>
	<div class="popup-holder">
		<div id="popup1" class="lightbox-demo">
			<form action="#" class="user-log-form">
				<h2>Login Form</h2>
				<div class="form-group">
					<input type="text" class="form-control element-block" placeholder="Username or email address *">
				</div>
				<div class="form-group">
					<input type="password" class="form-control element-block" placeholder="Password *">
				</div>
				<div class="btns-wrap">
					<div class="wrap">
						<label for="rem" class="custom-check-wrap fw-normal font-lato">
							<input type="checkbox" id="rem" class="customFormReset">
							<span class="fake-label element-block">Remember me</span>
						</label>
						<button type="submit" class="btn btn-theme btn-warning fw-bold font-lato text-uppercase">Login</button>
					</div>
					<div class="wrap text-right">
						<p>
							<a href="#" class="forget-link">Lost your Password?</a>
						</p>
					</div>
				</div>
			</form>
		</div>
		<div id="popup2" class="lightbox-demo">
			<form action="#" class="user-log-form">
				<h2>Register Form</h2>
				<div class="form-group">
					<input type="email" class="form-control element-block" placeholder="Email address *">
				</div>
				<div class="form-group">
					<input type="password" class="form-control element-block" placeholder="Password *">
				</div>
				<div class="btns-wrap">
					<div class="wrap">
						<button type="submit" class="btn btn-theme btn-warning fw-bold font-lato text-uppercase">Register</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- include jQuery -->
	<script src="<?= 'assets/' ?>js/jquery.js"></script>
	<!-- include jQuery -->
	<script src="<?= 'assets/' ?>js/plugins.js"></script>
	<!-- include jQuery -->
	<script src="<?= 'assets/' ?>js/jquery.main.js"></script>
	<!-- include jQuery -->
	<script type="text/javascript" src="<?= 'assets/' ?>js/init.js"></script>
</body>
</html>