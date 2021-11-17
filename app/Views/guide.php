<?= $this->extend('layouts/main/template'); ?>

<?= $this->section('content'); ?>

<!--Guide-->
<div class="guide container">
    <div class="row">
        <h1 class="guide-title"><b>Guide</b></h1>

        <div class="option-title">
            <h2>Harga</h2>
        </div>
        <div class="select-box">
            <div class="options-container">
                <div class="option">
                    <input type="radio" class="radio" id="1-10" name="range" />
                    <label for="1-10">1 - 10 jutaan</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="10-20" name="range" />
                    <label for="10-20">10 - 20 jutaan</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="20-30" name="range" />
                    <label for="20-30">20 - 30 jutaan</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="30-40" name="range" />
                    <label for="30-40">30 - 40 jutaan</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="40-50" name="range" />
                    <label for="40-50">40 - 50 jutaan</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="50-100" name="range" />
                    <label for="50-100">50 - 100 jutaan</label>
                </div>
            </div>

            <div class="selected">
                Select Price Range
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search for certain price ..." />
            </div>
        </div>

        <div class="option-title">
            <h2>Merk</h2>
        </div>
        <div class="select-box">
            <div class="options-container">
                <div class="option">
                    <input type="radio" class="radio" id="asus" name="merk" />
                    <label for="asus">Asus</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="acer" name="merk" />
                    <label for="acer">Acer</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="lenovo" name="merk" />
                    <label for="lenovo">Lenovo</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="apple" name="merk" />
                    <label for="apple">Apple</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="alienware" name="merk" />
                    <label for="alienware">Alienware</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="dell" name="merk" />
                    <label for="dell">Dell</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="hp" name="merk" />
                    <label for="hp">HP</label>
                </div>
            </div>

            <div class="selected">
                Select specified brand
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search for certain brand ..." />
            </div>
        </div>

        <div class="option-title">
            <h2>Jenis</h2>
        </div>
        <div class="select-box">
            <div class="options-container">
                <div class="option">
                    <input type="radio" class="radio" id="notebook" name="jenis" />
                    <label for="notebook">Notebook</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="netbook" name="jenis" />
                    <label for="netbook">Netbook</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="ultrabook" name="jenis" />
                    <label for="ultrabook">Ultrabook</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="hybrid" name="jenis" />
                    <label for="hybrid">Hybrid Laptop</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="businesslap" name="jenis" />
                    <label for="businesslap">Business Laptop</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="gaminglap" name="jenis" />
                    <label for="gaminglap">Gaming Laptop</label>
                </div>
            </div>

            <div class="selected">
                Select laptop type
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search for certain type ..." />
            </div>
        </div>

        <div class="option-title">
            <h2>Fungsi</h2>
        </div>
        <div class="select-box">
            <div class="options-container">
                <div class="option">
                    <input type="radio" class="radio" id="study" name="function" />
                    <label for="study">Study</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="gaming" name="function" />
                    <label for="gaming">Gaming</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="editing" name="function" />
                    <label for="editing">Editing</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="multimedia" name="function" />
                    <label for="multimedia">Multimedia</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="business" name="function" />
                    <label for="business">Business</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="coding" name="function" />
                    <label for="coding">Coding</label>
                </div>
                <div class="option">
                    <input type="radio" class="radio" id="design" name="function" />
                    <label for="design">Design</label>
                </div>
            </div>

            <div class="selected">
                Select functionality of the laptop
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search for certain function ..." />
            </div>
        </div>

        <div class="guide-btn-submit">
            <a href="/results">
                <button class="btn btn-submit" type="button">Submit</button>
            </a>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>