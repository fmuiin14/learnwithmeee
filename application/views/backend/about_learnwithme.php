<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard - LearnWithMe</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/be/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('assets/be/') ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assets/be/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url('assets/be/') ?>plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/be/') ?>dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets/be/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assets/be/') ?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('assets/be/') ?>plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/be/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/be/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

    <!-- for sweetalert -->
    <!-- include jQuery -->
    <script src="<?= base_url('assets/') ?>js/jquery.js"></script>
    <!-- include jQuery -->
    <script src="<?= base_url('assets/') ?>js/plugins.js"></script>
    <!-- include jQuery -->
    <script src="<?= base_url('assets/') ?>js/jquery.main.js"></script>
    <!-- include jQuery -->
    <script type="text/javascript" src="<?= base_url('assets/') ?>js/init.js"></script>
    <script src="<?= base_url('assets/js/') ?>sweetalert2.all.min.js"></script>

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            /* display: none; <- Crashes Chrome on hover */
            -webkit-appearance: none;
            margin: 0;
            /* <-- Apparently some margin are still there even though it's hidden */
        }

        input[type=number] {
            -moz-appearance: textfield;
            /* Firefox */
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= base_url('assets/') ?>img/logo/logo.png" class="user-image img-circle elevation-2" alt="User Image"><span class="d-none d-md-inline"><?= $this->session->userdata('email'); ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- User image -->
                        <li class="user-header bg-primary">
                            <img src="<?= base_url('assets/') ?>img/logo/logo.png" class="img-circle elevation-2" alt="User Image">

                            <p>
                                <?= $this->session->userdata('email'); ?>
                                <small>Member since
                                    <?php
                                    $tanggal = $this->session->userdata('date_created');
                                    $hasil = date('d F Y', strtotime($tanggal));
                                    echo $hasil;
                                    ?>
                                </small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <?php
                            $status = $this->session->userdata('user_level');
                            if ($status == '1') { ?>
                                <a href="<?= site_url('backend/ChangePassword/admin_password') ?>" class="btn btn-default btn-flat">Ubah Password</a>
                            <?php } else { ?>
                                <a href="<?= site_url('backend/siswa/profile_siswa/') . $this->session->userdata('id'); ?>" class="btn btn-default btn-flat">Profile</a>
                            <?php } ?>
                            <a href="<?= base_url('login/logout') ?>" class="btn btn-default btn-flat float-right">Log out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="<?= base_url('assets/') ?>img/logo/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">learnWithMe</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">DASHBOARD</li>
                        <li class="nav-item">
                            <a href="<?= site_url('backend/dashboard') ?>" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">MANAJEMEN SISWA</li>
                        <li class="nav-item has-treeview">
                            <?php $status = $this->session->userdata('user_level');
                            if ($status == '1') {
                            ?>
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        Master Siswa
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                            <?php } else { ?>
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        Profile
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                            <?php } ?>
                            <?php $status = $this->session->userdata('user_level');
                            if ($status == '1') {
                            ?>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= site_url('backend/siswa'); ?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Semua Siswa</p>
                                        </a>
                                    </li>
                                </ul>
                            <?php } else { ?>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= site_url('backend/siswa/profile_siswa/') . $this->session->userdata('id'); ?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Siswa</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Histori Pembelajaran</p>
                                        </a>
                                    </li>
                                </ul>
                            <?php } ?>
                        </li>
                        <?php $status = $this->session->userdata('user_level');
                        if ($status == '1') {
                        ?>
                            <li class="nav-header">MANAJEMEN PENGAJAR</li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-chart-pie"></i>
                                    <p>
                                        Master Pengajar
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="pages/charts/chartjs.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Guru</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/charts/flot.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Tambah Data Guru</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-header">MANAJEMEN MATERI</li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tree"></i>
                                    <p>
                                        Master Materi
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="pages/UI/general.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Materi</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/UI/icons.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Tambah Materi</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <? } else { ?>
                        <?php } ?>
                        <li class="nav-header">ABOUT</li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    About
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= site_url('backend/about/developer') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>About Developer</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/forms/advanced.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>About learnWithMe</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>About LearnWithMe</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-7 mx-auto">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/be/') ?>dist/img/user4-128x128.jpg" alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">LearnWithMe</h3>

                                    <p class="text-muted text-center">Online Education App</p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Followers</b> <a class="float-right">1,322</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Following</b> <a class="float-right">543</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Friends</b> <a class="float-right">13,287</a>
                                        </li>
                                    </ul>

                                    <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- About Me Box -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">About Me</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fas fa-book mr-1"></i> Education</strong>

                                    <p class="text-muted">
                                        B.S. in Computer Science from the University of Tennessee at Knoxville
                                    </p>

                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                                    <p class="text-muted">Malibu, California</p>

                                    <hr>

                                    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                                    <p class="text-muted">
                                        <span class="tag tag-danger">UI Design</span>
                                        <span class="tag tag-success">Coding</span>
                                        <span class="tag tag-info">Javascript</span>
                                        <span class="tag tag-warning">PHP</span>
                                        <span class="tag tag-primary">Node.js</span>
                                    </p>

                                    <hr>

                                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

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

</body>

</html>