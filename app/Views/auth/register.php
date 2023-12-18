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
            <form action="<?= url_to('register') ?>" method="post">
                <?= csrf_field() ?>

                <div class="form-group mb-3">
                    <label for="email">
                        <?= lang('Auth.email') ?>
                    </label>
                    <input type="email"
                        class="form-control <?php if (session('errors.email')): ?>is-invalid<?php endif ?>" name="email"
                        aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>"
                        value="<?= old('email') ?>">
                    <small id="emailHelp" class="form-text text-muted">
                        <?= lang('Auth.weNeverShare') ?>
                    </small>
                </div>

                <div class="form-group mb-3">
                    <label for="username">
                        <?= lang('Auth.username') ?>
                    </label>
                    <input type="text"
                        class="form-control <?php if (session('errors.username')): ?>is-invalid<?php endif ?>"
                        name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                </div>

                <div class="form-group mb-3">
                    <label for="password">
                        <?= lang('Auth.password') ?>
                    </label>
                    <input type="password" name="password"
                        class="form-control <?php if (session('errors.password')): ?>is-invalid<?php endif ?>"
                        placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                </div>

                <div class="form-group mb-2">
                    <label for="pass_confirm">
                        <?= lang('Auth.repeatPassword') ?>
                    </label>
                    <input type="password" name="pass_confirm"
                        class="form-control <?php if (session('errors.pass_confirm')): ?>is-invalid<?php endif ?>"
                        placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                </div>

                <br>

                <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
                    <?= lang('Auth.register') ?>
                </button>
            </form>

            <div class="d-flex align-items-center justify-content-center">
                <p class="fs-4 mb-0 fw-bold">Already have an account?</p>
                <a class="text-primary fw-bold ms-2" href="<?= url_to('login') ?>">
                    <?= lang('Auth.signIn') ?>
                </a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>