<?= $navbar; ?>
<!-- contain main informative part of the site -->
<main id="main">
			<!-- heading banner -->
			<header class="heading-banner text-white bgCover" style="background-image: url(http://placehold.it/1920x181);">
				<div class="container holder">
					<div class="align">
						<h1>Login Admin</h1>
					</div>
				</div>
			</header>
			<!-- breadcrumb nav -->
			<nav class="breadcrumb-nav">
				<div class="container">
					<!-- breadcrumb -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Login Admin</li>
					</ol>
				</div>
			</nav>
			<!-- user log block -->
			<section class="container user-log-block">
				<div class="row">
					<div class="col-xs-12 col-md-10 col-md-offset-1">
						<!-- user log form -->
						<form method="POST" action="<?= base_url('welcome/admin') ?>" class="user-log-form">
							<h2>Login Form Admin</h2>
							<div class="form-group">
								<input type="email" id="email" name="email" class="form-control element-block" placeholder="email address">
							</div>
							<div class="form-group">
								<input type="password" id="password" name="password" class="form-control element-block" placeholder="password">
							</div>
							<div class="btns-wrap">
								<div class="wrap">
									<label for="rem2" class="custom-check-wrap fw-normal font-lato">
										<input type="checkbox" id="rem2" class="customFormReset">
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
				</div>
			</section>
		</main>

		