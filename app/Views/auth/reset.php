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

            <p>
                <?= lang('Auth.enterCodeEmailPassword') ?>
            </p>

            <form action="<?= url_to('reset-password') ?>" method="post">
                <?= csrf_field() ?>

                <div class="form-group mb-3">
                    <label for="token">
                        <?= lang('Auth.token') ?>
                    </label>
                    <input type="text"
                        class="form-control <?php if (session('errors.token')): ?>is-invalid<?php endif ?>" name="token"
                        placeholder="<?= lang('Auth.token') ?>" value="<?= old('token', $token ?? '') ?>">
                    <div class="invalid-feedback">
                        <?= session('errors.token') ?>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="email">
                        <?= lang('Auth.email') ?>
                    </label>
                    <input type="email"
                        class="form-control <?php if (session('errors.email')): ?>is-invalid<?php endif ?>" name="email"
                        aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>"
                        value="<?= old('email') ?>">
                    <div class="invalid-feedback">
                        <?= session('errors.email') ?>
                    </div>
                </div>

                <br>

                <div class="form-group mb-3">
                    <label for="password">
                        <?= lang('Auth.newPassword') ?>
                    </label>
                    <input type="password"
                        class="form-control <?php if (session('errors.password')): ?>is-invalid<?php endif ?>"
                        name="password">
                    <div class="invalid-feedback">
                        <?= session('errors.password') ?>
                    </div>
                </div>

                <div class="form-group mb-2">
                    <label for="pass_confirm">
                        <?= lang('Auth.newPasswordRepeat') ?>
                    </label>
                    <input type="password"
                        class="form-control <?php if (session('errors.pass_confirm')): ?>is-invalid<?php endif ?>"
                        name="pass_confirm">
                    <div class="invalid-feedback">
                        <?= session('errors.pass_confirm') ?>
                    </div>
                </div>

                <br>

                <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
                    <?= lang('Auth.resetPassword') ?>
                </button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>