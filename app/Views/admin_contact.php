<?= $this->extend('layouts/admin_template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="containery">
        <div class="d-flex justify-content-center align-items-center">
            <img src="<?= base_url("../admin/images/logos/favicon.png") ?>" width="40" height="40">
        </div>
        <h1><span style=" color:blue">Ur</span>Self</h1>
        <h5>|| Find YourSelf ||</h5>
        <main>
            <h3>Contact Us</h3>
            <h4>Email: urself@urself.co.id</h4>
            <h4>Instagram: urself.expert</h4>
            <h4>Phone: +62 896 1234 5678</h4>
        </main>
    </div>
</div>

<?= $this->endSection() ?>