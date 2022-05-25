<?= $this->extend('admin/template_admin') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Form Edit Informasi</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content mb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10">
                    <form action="/admin/update/<?= $informasi['id'] ?>"" method=" post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                        <div class=" row mb-3">
                            <label for="maksudipaket" class="col-sm-2 col-form-label">Maksud Ipaket</label>
                            <div class="col-sm-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="maksudipaket"
                                        value="<?= $informasi['pengertian'] ?>" name="pengertian">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jamkerja" class="col-sm-2 col-form-label">Jam Kerja</label>
                            <div class="col-sm-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="jamkerja"
                                        value="<?= $informasi['jam_kerja'] ?>" name="jam_kerja">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="paketreguler" class="col-sm-2 col-form-label">Paket Reguler</label>
                            <div class="col-sm-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="paketreguler"
                                        value="<?= $informasi['paket_reguler'] ?>" name="paket_reguler">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="paketCepat" class="col-sm-2 col-form-label">Paket cepat</label>
                            <div class="col-sm-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="paketCepat"
                                        value="<?= $informasi['paket_cepat'] ?>" name="paket_cepat">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="paketKilat" class="col-sm-2 col-form-label">Paket Kilat</label>
                            <div class="col-sm-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="paketKilat"
                                        value="<?= $informasi['paket_kilat'] ?>" name="paket_kilat">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="harga" class="col-sm-2 col-form-label">Info Harga</label>
                            <div class="col-sm-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="harga"
                                        value="<?= $informasi['harga'] ?>" name="harga">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" style="display: block; float:right;">Update
                            Infromasi</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<?= $this->endSection() ?>