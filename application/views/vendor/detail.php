<?php
/**
 * Created by PhpStorm.
 * User: Fery
 * Date: 18/09/2018
 * Time: 5:55
 */
?>
<div class="container">
    <?php
    include APPPATH . 'views/fragment/header.php';
    include APPPATH . 'views/fragment/menu.php'

    ?>

    <body>
    <header>
        <h1>Detail Produk</h1>
    </header>

    <main>
        <h3>
            <?= validation_errors(); ?>
        </h3>
        <table class="table table-bordered ">
            <tr>
                <th><label for="nama"> Nama </label></th>
                <th><?= $nama ?></th>
            </tr>
            <tr>
                <th><label for="lokasi"> Lokasi </label></th>
                <th><?= $lokasi ?></th>
            </tr>
            <tr>
                <th><label for="deskripsi"> Deskripsi </label></th>
                <th><?= $deskripsi ?></th>
            </tr>
            <tr>
                <th><label for="starttime"> Start Time </label></th>
                <th><?= $starttime ?></th>
            </tr>
            <tr>
                <th><label for="endtime"> End Time </label></th>
                <th><?= $endtime ?></th>
            </tr>
            <tr>
                <th><label for="quota"> Quota </label></th>
                <th><?= $quota ?></th>
            </tr>
            <tr>
                <th><label for="foto"> Foto </label></th>
                <th><img src="<?= $foto ?>" width="100" height="100"/></th>
            </tr>
            <tr>
                <th><label for="harga"> Harga </label></th>
                <th><?= $harga ?></th>
            </tr>
            <tr>
                <th><label for="stock"> Stock </label></th>
                <th><?= $stock ?></th>
            </tr>
        </table>



    </main>
    <?php include APPPATH . 'views/fragment/footer.php'; ?>
    </body>
</div>
