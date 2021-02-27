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
								<a href="<?= site_url('home') ?>">
									<img src="<?= base_url('assets/') ?>img/logo/logo.png" width="60" style="border-radius:30px;" alt="studylms">
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
											<a href="<?= site_url('home') ?>" class="dropdown-toggle">Beranda</a>
										</li>
										<li class="dropdown">
											<a href="<?= site_url('home/about') ?>" class="dropdown-toggle">Tentang</a>
										</li>
										<li class="dropdown">
											<a href="<?= site_url('home/course') ?>" class="dropdown-toggle" >Pelajaran</a>
										</li>
										<li class="dropdown">
											<a href="<?= site_url('home/contact') ?>" class="dropdown-toggle">Kontak</a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle">Masuk</a>
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