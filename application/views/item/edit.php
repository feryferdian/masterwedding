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
            <h1>Edit Item Vendor</h1>
            <div class="panel panel-default panel-table">

                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                            <h3 class="panel-title">Edit Item Vendor</h3>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-list">
                        <form class="form-horizontal" action="<?= base_url("item/edit_save") ?>" enctype="multipart/form-data"name="formtambah" method="post" id="formtambah">
                            <input type="hidden" name="id" id="id" value="<?= $id ?>">
                            <input type="hidden" name="jenisid" id="jenisid" value="<?= $jenisid ?>">

                            <thead>
                            <tr>
                                <th style="text-align: right"><label class="control-label" for="jenisid"> Tipe Vendor </label></th>
                                <th><select class = "form-control" id="jenisid" name="jenisid" required="required">
                                        <?php
                                        foreach ($jenis as $key => $value){
                                            $id=$value['id']; ?>
                                            <option value="<?= $value['id'] ?>"
                                            <?php
                                            if ($id == $jenisid) { echo "selected"; } ?>
                                            ><?= $value['type'] ?></option>";
                                            <?php
                                        }
                                        ?>

                                    </select></th>
                            </tr>
                            <tr>
                                <th style="text-align: right"><label class="control-label" for="nama"> Nama Vendor </th>
                                <td><input class="form-control " type="text" name="nama" id="nama" size="12" required="required" value="<?= $namavendor ?>"readonly></td>
                            </tr>
                            <tr>
                                <th style="text-align: right"><label class="control-label" for="nama"> Nama Produk </th>
                                <td><input class="form-control " type="text" name="nama" id="nama" size="12" required="required" value="<?= $nama ?>"></td>
                            </tr>
                            <tr>
                                <th style="text-align: right"><label class="control-label" for="lokasi"> Lokasi </th>
                                <td><input class="form-control " type="text" name="lokasi" id="lokasi" size="12" required="required" value="<?= $lokasi ?>"></td>
                            </tr>

                            <tr>
                                <th style="text-align: right"><label class="control-label" for="deskripsi"> Deskripsi </th>
                                <td><input class="form-control " type="text" name="deskripsi" id="deskripsi" size="12" required="required" value="<?= $deskripsi ?>"></td>
                            </tr>

                            <tr>
                                <th style="text-align: right"><label class="control-label" for="starttime"> Start time </th>
                                <td><input class="form-control datepicker col-sm-4" type="datetime-local" name="starttime" size="12" required="required" value="<?= $starttime ?>" placeholder="ddmmyy"></td>
                            </tr>
                            <tr>

                                <th style="text-align: right"><label class="control-label" for="endtime"> End time </th>
                                <td><input class="form-control datepicker col-sm-4"  type="datetime-local" name="endtime" id="endtime" size="12" required="required" value="<?= $endtime ?>"></td>
                            </tr>
                            <tr>
                                <th style="text-align: right"><label class="control-label" for="quota"> Quota </th>
                                <td><input class="form-control " type="text" name="quota" id="quota" size="12" required="required" value="<?= $quota ?>"></td>
                            </tr>
                            <tr>
                                <th style="text-align: right"><label class="control-label" for="harga"> Harga </th>
                                <td><input class="form-control " type="text" name="harga" id="harga" size="12" required="required" placeholder="Rp.0,00" value="<?= number_format( $harga, 2, ',', '.' )?>"></td>
                            </tr>
                            <tr>
                                <th style="text-align: right"><label class="control-label" for="stock"> Stock </th>
                                <td><input class="form-control " type="text" name="stock" id="stock" size="12" required="required" value="<?= $stock ?>"></td>
                            </tr>
                            <tr>
                                <th style="text-align: right"><label class="control-label" for="foto"> Foto </th>
                                <td>
                                    <img src="<?= $foto ?>" width="100" height="100"/>
                                    <input class="form-control" type="file" name="foto" id="foto" required="required"></td>
                            </tr>
                            </thead

                            <tr><th colspan="2" style="text-align: center">
                                    <input class="btn btn-success" type="submit" value="Simpan" id="submit" name="submit">
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





