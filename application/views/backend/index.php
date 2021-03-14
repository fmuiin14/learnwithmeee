<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Dashboard
						<?php
						$status = $this->session->userdata('user_level');
						if ($status == '1') {
							echo 'Admin';
						} else {
							echo 'Siswa';
						}
						?>
					</h1>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<?php
	$status = $this->session->userdata('user_level');
	if ($status == '1') {
	?>
		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<!-- Small boxes (Stat box) -->
				<div class="row">
					<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-info">
							<div class="inner">
								<h3><?= $siswa ?></h3>

								<p>Siswa</p>
							</div>
							<div class="icon">
								<i class="ion ion-bag"></i>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-success">
							<div class="inner">
								<h3>53<sup style="font-size: 20px">%</sup></h3>

								<p>Pengajar</p>
							</div>
							<div class="icon">
								<i class="ion ion-stats-bars"></i>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-warning">
							<div class="inner">
								<h3>44</h3>

								<p>Materi</p>
							</div>
							<div class="icon">
								<i class="ion ion-person-add"></i>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
					<div class="col-lg-3 col-6">
						<!-- small box -->
						<div class="small-box bg-danger">
							<div class="inner">
								<h3>65</h3>

								<p>Kelas</p>
							</div>
							<div class="icon">
								<i class="ion ion-pie-graph"></i>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<!-- ./col -->
				</div>
				<!-- /.row -->

			</div><!-- /.container-fluid -->
		</section>
		<!-- /.content -->

		<!-- Main content -->
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 col-12">
						<div class="card card-default">
							<!-- /.card-header -->
							<div class="card-body">
								<div class="alert alert-success">
									<h5><i class="icon fas fa-check"></i> Selamat Datang, Admin !</h5>
									Kamu sukses login untuk aplikasi ini. Berikut adalah halaman dashboard admin.
								</div>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
					<!-- /.col-md-6 -->
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
								<div class="card card-primary card-outline">
									<div class="card-header">
										<h5 class="m-0">Tambah Materi?</h5>
									</div>
									<div class="card-body">
										<p class="card-text">Kamu bisa menambahkan materi untuk pembelajar, dengan
											menekan
											tombol di bawah ini.</p>
										<a href="#" class="btn btn-primary">Tambah Materi</a>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card card-primary card-outline">
									<div class="card-header">
										<h5 class="m-0">Data Siswa?</h5>
									</div>
									<div class="card-body">
										<p class="card-text">Kamu bisa melihat dan manajemen data siswa, dengan menekan tombol di bawah ini.</p>
										<a href="<?= base_url('admin/data_siswa') ?>" class="btn btn-primary">Data Siswa</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /.col-md-6 -->
				</div>
				<!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content -->
	<?php } else { ?>
		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<!-- Info boxes -->
				<div class="row">
					<div class="col-12 col-sm-6 col-md-4">
						<div class="info-box">
							<span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

							<div class="info-box-content">
								<span class="info-box-text">Kelas Terakhir</span>
								<span class="info-box-number">
									Monday, 8 Januari 2021
								</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
					<div class="col-12 col-sm-6 col-md-4">
						<div class="info-box mb-3">
							<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

							<div class="info-box-content">
								<span class="info-box-text">Likes</span>
								<span class="info-box-number">41,410</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->

					<!-- fix for small devices only -->
					<div class="clearfix hidden-md-up"></div>

					<div class="col-12 col-sm-6 col-md-4">
						<div class="info-box mb-3">
							<span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

							<div class="info-box-content">
								<span class="info-box-text">Sales</span>
								<span class="info-box-number">760</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
		</section>
		<!-- /.content -->

		<!-- Main content -->
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 col-12">
						<div class="card card-default">
							<!-- /.card-header -->
							<div class="card-body">
								<div class="alert alert-success">
									<h5><i class="icon fas fa-check"></i> Selamat Datang, <?= $this->session->userdata('name'); ?> !</h5>
									Kamu sukses login untuk aplikasi ini. Berikut adalah halaman dashboard.
								</div>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
					<!-- /.col-md-6 -->
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
								<div class="card card-primary card-outline">
									<div class="card-header">
										<h5 class="m-0">Lengkapi Profile?</h5>
									</div>
									<div class="card-body">
										<p class="card-text">Kamu bisa melengkapi data profile, dengan
											menekan
											tombol di bawah ini.</p>
										<a href="#" class="btn btn-primary">Lengkapi Profile</a>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card card-primary card-outline">
									<div class="card-header">
										<h5 class="m-0">Histori Pembelajaran?</h5>
									</div>
									<div class="card-body">
										<p class="card-text">Kamu bisa melihat histori pembelajaran dengan menekan tombol di bawah ini.</p>
										<a href="<?= base_url('admin/data_siswa') ?>" class="btn btn-primary">Histori Pembelajaran</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /.col-md-6 -->
				</div>
				<!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content -->
	<?php } ?>
</div>
<!-- /.content-wrapper -->