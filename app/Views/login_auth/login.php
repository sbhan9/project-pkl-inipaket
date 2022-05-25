<?= $this->extend('login_auth/layout/template') ?>
<?= $this->section('content') ?>
<div class="container" style="margin-top: 35px;">
    <!-- Outer Row -->
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
                                    <!-- <h1 class="h4 text-gray-900 mb-4">Masuk</h1> -->
                                </div>
                                <?= view('Myth\Auth\Views\_message_block') ?>
                                <form action="<?= route_to('login') ?>" method="post" class="user">
                                    <?= csrf_field() ?>
                                    <?php if ($config->validFields === ['email']): ?>
                                    <div class="form-group">
                                        <input type="email"
                                            class="form-control form-control-user <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
                                            id="exampleInputEmail" name="login" placeholder="<?=lang('Auth.email')?>"
                                            autocomplete="off" autofocus />
                                        <div class="invalid-feedback">
                                            <?= session('errors.login') ?>
                                        </div>
                                    </div>
                                    <?php else: ?>
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control form-control-user <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
                                            id="exampleInputEmail" name="login"
                                            placeholder="<?=lang('Auth.emailOrUsername')?>" autocomplete="off" />
                                        <div class="invalid-feedback">
                                            <?= session('errors.login') ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <div class="form-group">
                                        <input type="password" name="password"
                                            class="form-control form-control-user <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"
                                            id="exampleInputPassword" placeholder="<?=lang('Auth.password')?>"
                                            autocomplete="off" />
                                        <div class="invalid-feedback">
                                            <?= session('errors.password') ?>
                                        </div>
                                    </div>
                                    <?php if ($config->allowRemembering): ?>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck"
                                                <?php if(old('remember')) : ?> checked <?php endif ?> />
                                            <label class="custom-control-label" for="customCheck">ingatkan saya</label>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Masuk </button>
                                </form>
                                <hr />
                                <?php if ($config->allowRegistration) : ?>
                                <div class="text-center">
                                    <a href="<?= route_to('register') ?>" class="small">belum punya akun ? daftar</a>
                                </div>
                                <?php endif; ?>
                                <?php if ($config->activeResetter): ?>
                                <div class="text-center">
                                    <a href="<?= route_to('forgot') ?>"
                                        class="small"><?=lang('Auth.forgotYourPassword')?></a>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>