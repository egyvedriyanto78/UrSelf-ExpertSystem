<?= $this->extend('layouts/user_template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <a href="<?= base_url('profile/' . $profile['id']) ?>"
        onclick="return confirm('Are you sure to delete profile picture?');" style="margin:1px;margin-left:4rem"
        class="btn btn-danger">
        Delete Photo
    </a>
    <form action="<?= base_url('profile/' . $profile['id']) ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field() ?>
        <div class="form-group">
            <label for="photo">Photo</label>
            <img id="preview-image" src="<?= $profile['photo'] ?? base_url("../user/images/profile/user-1.jpg") ?>"
                style="width:150px;height:150px;margin:1rem">
            <input type="file" class="form-control" id="photo" name="photo" onchange="previewImage()" uploaded>
        </div>

        <div class="form-group">
            <label for="nama">Name</label>
            <input type="text" class="form-control" id="username" value="<?= $profile['username'] ?>" name="username" uploaded>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<?= $this->endSection() ?>v