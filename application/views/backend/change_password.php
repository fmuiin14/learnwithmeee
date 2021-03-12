<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Ubah Password</h1>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-7">
					<div class="card">
						<div class="card-body">

						<?= $this->session->flashdata('msg'); ?>

							<form action="<?= site_url('backend/ChangePassword/change_admin_password') ?>" method="POST" enctype="multipart/form-data">

								<div class="form-group">
									<label>Password Lama</label>
									<input type="password" name="password_lama" class="form-control">
								</div>

								<div class="form-group">
									<label>Password Baru</label>
									<input type="password" name="password_baru" class="form-control">
								</div>

								<div class="form-group">
									<label>Konfirmasi Password Baru</label>
									<input type="password" name="password_konfirmasi" class="form-control">
								</div>

								<button type="submit" class="btn btn-primary">Ubah Password</button>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content -->

</div>
<!-- /.content-wrapper -->