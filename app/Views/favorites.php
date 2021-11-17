<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<!--Favorites-->
<section class="favorites">
    <div class="container">
        <div class="row">
            <div class="favorites-title mb-5">
                <h1>Favorites</h1>
            </div>

            <div class="list-group">
                <a href="#" class="p-4 list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">ROG Strix G15 G513IH-R765B6T-O</h5>
                        <form action="" method="post">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></button>
                        </form>
                    </div>
                </a>

                <a href="#" class="p-4 list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Asus TUF Gaming A15</h5>
                        <form action="" method="post">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></button>
                        </form>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>