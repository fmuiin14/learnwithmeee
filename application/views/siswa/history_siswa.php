<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data History Siswa</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-white p-4">
                        <div class="table-responsive">
                            <table id="nama-table" class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr class="text-center">
                                        <th scope="col">ID</th>
                                        <th scope="col">Pertemuan Terakhir</th>
                                        <th scope="col">Nama Pengajar</th>
                                        <th scope="col">Modul Aplikasi</th>
                                        <th scope="col">Level Aplikasi</th>
                                        <th scope="col">Materi</th>
                                        <th scope="col">Sesi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($alltgl as $row) : ?>
                                        <tr class="text-center">
                                            <td><?= $no++; ?></td>
                                            <td><?php $tanggal = $row->pertemuan_terakhir;
                                                $tgl = date('d F Y', strtotime($tanggal));
                                                echo $tgl; ?></td>
                                            <td><?= $row->nama; ?></td>
                                            <td><?= $row->nama_program; ?></td>
                                            <td><?= $row->level_name; ?></td>
                                            <td><?= $row->nama_program; ?></td>
                                            <td><?= $row->pertemuan_ke; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
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