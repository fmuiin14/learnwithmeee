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

							<form action="http://localhost/penggajian/admin/dataPegawai/tambahDataAksi" method="POST" enctype="multipart/form-data">

								<div class="form-group">
									<label>Nama Siswa</label>
									<input type="text" name="nama_siswa" class="form-control">
								</div>

								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" class="form-control">
								</div>

								<div class="form-group">
									<label>Jenis Kelamin</label>
									<select name="jenis_kelamin" class="form-control">
										<option value="">Pilih Jenis Kelamin</option>
										<option value="M">Laki-Laki</option>
										<option value="F">Perempuan</option>
									</select>
								</div>

								<div class="form-group">
									<label>Foto</label>
									<input type="file" name="photo" class="form-control">
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