<?= $this->extend('login_auth/layout/template') ?>
<?= $this->section('content') ?>
<div class="container" style="margin-top: 10px;">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center mb-3">
                                    <img src="<?= base_url() ?>/img/logo.png" alt="" class="d-block mb-1"
                                        style="width: 6rem; margin: auto;">
                                    <img src="<?= base_url() ?>/img/ipaket.png" alt="" class="d-block"
                                        style="width: 9rem; margin: auto;">
                                    <!-- <h1 class="h4 text-gray-900 mb-4">Daftar</h1> -->
                                </div>
                                <?= view('Myth\Auth\Views\_message_block') ?>
                                <form action="<?= route_to('register') ?>" method="post" class="user">
                                    <?= csrf_field() ?>
                                    <div class="form-group">
                                        <input type="email"
                                            class="form-control form-control-user <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                                            id="exampleInputUsername" name="email" placeholder="<?=lang('Auth.email')?>"
                                            value="<?= old('email') ?>" autocomplete="off">
                                        <small id="emailHelp" class="form-text text-muted" style="margin-left: 3%;">kami
                                            tidak akan pernah membagikan email anda kepada orang lain.</small>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control form-control-user <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>"
                                            name="username" placeholder="<?=lang('Auth.username')?>"
                                            value="<?= old('username') ?>" autocomplete="off">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password"
                                                class="form-control form-control-user <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"
                                                id="exampleInputPassword" name="password"
                                                placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" name="pass_confirm"
                                                class="form-control form-control-user <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                                placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Daftar
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= route_to('login') ?>">sudah mempunyai akun ? masuk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection() ?>