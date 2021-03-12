<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Data Siswa</h1>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->


	<!-- Main content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- /.col-md-6 -->
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-10 mx-auto">
							<div class="card card-primary card-outline">
								<div class="card-body text-center">
									<p class="card-text">Kamu bisa menambah data siswa, dengan menekan tombol di bawah ini.</p>
									<a href="#" class="btn btn-primary">Tambah Data Siswa</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.col-md-6 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-md-12">
				<?= $this->session->flashdata('pesan') ?>
					<div class="bg-white p-4">
						<div class="table-responsive">
							<table id="nama-table" class="table align-items-center table-flush">
								<thead class="thead-light">
									<tr class="text-center">
										<th scope="col">ID</th>
										<th scope="col">Nama Siswa</th>
										<th scope="col">Email</th>
										<th scope="col">Gambar</th>
										<th scope="col">Akun Aktif</th>
										<th scope="col">Detail</th>
										<th scope="col">Option</th>
									</tr>
								</thead>

								<tbody>
									<?php $no = 1;
									foreach ($user as $u) {
									?>

										<tr class="text-center">
											<th scope="row"><?= $no++; ?></th>
											<td><?= $u->nama ?></td>
											<td><?= $u->email ?></td>
											<td>
												<img height="20px" src="<?= base_url('assets/photo/' . $u->image) ?>" alt="">
											</td>
											<td><?= $u->is_active ? 'Aktif' : 'Tidak Aktif' ?></td>
											<td><a href="<?= site_url('admin/detail_siswa/' . $u->id_user) ?>" class="btn btn-success">Detail</a></td>
											<td class="text-center">
												<a href="<?= site_url('admin/update_siswa/') . $u->id_user ?>" class="btn btn-info">Update</a>
												<a href="<?= site_url('admin/delete_siswa/') . $u->id_user ?>" class="btn btn-danger remove" onclick="return confirm('Are you sure want to Delete this ?')">Delete</a>
											</td>

										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->