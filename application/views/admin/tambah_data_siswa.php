<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Tambah Data Siswa</h1>
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
									<input type="text" value="<?= set_value('nama_siswa') ?>" name="nama_siswa" class="form-control">
									<?= form_error('nama_siswa', '<div class="text-small text-danger">', '</div>') ?>
								</div>

								<div class="form-group">
									<label>NIS</label>
									<input type="number" name="nis" value="<?= set_value('nis') ?>" class="form-control">
									<?= form_error('nis', '<div class="text-small text-danger">', '</div>') ?>
								</div>

								<div class="form-group">
									<label>Password</label>
									<input type="password" name="password" class="form-control">
									<?= form_error('password', '<div class="text-small text-danger">', '</div>') ?>
								</div>

								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" value="<?= set_value('email') ?>" class="form-control">
									<?= form_error('email', '<div class="text-small text-danger">', '</div>') ?>
								</div>

								<div class="form-group">
									<label>No HP</label>
									<input type="number" name="no_hp" value="<?= set_value('no_hp') ?>" class="form-control">
									<?= form_error('no_hp', '<div class="text-small text-danger">', '</div>') ?>
								</div>

								<div class="form-group">
									<label>Agama</label>
									<input type="text" name="agama" value="<?= set_value('agama') ?>" class="form-control">
									<?= form_error('agama', '<div class="text-small text-danger">', '</div>') ?>
								</div>

								<div class="form-group">
									<label>Tanggal Masuk</label>
									<input type="date" name="tanggal_masuk" value="<?= set_value('tanggal_masuk') ?>" class="form-control">
									<?= form_error('tanggal_masuk', '<div class="text-small text-danger">', '</div>') ?>
								</div>

								<div class="form-group">
									<label>Jenis Kelamin</label>
									<select name="jenis_kelamin" value="<?= set_value('jenis_kelamin') ?>" class="form-control">
										<option value="" disabled selected>Pilih Jenis Kelamin</option>
										<option value="M">Laki-Laki</option>
										<option value="F">Perempuan</option>
									</select>
									<?= form_error('jenis_kelamin', '<div class="text-small text-danger">', '</div>') ?>
								</div>

								<div class="form-group">
									<label>Tempat Lahir</label>
									<input type="text" name="tempat_lahir" value="<?= set_value('tempat_lahir') ?>" class="form-control">
									<?= form_error('tempat_lahir', '<div class="text-small text-danger">', '</div>') ?>
								</div>

								<div class="form-group">
									<label>Tanggal lahir</label>
									<input type="date" name="birthday" value="<?= set_value('birthday') ?>" class="form-control">
									<?= form_error('birthday', '<div class="text-small text-danger">', '</div>') ?>
								</div>

								<div class="form-group">
									<label>Photo</label>
									<input type="file" name="photo" value="<?= set_value('photo') ?>" class="form-control">
								</div>

								<button type="submit" class="btn btn-primary">Submit</button>

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