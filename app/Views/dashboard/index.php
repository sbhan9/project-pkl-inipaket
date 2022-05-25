<?= $this->extend('admin/template_admin') ?>
<?= $this->section('content'); ?>
<div class="flash-data" data-flashdata="<?= session()->getFlashdata('loginberhasil') ?>"></div>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="" style="border:1px solid white; width:100%;height:100%; overflow-y:hidden; overflow-x:scroll;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <?php if (in_groups('admin')) : ?>
                        <h1>Orderan Masuk</h1>
                        <?php endif ?>
                        <?php if (in_groups('user')) : ?>
                        <h1>Informasi Rinci Paket</h1>
                        <?php endif ?>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg">
                        <?php if (session()->getFlashdata('terkirim')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('terkirim') ?>
                        </div>
                        <?php endif ?>
                        <?php if (in_groups('admin')) : ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Pengorder</th>
                                    <th scope="col">Email Pengorder</th>
                                    <th scope="col">No. Hp Pengorder</th>
                                    <th scope="col">Berat Barang</th>
                                    <th scope="col">Jenis Paket</th>
                                    <th scope="col">Nama Penerima</th>
                                    <th scope="col">Email Penerima</th>
                                    <th scope="col">No. Hp Penerima</th>
                                    <th scope="col">Alamat Penerima</th>
                                    <th scope="col">Tanggal Order</th>
                                    <th scope="col">Kode Barang</th>
                                    <th scope="col">Status Pengiriman</th>
                                    <th scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($order as $data) : ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?>.</th>
                                    <td><?= $data['nama_order'] ?></td>
                                    <td><?= $data['email_pengorder'] ?></td>
                                    <td><?= $data['nohp_pengorder'] ?></td>
                                    <td><?= $data['berat_barang'] ?></td>
                                    <td><?= $data['jenis_paket'] ?></td>
                                    <td><?= $data['nama_penerima'] ?></td>
                                    <td><?= $data['email_penerima'] ?></td>
                                    <td><?= $data['nohp_penerima'] ?></td>
                                    <td><?= $data['alamat_penerima'] ?></td>
                                    <td><?= $data['tanggal_order'] ?></td>
                                    <td><?= $data['kode_barang'] ?></td>
                                    <td><?= $data['status_pengiriman'] ?></td>
                                    <td>
                                        <form action="/auth/<?= $data['id'] ?>" method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah anda yakin paket <?= $data['nama_order'] ?> sudah terkirim ?')">Terkirim</button>
                                        </form>
                                        <a href="<?= base_url() ?>/dashboard/editdata/<?= $data['id'] ?>"
                                            class="btn btn-info mt-2">Update</a>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <?php endif ?>
                        <?php if (!in_groups('admin')) : ?>
                        <!-- input kode -->
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="col">
                                                    <form class="form-inline my-2 my-lg-0"
                                                        action="<?= base_url() ?>/dashboard/tampilpaket" method="post">
                                                        <input
                                                            class="form-control mr-sm-2 <?= ($validasi->hasError('cariPaket')) ? 'is-invalid' : '' ?>"
                                                            type="search" placeholder="cari paket..." autocomplete="off"
                                                            autofocus aria-label="Search" name="cariPaket">
                                                        <button class="btn btn-warning my-2 my-sm-0"
                                                            type="submit">Cari</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (session()->getFlashdata('cariKosong')) : ?>
                                    <div class="alert alert-danger alert-dismissible mt-3 fade show" role="alert">
                                        <?= session()->getFlashdata('cariKosong') ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection(); ?>