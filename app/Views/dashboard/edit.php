<?= $this->extend('admin/template_admin') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Form Edit Order Status Pengiriman</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content mb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10">
                    <form action="<?= base_url() ?>/dashboard/editpengiriman" method=" post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                        <input type="hidden" name="id" value="<?= $dataOrder['id'] ?>">
                        <div class=" row mb-3">
                            <label for="statusPengiriman" class="col-sm-3 col-form-label">Status Pengiriman</label>
                            <div class="col-sm-9">
                                <div class="form-floating">
                                    <select id="inputState" class="form-control" name="statusPengiriman">
                                        <option selected><?= $dataOrder['status_pengiriman'] ?></option>
                                        <option value="Diperjalanan">Diperjalanan</option>
                                        <option value="Sedang Menuju Alamat Tujuan">Sedang Menuju Alamat Tujuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" style="display: block; float:right;">Update
                            Data Pengiriman</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<?= $this->endSection() ?>