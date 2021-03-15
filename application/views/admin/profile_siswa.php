<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-4">
					<h1 class="m-0 text-dark">Profile Siswa</h1>
				</div><!-- /.col -->
				<div class="col-sm-3">
				<a href="<?= site_url('backend/siswa/profile_siswa_update/') . $this->session->userdata('id'); ?>" class="btn btn-primary">Ubah Data Siswa</a>
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

							<form action="<?= base_url('backend/siswa/tambahDataSiswaAksi') ?>" method="POST" enctype="multipart/form-data">

								<div class="form-group">
									<label>Nama Siswa</label>
									<input type="text" value="#" disabled name="nama_siswa" class="form-control">
								</div>

								<div class="form-group">
									<label>NIS</label>
									<input type="number" name="nis" value="#" disabled class="form-control">
								</div>

								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" value="#" disabled class="form-control">
								</div>

								<div class="form-group">
									<label>No HP</label>
									<input type="text" name="no_hp" value="#" disabled class="form-control">
								</div>

								<div class="form-group">
									<label>Agama</label>
									<input type="text" name="agama" value="#" disabled class="form-control">
								</div>

								<div class="form-group">
									<label>Tanggal Masuk</label>
									<input type="text" name="tanggal_masuk" disabled value="#" class="form-control">
								</div>

								<div class="form-group">
									<label>Jenis Kelamin</label>
									<input type="text" name="jenis_kelamin" class="form-control" disabled value="#">
								</div>

								<div class="form-group">
									<label>Tempat Lahir</label>
									<input type="text" name="tempat_lahir" value="#" disabled class="form-control">
								</div>

								<div class="form-group">
									<label>Tanggal lahir</label>
									<input type="text" name="birthday" disabled value="#" class="form-control">
								</div>

								<div class="form-group">
									<label>Photo</label><br>
									<img src="#" alt="foto-siswa" width="300" class="img-fluid">
								</div>

                                <a href="<?= site_url('backend/siswa') ?>" class="btn btn-primary">Kembali ke Data Siswa</a>

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