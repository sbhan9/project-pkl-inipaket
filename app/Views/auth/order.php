<?php

use CodeIgniter\Filters\CSRF;
?>
<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container mt-5" style="margin-top: 50px;">
   <div class="row">
      <div class="col-md-12 col-sm-12">
         <div class="card mb-5" style="color: black; margin-top: 50px">
            <div class="card-header bg-danger text-center fw-bold p-2 text-white">
               Form Registrasi Order Paket
            </div>
            <div class="card-body">
               <form action="/auth/save" method="post">
                  <?= csrf_field() ?>
                  <input type="hidden" name="kode_barang">
                  <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                  <div class="row mb-3">
                     <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                     <div class="col-sm-10">
                        <input type="text"
                           class="form-control <?= ($validasi->hasError('nama_order')) ? 'is-invalid' : '' ?>" id="nama"
                           autocomplete="off" name="nama_order" autofocus value="<?= old('nama_order') ?>">
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                           <?= $validasi->getError('nama_order') ?>
                        </div>
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="emailpengorder" class="col-sm-2 col-form-label">Email Anda</label>
                     <div class="col-sm-10">
                        <input type="text"
                           class="form-control <?= ($validasi->hasError('email_pengorder')) ? 'is-invalid' : '' ?>"
                           id="emailpengorder" autocomplete="off" name="email_pengorder" autofocus
                           value="<?= old('email_pengorder') ?>">
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                           <?= $validasi->getError('email_pengorder') ?>
                        </div>
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="nohpPengorder" class="col-sm-2 col-form-label">No. Handphone</label>
                     <div class="col-sm-10">
                        <input type="text"
                           class="form-control <?= ($validasi->hasError('nohp_pengorder')) ? 'is-invalid' : '' ?>"
                           id="nohpPengorder" autocomplete="off" name="nohp_pengorder" autofocus
                           value="<?= old('nohp_pengorder') ?>">
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                           <?= $validasi->getError('nohp_pengorder') ?>
                        </div>
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="beratbarang" class="col-sm-2 col-form-label">Berat Barang</label>
                     <div class="col-sm-10">
                        <input type="text"
                           class="form-control <?= ($validasi->hasError('berat_barang')) ? 'is-invalid' : '' ?>"
                           id="beratbarang" autocomplete="off" name="berat_barang" value="<?= old('berat_barang') ?>">
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                           <?= $validasi->getError('berat_barang') ?>
                        </div>
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="jenisPaket" class="col-sm-2 col-form-label">Jenis Paket</label>
                     <div class="col-sm-10">
                        <select id="jenisPaket"
                           class="form-select <?= ($validasi->hasError('jenis_paket')) ? 'is-invalid' : '' ?>"
                           aria-label="Default select example" name="jenis_paket">
                           <option selected></option>
                           <option value="Paket Reguler">Paket Reguler</option>
                           <option value="Paket Cepat">Paket Cepat</option>
                           <option value="Paket Kilat">Paket Kilat</option>
                        </select>
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                           <?= $validasi->getError('jenis_paket') ?>
                        </div>
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="penerima" class="col-sm-2 col-form-label">Nama Penerima</label>
                     <div class="col-sm-10">
                        <input type="text"
                           class="form-control <?= ($validasi->hasError('nama_penerima')) ? 'is-invalid' : '' ?>"
                           id="penerima" autocomplete="off" name="nama_penerima" value="<?= old('nama_penerima') ?>">
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                           <?= $validasi->getError('nama_penerima') ?>
                        </div>
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="email" class="col-sm-2 col-form-label">Email Penerima</label>
                     <div class="col-sm-10">
                        <input type="text"
                           class="form-control <?= ($validasi->hasError('email_penerima')) ? 'is-invalid' : '' ?>"
                           id="email" autocomplete="off" name="email_penerima" value="<?= old('email_penerima') ?>">
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                           <?= $validasi->getError('email_penerima') ?>
                        </div>
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="nohpPenerima" class="col-sm-2 col-form-label">No. Hp Penerima Paket</label>
                     <div class="col-sm-10">
                        <input type="text"
                           class="form-control <?= ($validasi->hasError('nohp_penerima')) ? 'is-invalid' : '' ?>"
                           id="nohpPenerima" autocomplete="off" name="nohp_penerima"
                           value="<?= old('nohp_penerima') ?>">
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                           <?= $validasi->getError('nohp_penerima') ?>
                        </div>
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="alamatpenerima" class="col-sm-2 col-form-label">Alamat Penerima</label>
                     <div class="col-sm-10">
                        <div class="form">
                           <textarea
                              class="form-control <?= ($validasi->hasError('alamat_penerima')) ? 'is-invalid' : '' ?>"
                              id="alamatpenerima" autocomplete="off" style="height: 130px"
                              name="alamat_penerima"></textarea>
                           <div id="validationServerUsernameFeedback" class="invalid-feedback">
                              <?= $validasi->getError('alamat_penerima') ?>
                           </div>
                        </div>
                     </div>
                  </div>
                  <button type="submit" class="btn btn-danger" style=" float: right; display: block;">Order
                     Paket</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<?= $this->endSection() ?>