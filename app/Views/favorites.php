<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<!--Favorites-->
<section class="favorites">
    <div class="container">
        <div class="row">
            <div class="favorites-title mb-5">
                <h1>Favorites</h1>
            </div>

            <?php if (!empty($favorites)) : ?>
                <div class="list-group">
                    <?php foreach ($favorites as $favorite) : ?>
                        <a href="#" class="p-4 list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1"><?= $favorite['laptop_name']; ?></h5>
                                <form action="/favorites/delete/<?= $favorite['id']; ?>" method="post">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure?');"><i class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php else : ?>
                <h1 class="text-center">No Favorites!</h1>
                <a class="text-center" href="/guide">
                    <h4>Go to Guide</h4>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>