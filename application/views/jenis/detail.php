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
    include APPPATH . 'views/fragment/menu.php'?>


    <body>
    <header>
        <h1>Detail Jenis</h1>
    </header>

    <main>
        <h3>
            <?= validation_errors(); ?>
        </h3>
        <table class="table table-bordered ">
                <tr>
                    <th><label for="nama"> Kode Vendor </label></th>
                    <th><?= $kode_jenis ?></th>
                </tr>
                <tr>
                    <th><label for="type"> Tipe Vendor </label></th>
                    <th><?= $type ?></th>
                </tr>
        </table>



    </main>
    <?php include APPPATH . 'views/fragment/footer.php'; ?>
    </body>
</div>
