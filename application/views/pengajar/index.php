<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Data Pengajar</h1>
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
									<p class="card-text">Kamu bisa menambah data pengajar, dengan menekan tombol di bawah ini.</p>
									<a href="<?= site_url('backend/pengajar/tambah_data_pengajar') ?>" class="btn btn-primary">Tambah Data Pengajar</a>
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
					<div class="bg-white p-4">
						<div class="table-responsive">
							<table id="nama-table" class="table align-items-center table-flush">
								<thead class="thead-light">
									<tr class="text-center">
										<th scope="col">ID</th>
										<th scope="col">Nama Pengajar</th>
										<th scope="col">Email</th>
										<th scope="col">Gambar</th>
										<th scope="col">Akun Aktif</th>
										<th scope="col">Detail</th>
										<th scope="col">Option</th>
									</tr>
								</thead>

								<tbody>
									<?php $no = 1;
									foreach ($educators as $educator) {
									?>

										<tr class="text-center">
											<th scope="row"><?= $no++; ?></th>
											<td><?= $educator->nama ?></td>
											<td><?= $educator->email ?></td>
											<td>
												<img height="20px" src="<?= base_url('assets/photo/' . $educator->image) ?>" alt="">
											</td>
											<td><?= $educator->is_active ? 'Aktif' : 'Tidak Aktif' ?></td>
											<td><a href="<?= site_url('backend/pengajar/detail_pengajar/' . $educator->id) ?>" class="btn btn-success">Detail</a></td>
											<td class="text-center">
												<a href="<?= site_url('backend/pengajar/update_pengajar/') . $educator->id ?>" class="btn btn-info">Edit</a>
												<a href="<?= site_url('backend/pengajar/delete_pengajar/') . $educator->id ?>" class="btn btn-danger remove" onclick="return confirm('Are you sure want to Delete this ?')">Delete</a>
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