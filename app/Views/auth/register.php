<?= $this->extend('layouts/auth/template'); ?>

<?= $this->section('content'); ?>

<div class="center">
    <?php if (session()->getFlashdata('alert_error')) : ?>
        <div class="alert alert-danger text-center">
            <?= session()->getFlashdata('alert_error'); ?>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('alert_success')) : ?>
        <div class="alert alert-success  text-center">
            <?= session()->getFlashdata('alert_success'); ?>
        </div>
    <?php endif; ?>

    <h1 class="regis-title">Register</h1>

    <form action="" method="post" autocomplete="off">
        <?= csrf_field(); ?>
        <div class="txt_field">
            <input type="text" name="first_name" required autofocus>
            <span></span>
            <label class="regis-title">First name</label>
        </div>
        <div class="txt_field">
            <input type="text" name="last_name" required>
            <span></span>
            <label class="regis-title">Last name</label>
        </div>
        <div class="txt_field">
            <input type="email" name="email" required>
            <span></span>
            <label class="regis-title">Email</label>
        </div>
        <div class="txt_field">
            <input type="password" name="password" required>
            <span></span>
            <label class="regis-title">Password</label>
        </div>
        <input type="submit" value="Register">

        <div class="signin_link regis-title">
            Already have an account? <a href="/auth/login" class="regis-title">Login</a>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>