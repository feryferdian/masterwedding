<?php
/**
 * Created by PhpStorm.
 * User: Fery
 * Date: 18/09/2018
 * Time: 5:55
 */
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php';

?>
<script type="text/javascript">
    $(function () {
        $('input.datepicker').each(function () {
            var datepicker = $(this);
            datepicker.bootstrapDatePicker(datepicker.data());
        });
    });
</script>
<body>
<header>
    <h1>Edit Produk</h1>
</header>
<nav>
</nav>
<main>
    <h3></h3>
    <table class="table table-bordered ">
        <form action="<?= base_url("vendor/edit_save") ?>" name="formedit" enctype="multipart/form-data" method="post" id="formedit" class="form-horizontal">
            <input type="hidden" name="id" id="id" value="<?= $id ?>">
            <input type="hidden" name="jenisid" id="jenisid" value="<?= $jenisid ?>">
            <tr>
            <th><label for="nama"> Nama </label></th>
            <th><input type="text" name="nama" id="nama" value="<?= $nama ?>" size="30" required="required"></th>
            </tr>
            <tr>
                <th><label for="lokasi"> Lokasi </label></th>
                <th><input type="text" name="lokasi" id="lokasi" value="<?= $lokasi ?>" required="required">
                </th>
            </tr>
            <tr>
                <th><label for="deskripsi"> Deskripsi </label></th>
                <th><input type="text" name="deskripsi" id="deskripsi" value="<?= $deskripsi ?>" size="30" required="required"></th>
            </tr>
            <tr>
                <th><label for="starttime"> Start Time </label></th>
                <th><input type="text" name="starttime" id="starttime" value="<?= $starttime ?>" size="30" required="required"></th>
            </tr>
            <tr>
                <th><label for="endtime"> End Time </label></th>
                <th><input type="text" name="endtime" id="endtime" value="<?= $endtime ?>" size="30" required="required"></th>
            </tr>
            <tr>
                <th><label for="quota"> Quota </label></th>
                <th><input type="text" name="quota" id="quota" value="<?= $quota ?>" size="30" required="required"></th>
            </tr>
            <tr>
                <th><label for="foto"> Foto </label></th>
                <th><img src="<?= $foto ?>" width="100" height="100"/>
                    <input type="file" name="foto" id="foto">
                    <input type="hidden" name="foto_lama" id="foto_lama" value="<?= $foto ?>">
                </th>
            </tr>
            <tr>
                <th><label for="harga"> Harga </label></th>
                <th><input type="text" name="harga" id="harga" value="<?= $harga ?>" size="30" required="required"></th>
            </tr>
            <tr>
                <th><label for="stock"> Stock </label></th>
                <th><input type="text" name="stock" id="stock" value="<?= $stock ?>" size="30" required="required"></th>
            </tr>
<tr>

            <th colspan="2"><input style="margin-left: 50%" type="submit" value="Simpan" id="submit" name="submit"></th>
</tr>
    </form>
    </table>
</main>
<?php include APPPATH . 'views/fragment/footer.php'; ?>
</body>
