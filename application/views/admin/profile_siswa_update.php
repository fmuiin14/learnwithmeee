<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Data Siswa</h1>
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

                            <?php foreach ($users as $user) : ?>
                                <form action="<?= site_url('backend/siswa/profile_siswa_update_aksi') ?>" method="POST" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label>Nama Siswa</label>
                                        <input type="hidden" name="id_user" class="form-control" value="<?= $user->id_user ?>">
                                        <input type="text" value="<?= $user->nama ?>" name="nama_siswa" class="form-control">
                                        <?= form_error('nama_siswa', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>NIS</label>
                                        <input type="number" name="nis" value="<?= $user->nis ?>" class="form-control">
                                        <?= form_error('nis', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?= $user->email ?>" class="form-control">
                                        <?= form_error('email', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>No HP</label>
                                        <input type="number" name="no_hp" value="<?= $user->no_hp ?>" class="form-control">
                                        <?= form_error('no_hp', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Agama</label>
                                        <input type="text" name="agama" value="<?= $user->agama ?>" class="form-control">
                                        <?= form_error('agama', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="jenis_kelamin" value="<?= set_value('jenis_kelamin') ?>" class="form-control">
                                            <option value="<?= $user->jenis_kelamin ?>"><?= ($user->jenis_kelamin == 'F') ? "Perempuan" : "Laki-Laki" ?></option>
                                            <option value="M">Laki-Laki</option>
                                            <option value="F">Perempuan</option>
                                        </select>
                                        <?= form_error('jenis_kelamin', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" value="<?= $user->tempat_lahir ?>" class="form-control">
                                        <?= form_error('tempat_lahir', '<div class="text-small text-danger">', '</div>') ?>
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