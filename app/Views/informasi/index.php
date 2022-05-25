<?= $this->extend('admin/template_admin') ?>
<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Informasi</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg">
                    <?php if(session()->getflashdata('teredit')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= session()->getFlashdata('teredit') ?>
                    </div>
                    <?php endif ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Maksud Ipaket</th>
                                <th scope="col">Jam Kerja</th>
                                <th scope="col">Paket Reguler</th>
                                <th scope="col">Paket cepat</th>
                                <th scope="col">Paket Kilat</th>
                                <th scope="col">Info Harga</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($informasi as $data) : ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><?= $data['pengertian'] ?></td>
                                <td><?= $data['jam_kerja'] ?></td>
                                <td><?= $data['paket_reguler'] ?></td>
                                <td><?= $data['paket_cepat'] ?></td>
                                <td><?= $data['paket_kilat'] ?></td>
                                <td><?= $data['harga'] ?></td>
                                <td><a href="/dashboard/edit/<?= $data['id'] ?>" class="btn btn-success">Edit</a></td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection(); ?>