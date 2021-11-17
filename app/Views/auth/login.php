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

    <h1 class="login-title">Login</h1>

    <form action="" method="post" autocomplete="off">
        <?= csrf_field(); ?>
        <div class="txt_field">
            <input type="email" name="email" required autofocus>
            <span></span>
            <label class="login-title">Email</label>
        </div>
        <div class="txt_field">
            <input type="password" name="password" required>
            <span></span>
            <label class="login-title">Password</label>
        </div>
        <input type="submit" value="Login">

        <div class="signup_link login-title">
            Doesn't have an account? <a href="/auth/register" class="login-title">Register</a>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>