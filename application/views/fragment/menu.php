<div class="navbar navbar-fixed-top">
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand " href="http://localhost/masterwedding/jenis/">Master Wedding</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php
                if ($this->ion_auth->logged_in()) {
                    $user = $this->ion_auth->user()->row();
                    ?>
                    <li><a href="<?= base_url() ?>welcome/cari">Pencarian</a></li>
                    <li><a href="<?= base_url() ?>Jenis">Kategori Vendor</a></li>
                    <li><a href="<?= base_url() ?>Item">Produk</a></li>
                    <li><a href="<?= base_url() ?>Vendor">Vendor</a></li>
                    <li><a href="<?= base_url() ?>Transaksi">Laporan</a></li>
                    <li><a href="<?= base_url() ?>welcome/logout">Logout (<?= $user->email ?>)</a></li>
                    <?php
                } else {
                    ?>
<!--                    <li><a href="--><?//= base_url() ?><!--welcome/cari">Pencarian</a></li>
                    <li><a href="<?= base_url() ?>welcome/">Login</a></li>-->
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
</div>
<br><br>