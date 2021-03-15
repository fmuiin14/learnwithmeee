<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Data Pengajar</h1>
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

                            <?php foreach ($educators as $educator) : ?>
                                <form action="<?= site_url('backend/pengajar/update_pengajar_aksi') ?>" method="POST" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label>Nama Pengajar</label>
                                        <input type="hidden" name="id" class="form-control" value="<?= $educator->id ?>">
                                        <input type="text" value="<?= $educator->nama ?>" name="nama_pengajar" class="form-control">
                                        <?= form_error('nama_pengajar', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>NIP</label>
                                        <input type="number" name="nip" value="<?= $educator->nip ?>" class="form-control">
                                        <?= form_error('nip', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?= $educator->email ?>" class="form-control">
                                        <?= form_error('email', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>No HP</label>
                                        <input type="number" name="no_hp" value="<?= $educator->no_hp ?>" class="form-control">
                                        <?= form_error('no_hp', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Agama</label>
                                        <input type="text" name="agama" value="<?= $educator->agama ?>" class="form-control">
                                        <?= form_error('agama', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="j_k" value="<?= set_value('j_k') ?>" class="form-control">
                                            <option value="<?= $educator->j_k ?>"><?= ($educator->j_k == 'F') ? "Perempuan" : "Laki-Laki" ?></option>
                                            <option value="M">Laki-Laki</option>
                                            <option value="F">Perempuan</option>
                                        </select>
                                        <?= form_error('j_k', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Photo (Kosongkan Jika Tidak Ingin mengubah Foto)</label>
                                        <input type="file" name="photo" value="<?= set_value('photo') ?>" class="form-control">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update</button>

                                </form>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->