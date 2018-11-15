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
    include APPPATH . 'views/fragment/menu.php';

    ?>


    <header>
    </header>
    <nav>

    </nav>
    <body>
    <main>
        <h3>
            <?= validation_errors(); ?>
        </h3>

        <div class="col-md-10 col-md-offset-1">
            <h1>Tambah Item Vendor</h1>
            <div class ="panel panel-default panel-table">

                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                            <h3 class="panel-title">Detail Item Vendor</h3>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-list">
                        <form class="form-horizontal" action="<?= base_url("item/detail") ?>" name="formtambah" method="post" id="formtambah">
                            <input type="hidden" name="id" id="id" value="<?= $id ?>">
                            <input type="hidden" name="jenisid" id="jenisid" value="<?= $jenisid ?>">

                            <thead>
                            <tr>
                                <th style="text-align: right"><label class="control-label" for="jenisid"> Tipe Vendor </label></th>
                                <td><input class="form-control" type="text" name="jenisid" id="jenisid" size="30" required="required" value="<?= $typepaket ?>" readonly></td>
                            </tr>
                            <tr>
                                <th style="text-align: right"><label class="control-label" for="nama"> Nama Vendor </th>
                                <td><input class="form-control " type="text" name="lokasi" id="lokasi" size="30" required="required" value="<?= $nama ?>" readonly></td>
                            </tr>
                            <tr>
                                <th style="text-align: right"><label class="control-label" for="lokasi"> Lokasi </th>
                                <td><input class="form-control " type="text" name="lokasi" id="lokasi" size="30" required="required" value="<?= $lokasi ?>" readonly></td>
                            </tr>

                            <tr>
                                <th style="text-align: right"><label class="control-label" for="deskripsi"> Deskripsi </th>
                                <td><textarea class="form-control " name="deskripsi" id="deskripsi" size="30" required="required" value="<?= $deskripsi ?>" placeholder="<?= $deskripsi ?>" readonly></textarea></td>
                            </tr>

                            <tr>
                                <th style="text-align: right"><label class="control-label" for="starttime"> Start time </th>
                                <td><input class="form-control " type="text" name="starttime" size="30" required="required" value="<?= nice_date($starttime, 'D, d-M-y H:i')?> - <?=nice_date($endtime, 'H:i')?>" readonly></td>
                            </tr>
                            <tr>
                                <th style="text-align: right"><label class="control-label" for="quota"> Quota </th>
                                <td><input class="form-control " type="text" name="quota" id="quota" size="30" required="required" value="<?= $quota ?>" readonly></td>
                            </tr>
                            <tr>
                                <th style="text-align: right"><label class="control-label" for="harga"> Harga </th>
                                <td><input class="form-control " type="text" name="harga" id="harga" size="30" required="required" placeholder="Rp.0,00" value="<?= number_format( $harga, 2, ',', '.' )?>" readonly></td>
                            </tr>
                            <tr>
                                <th style="text-align: right"><label class="control-label" for="stock"> Stock </th>
                                <td><input class="form-control " type="text" name="stock" id="stock" size="30" required="required" value="<?= $stock ?>" readonly></td>
                            </tr>
                            <tr>
                                <th style="text-align: right"><label class="control-label" for="foto"> Foto </th>
                                <td>
                                    <img src="<?= $foto ?>" width="100" height="100"/>
                            </tr>
                            </thead

                            <tr><th colspan="2" style="text-align: center">
                                    <a class="btn btn-warning oi oi-arrow-circle-left" href="<?= base_url() ?>Item"> Kembali</a>
                                </th>
                            </tr>
                        </form>
                    </table>

                </div>
            </div>
        </div>
    </main>
    </body>

</div>
<?php include APPPATH . 'views/fragment/footer.php'; ?>





