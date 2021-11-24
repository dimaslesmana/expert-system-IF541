<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<!--Guide-->
<div class="guide container">
    <div class="row">
        <h1 class="guide-title"><b>Guide</b></h1>

        <form action="" method="post" autocomplete="off">
            <?= csrf_field(); ?>
            <input type="hidden" name="price_submit" value="">
            <input type="hidden" name="brand_submit" value="">
            <input type="hidden" name="function_submit" value="">

            <div class="option-title">
                <h2>Harga</h2>
            </div>
            <div class="select-box">
                <div class="options-container">
                    <?php foreach ($laptop_prices as $key => $price) : ?>
                        <div class="option">
                            <input type="radio" class="radio" id="<?= $key; ?>" name="price" value="<?= $key; ?>" />
                            <label for="<?= $key; ?>"><?= $price; ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="selected">
                    Select price range
                </div>
                <div class="search-box">
                    <input type="text" placeholder="Search for certain price ..." />
                </div>
            </div>

            <div class="option-title">
                <h2>Brand</h2>
            </div>
            <div class="select-box">
                <div class="options-container">
                    <?php foreach ($laptop_brands as $brand) : ?>
                        <div class="option">
                            <input type="radio" class="radio" id="<?= $brand['brand']; ?>" name="brand" value="<?= $brand['brand']; ?>" />
                            <label for="<?= $brand['brand']; ?>"><?= $brand['brand']; ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="selected">
                    Select specified brand
                </div>
                <div class="search-box">
                    <input type="text" placeholder="Search for certain brand ..." />
                </div>
            </div>

            <div class="option-title">
                <h2>Fungsi</h2>
            </div>
            <div class="select-box">
                <div class="options-container">
                    <?php foreach ($laptop_functions as $key => $function) : ?>
                        <div class="option">
                            <input type="radio" class="radio" id="<?= $key; ?>" name="function" value="<?= $key; ?>" />
                            <label for="<?= $key; ?>"><?= $function; ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="selected">
                    Select functionality of the laptop
                </div>
                <div class="search-box">
                    <input type="text" placeholder="Search for certain function ..." />
                </div>
            </div>

            <div class="guide-btn-submit">
                <button class="btn btn-submit" type="submit">Submit</button>
            </div>
        </form>

    </div>
</div>

<?= $this->endSection(); ?>