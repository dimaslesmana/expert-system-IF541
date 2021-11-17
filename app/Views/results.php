<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<!--Results-->
<section class="results">
    <div class="container">
        <div class="row">
            <div class="results-title mb-5">
                <h1>Results</h1>
            </div>

            <div class="card mb-3 rounded">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/assets/images/rog 1.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">ROG Strix G15 G513IH-R765B6T-O</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Processor: AMD Ryzen 7 4000 Series</li>
                                <li class="list-group-item">512GB M.2 NVMe PCIe 3.0 SSD</li>
                                <li class="list-group-item">Harga: 15.799.000</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <a class="mb-3 text-end" href="/favorites">
                    <button class="btn btn-submit" type="button"><i class="fas fa-star"></i></button>
                </a>
            </div>

            <div class="card mb-3 rounded">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/assets/images/asus 2.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Asus TUF Dash F15</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Processor: Intel Core i7-11370H</li>
                                <li class="list-group-item">RAM 8GB / 512GB PCIe</li>
                                <li class="list-group-item">Harga: 17.299.000</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <a class="mb-3 text-end" href="/favorites">
                    <button class="btn btn-submit" type="button"><i class="fas fa-star"></i></button>
                </a>
            </div>

            <div class="card mb-3 rounded">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/assets/images/asus 1.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Asus TUF Gaming A15</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Processor: AMD Ryzen 7 5800H</li>
                                <li class="list-group-item">RAM 8GB / 512GB PCIe</li>
                                <li class="list-group-item">Harga: 15.299.000</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <a class="mb-3 text-end" href="/favorites">
                    <button class="btn btn-submit" type="button"><i class="fas fa-star"></i></button>
                </a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>