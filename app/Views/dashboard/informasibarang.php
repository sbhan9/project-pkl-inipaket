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
                        <?php if(in_groups('admin')) : ?>
                        <h1>Orderan Masuk</h1>
                        <?php endif ?>
                        <?php if(in_groups('user')) : ?>
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
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach($cariBarang as $data) : ?>
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
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection(); ?>