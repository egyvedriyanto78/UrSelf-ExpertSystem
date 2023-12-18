<?= $this->extend('auth/template') ?>

<?= $this->section('content') ?>

<div class="col-md-8 col-lg-6 col-xxl-5">
    <div class="card mb-0">
        <h2 class="card-header">
            <?= lang('Auth.forgotPassword') ?>
        </h2>
        <div class="card-body">
            <?= view('App\Views\Auth\_message_block') ?>
            <p>
                <?= lang('Auth.enterEmailForInstructions') ?>
            </p>
            <form action="<?= url_to('forgot') ?>" method="post">
                <?= csrf_field() ?>

                <div class="input-control">
                    <label for="email">
                        <?= lang('Auth.emailAddress') ?>
                    </label>
                    <input type="email" name="email" placeholder="<?= lang('Auth.email') ?>" class="form-control 
            <?php if (session('errors.email')): ?>is-invalid<?php endif ?>" value="<?= old('email') ?>">
                </div>
                <div class="invalid-feedback">
                    <?= session('errors.email') ?>
                </div>
                <button type="submit" class="btn btn-primary" style="margin-top:1rem">Reset Password</button>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection() ?>