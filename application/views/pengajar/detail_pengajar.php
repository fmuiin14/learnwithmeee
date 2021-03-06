<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Detail Data Pengajar</h1>
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
									<label>Nama Pengajar</label>
									<input type="text" value="<?= $detail->nama ?>" disabled name="nama_siswa" class="form-control">
								</div>

								<div class="form-group">
									<label>NIP</label>
									<input type="number" name="nis" value="<?= $detail->nip ?>" disabled class="form-control">
								</div>

								<div class="form-group">
									<label>Password</label>
									<input type="text" name="password" value="rahasia dong, masa muncul disini" disabled class="form-control">
								</div>

								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" value="<?= $detail->email ?>" disabled class="form-control">
								</div>

								<div class="form-group">
									<label>No HP</label>
									<input type="text" name="no_hp" value="<?= $detail->no_hp ?>" disabled class="form-control">
								</div>

								<div class="form-group">
									<label>Agama</label>
									<input type="text" name="agama" value="<?= $detail->agama ?>" disabled class="form-control">
								</div>

								<div class="form-group">
									<label>Tanggal Masuk</label>
									<input type="text" name="tanggal_masuk" disabled value="<?php 
                                    $tanggalnya = date("l, d F Y", strtotime($detail->date_created));
                                    echo $tanggalnya;
                                    ?>" class="form-control">
								</div>

								<div class="form-group">
									<label>Jenis Kelamin</label>
									<input type="text" name="jenis_kelamin" class="form-control" disabled value="<?php 
                                    $jk = $detail->j_k;
                                    echo ($jk = 'L') ? "Laki-Laki" : "Perempuan"; 
                                    ?>">
								</div>

								<div class="form-group">
									<label>Tanggal lahir</label>
									<input type="text" name="birthday" disabled value="<?php 
                                    $tanggalnya = date("l, d F Y", strtotime($detail->tgl_lahir));
                                    echo $tanggalnya;
                                    ?>" class="form-control">
								</div>

								<div class="form-group">
									<label>Photo</label><br>
									<img src="<?= base_url('assets/photo/') . $detail->image ?>" width="300" class="img-fluid">
								</div>

                                <a href="<?= site_url('backend/pengajar') ?>" class="btn btn-primary">Kembali ke Data Pengajar</a>

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