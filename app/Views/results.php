<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<!--Results-->
<section class="results">
    <div class="container">
        <div class="row">
            <div class="results-title mb-5">
                <h4>Results - Filtered</h4>
            </div>
            <?php if (session()->getFlashdata('filtered_laptops')) : ?>
                <?php $index = 0; ?>
                <?php foreach (session()->getFlashdata('filtered_laptops') as $i => $laptop) : ?>
                    <div class="card mb-3 rounded">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/assets/images/laptops/<?= $laptop['image']; ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $laptop['laptop_name']; ?></h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>Ranking ke-<?= $index + 1; ?></strong></li>
                                        <li class="list-group-item">CPU: <?= $laptop['cpu']; ?></li>
                                        <li class="list-group-item">RAM: <?= $laptop['ram']; ?></li>
                                        <li class="list-group-item">GPU: <?= $laptop['gpu']; ?></li>
                                        <li class="list-group-item">Penyimpanan: <?= $laptop['storage']; ?></li>
                                        <li class="list-group-item">Refresh Rate: <?= $laptop['refresh_rate']; ?></li>
                                        <li class="list-group-item">Berat: <?= $laptop['weight']; ?></li>
                                        <li class="list-group-item">Harga: <?= number_to_currency($laptop['price'], 'IDR'); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <form action="/favorites/add" method="post" class="mb-3 text-end">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="laptop_name" value="<?= $laptop['laptop_name']; ?>">
                            <button type="submit" class="btn btn-submit"><i class="fas fa-star"></i></button>
                        </form>
                    </div>
                    <?php $index++; ?>
                <?php endforeach; ?>
            <?php else : ?>
                <h1 class="text-center">Tidak ada laptop dengan kriteria yang sesuai!</h1>
                <a class="text-center" href="/guide">
                    <h4>Go to Guide</h4>
                </a>
            <?php endif; ?>
        </div>
        <br><br><br><br><br>
        <div class="row">
            <div class="results-title mb-5">
                <h4>Results - Unfiltered</h4>
            </div>
            <?php if (session()->getFlashdata('unfiltered_laptops')) : ?>
                <?php foreach (session()->getFlashdata('unfiltered_laptops') as $i => $laptop) : ?>
                    <div class="card mb-3 rounded">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/assets/images/laptops/<?= $laptop['image']; ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $laptop['laptop_name']; ?></h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>Ranking ke-<?= $i + 1; ?></strong></li>
                                        <li class="list-group-item">CPU: <?= $laptop['cpu']; ?></li>
                                        <li class="list-group-item">RAM: <?= $laptop['ram']; ?></li>
                                        <li class="list-group-item">GPU: <?= $laptop['gpu']; ?></li>
                                        <li class="list-group-item">Penyimpanan: <?= $laptop['storage']; ?></li>
                                        <li class="list-group-item">Refresh Rate: <?= $laptop['refresh_rate']; ?></li>
                                        <li class="list-group-item">Berat: <?= $laptop['weight']; ?></li>
                                        <li class="list-group-item">Harga: <?= number_to_currency($laptop['price'], 'IDR'); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <form action="/favorites/add" method="post" class="mb-3 text-end">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="laptop_name" value="<?= $laptop['laptop_name']; ?>">
                            <button type="submit" class="btn btn-submit"><i class="fas fa-star"></i></button>
                        </form>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <h1 class="text-center">Tidak ada laptop dengan kriteria yang sesuai!</h1>
                <a class="text-center" href="/guide">
                    <h4>Go to Guide</h4>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>