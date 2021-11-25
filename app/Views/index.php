<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<!--Home-->
<div id="home" class="container">
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 gambar">
            <img src="/assets/images/visual 1.png" width="100%">
        </div>

        <div class="col-sm-12 position-relative p-4">
            <div class="position-absolute top-0 end-0">
                <img src="/assets/images/visual 1.png" class="home-logo">
            </div>

            <h1 class="home-title-1"><b>Pemilihan Jenis</b></h1>
            <h1 class="home-title-2"><b>Laptop</b></h1>

            <div class="home-desc">
                <p>Pemilihan dilakukan dengan mengisi beberapa kategori yaitu Harga, Brand, dan Fungsi. Kemudian aplikasi akan menampilkan jenis-jenis laptop yang cocok untuk digunakan sesuai kategori yang telah diisi.</p>
            </div>
            <div class="home-button mt-5">
                <a href="/guide">
                    <button class="btn btn-home" type="button">Guide</button>
                </a>
            </div>
            <div class="position-absolute mt-5">
                <a href="#about">
                    <img src="/assets/images/keyboard_arrow_down.png" class="arrow">
                </a>
            </div>
        </div>
    </div>
</div>

<!--About Us-->
<section id="about" class="aboutus">
    <div class="container">
        <div class="row">
            <div class="about-title">
                <h1>About Us</h1>
            </div>

            <div class="col-md-3 profile text-center">
                <div class="img-box">
                    <img src="/assets/images/about pic.png">
                </div>
                <div class="profile-name">
                    <h3>Rassel Billiono</h3>
                </div>
            </div>

            <div class="col-md-3 profile text-center">
                <div class="img-box">
                    <img src="/assets/images/about pic.png">
                </div>
                <div class="profile-name">
                    <h3>Dimas Lesmana</h3>
                </div>
            </div>

            <div class="col-md-3 profile text-center">
                <div class="img-box">
                    <img src="/assets/images/about pic.png">
                </div>
                <div class="profile-name">
                    <h3>Ade Kiswara</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>