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
    <h1>Tambah Vendor</h1>
    <div class="panel panel-default panel-table">

        <div class="panel-heading">
            <div class="row">
                <div class="col col-xs-6">
                    <h3 class="panel-title">Tambah Vendor</h3>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-list">
                <form class="form-horizontal" action="<?= base_url("vendor/tambah_save") ?>" enctype="multipart/form-data"name="formtambah" method="post" id="formtambah">
                    <thead>
                    <tr>
                        <th style="text-align: right"><label class="control-label" for="jenisid"> Tipe Vendor </label></th>
                        <th><select class = "form-control" id="jenisid" name="jenisid" required="required">
                                <?php
                                foreach ($jenis as $key => $value){
                                    ?>
                                    <option value="<?= $value['id'] ?>"><?= $value['type'] ?></option>
                                    <?php
                                }
                                ?>
                            </select></th>
                    </tr>
                    <tr>
                        <th style="text-align: right"><label class="control-label" for="nama"> Nama Vendor </th>
                        <td><input class="form-control " type="text" name="nama" id="nama" size="12" required="required"></td>
                    </tr>
                    <tr>
                        <th style="text-align: right"><label class="control-label" for="alamat"> Alamat </th>
                        <td><input class="form-control " type="text" name="alamat" id="alamat" size="12" required="required"></td>
                    </tr>

                    <tr>
                        <th style="text-align: right"><label class="control-label" for="telpon"> Telpon </th>
                        <td><input class="form-control " type="text" name="telpon" id="telpon" size="12" required="required"></td>
                    </tr>

                    <tr>
                        <th style="text-align: right"><label class="control-label" for="foto"> Foto </th>
                        <td><input class="form-control" type="file" name="foto" id="foto" required="required"></td>
                    </tr>
                    </thead

                    <tr><th colspan="2" style="text-align: center">
                            <input class="btn btn-success" type="submit" value="Simpan" id="submit" name="submit">
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




