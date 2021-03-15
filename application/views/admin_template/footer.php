<footer class="main-footer">
	<strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
	All rights reserved.
	<div class="float-right d-none d-sm-inline-block">
		<b>Version</b> 3.0.5
	</div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/be/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/be/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/be/') ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('assets/be/') ?>plugins/sparklines/sparkline.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/be/') ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('assets/be/') ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets/be/') ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/be/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('assets/be/') ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/be/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/be/') ?>dist/js/adminlte.js"></script>

<!-- DataTables -->
<script src="<?= base_url('assets/be/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/be/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/be/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/be/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
	$(document).ready(function() {
		$('#nama-table').DataTable();
	});
</script>

<!-- start sweetalert response -->
<?php if ($this->session->flashdata('sukses')) : ?>
	<script>
		Swal.fire({
			icon: 'success',
			title: 'Berhasil mengubah password',
			text: 'Silakan gunakan password yang baru kamu ubah untuk login selanjutnya !',
			showConfirmButton: false,
			timer: 4000
		});
	</script>
<?php endif; ?>

<?php if ($this->session->flashdata('tidak-sesuai')) : ?>
	<script>
		Swal.fire({
			icon: 'error',
			title: 'Password baru tidak sesuai',
			text: 'Password baru dan Konfirmasi password baru tidak sesuai !',
			showConfirmButton: false,
			timer: 4000
		});
	</script>
<?php endif; ?>

<?php if ($this->session->flashdata('password-salah')) : ?>
	<script>
		Swal.fire({
			icon: 'error',
			title: 'Password salah',
			text: 'Password yang Anda masukkan salah !',
			showConfirmButton: false,
			timer: 4000
		});
	</script>
<?php endif; ?>

<?php if ($this->session->flashdata('userdata-tidak')) : ?>
	<script>
		Swal.fire({
			icon: 'error',
			title: 'Userdata tidak ada',
			text: 'Silakan login ulang !',
			showConfirmButton: false,
			timer: 4000
		});
	</script>
<?php endif; ?>

<?php if ($this->session->flashdata('user-delete')) : ?>
	<script>
		Swal.fire({
			icon: 'success',
			title: 'User berhasil di hapus',
			text: 'User yang Anda pilih berhasil di hapus !',
			showConfirmButton: false,
			timer: 4000
		});
	</script>
<?php endif; ?>

<?php if ($this->session->flashdata('tambah-siswa-sukses')) : ?>
	<script>
		Swal.fire({
			icon: 'success',
			title: 'User berhasil di tambahkan',
			text: 'User bisa login menggunakan email dan password sesuai dengan data yang Anda tambahkan !',
			showConfirmButton: false,
			timer: 4000
		});
	</script>
<?php endif; ?>

<?php if ($this->session->flashdata('update-siswa-sukses')) : ?>
	<script>
		Swal.fire({
			icon: 'success',
			title: 'User berhasil di update',
			text: 'User yang Anda pilih berhasil di Update !',
			showConfirmButton: false,
			timer: 4000
		});
	</script>
<?php endif; ?>

<?php if ($this->session->flashdata('tambah-pengajar-sukses')) : ?>
	<script>
		Swal.fire({
			icon: 'success',
			title: 'Pengajar berhasil di tambahkan',
			text: 'Pengajar yang Anda isi berhasil di Tambahkan !',
			showConfirmButton: false,
			timer: 4000
		});
	</script>
<?php endif; ?>

<?php if ($this->session->flashdata('update-pengajar-sukses')) : ?>
	<script>
		Swal.fire({
			icon: 'success',
			title: 'Pengajar berhasil di update',
			text: 'Pengajar yang Anda update berhasil di Ubah !',
			showConfirmButton: false,
			timer: 4000
		});
	</script>
<?php endif; ?>

<?php if ($this->session->flashdata('pengajar-delete')) : ?>
	<script>
		Swal.fire({
			icon: 'success',
			title: 'Pengajar berhasil di delete',
			text: 'Pengajar yang Anda delete berhasil di Hapus !',
			showConfirmButton: false,
			timer: 4000
		});
	</script>
<?php endif; ?>

</body>

</html>