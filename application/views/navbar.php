<!-- header of the page -->
<header id="page-header">
			<!-- header holder -->
			<div>
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-sm-3">
							<!-- logo -->
							<div class="logo">
								<a href="<?= site_url('home') ?>">
									<img src="<?= base_url('assets/') ?>img/logo/logo.png" width="30" style="border-radius:30px;" alt="studylms">
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
											<a href="<?= site_url('home/login') ?>" class="dropdown-toggle">Masuk</a>
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