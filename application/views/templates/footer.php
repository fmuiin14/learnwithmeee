		<!-- footer area container -->
		<div class="footer-area bg-dark text-gray">
			<!-- aside -->
			<aside class="aside container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3 col">
						<div class="logo"><a href="home.html"><img src="<?= base_url('assets/') ?>images/logo.png" alt="studyLMS"></a></div>
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
			<div class="block"><img src="<?= base_url('assets/') ?>images/svg/hearts.svg" width="100" alt="loader"></div>
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
	<script src="<?= base_url('assets/') ?>js/jquery.js"></script>
	<!-- include jQuery -->
	<script src="<?= base_url('assets/') ?>js/plugins.js"></script>
	<!-- include jQuery -->
	<script src="<?= base_url('assets/') ?>js/jquery.main.js"></script>
	<!-- include jQuery -->
	<script type="text/javascript" src="<?= base_url('assets/') ?>js/init.js"></script>
</body>
</html>