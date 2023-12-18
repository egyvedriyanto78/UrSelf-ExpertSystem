<?= $this->extend('auth/template') ?>

<?= $this->section('content') ?>

<div class="col-md-8 col-lg-6 col-xxl-5">
    <div class="card mb-0">
        <div class="card-body">
            <?= view('App\Views\Auth\_message_block') ?>
            <a href="" class="text-nowrap logo-img text-center d-block py-3 w-100">
                <img src="<?= base_url("../admin/images/logos/favicon.png") ?>" width="40" height="40">
                <h2><span style=" color:blue">Ur</span>Self</h2>
            </a>
            <p class="text-center">Know Yourself</p>
            <form action="<?= url_to('login') ?>" method="post">
                <?= csrf_field() ?>

                <?php if ($config->validFields === ['email']): ?>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            <?= lang('Auth.email') ?>
                        </label>
                        <input type="email"
                            class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif ?>"
                            id="exampleInputEmail1" aria-describedby="emailHelp" name="login"
                            placeholder="<?= lang('Auth.email') ?>">

                        <div class="invalid-feedback">
                            <?= session('errors.login') ?>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            <?= lang('Auth.emailOrUsername') ?>
                        </label>
                        <input type="text"
                            class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif ?>"
                            id="exampleInputEmail1" aria-describedby="emailHelp" name="login"
                            placeholder="<?= lang('Auth.emailOrUsername') ?>">

                        <div class="invalid-feedback">
                            <?= session('errors.login') ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">
                        <?= lang('Auth.password') ?>
                    </label>
                    <input type="password" name="password"
                        class="form-control <?php if (session('errors.password')): ?>is-invalid<?php endif ?>"
                        id="exampleInputPassword1" placeholder="<?= lang('Auth.password') ?>">
                    <div class="invalid-feedback">
                        <?= session('errors.password') ?>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between mb-4">
                    <?php if ($config->allowRemembering): ?>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')): ?> checked <?php endif ?>>
                                <?= lang('Auth.rememberMe') ?>
                            </label>
                        </div>
                    <?php endif; ?>
                    <a class="text-primary fw-bold" href="<?= url_to('forgot') ?>">
                        <?= lang('Auth.forgotYourPassword') ?>
                    </a>
                </div>

                <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
                    <?= lang('Auth.loginAction') ?>
                </button>
            </form>

            <div class="d-flex align-items-center justify-content-center">
                <p class="fs-4 mb-0 fw-bold">New to UrSelf?</p>
                <a class="text-primary fw-bold ms-2" href="<?= url_to('register') ?>">Create an account</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>