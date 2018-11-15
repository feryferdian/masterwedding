<?php
include APPPATH . '/views/fragment/header.php';
?>
<main>
    <h2>Aktivasi Akun Anda</h2>
    <?php
    if(isset($message)){
        echo $message;
        exit;
    }
    ?>
    <form action="<?= base_url("aktivasi/activate") ?>"
          class="form-horizontal"
          name="form"
          method="post"
          id="form">
        <input type="hidden" name="activation_code" value="<?= $activation_code ?>"/>
        <div class="form-group">
            <label class="control-label" for="group">Pilih Sebagai:</label>
            <input type="radio" name="group" id="group"
                   value="Vendor" checked="checked">Vendor
            <input type="radio" name="group" id="group"
                   value="Pembeli">Pembeli
        </div>
        <div class="form-group">
            <input type="submit" value="Aktivasi" id="submit" name="submit">
        </div>
    </form>
</main>
