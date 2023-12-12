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
            <h3>About Us</h3>
            <p>
                UrSelf adalah aplikasi sistem pakar yang dirancang untuk membantu pengguna memahami lebih dalam tentang
                kepribadian dan minat bakat mereka. Dengan menggunakan metode tes yang canggih dan berbasis psikologi,
                UrSelf memberikan pengalaman yang personal dan informatif.
            </p>
        </main>
    </div>
</div>

<?= $this->endSection() ?>