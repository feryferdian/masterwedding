<?php
/**
 * Created by PhpStorm.
 * User: Fery
 * Date: 18/09/2018
 * Time: 5:55
 */
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu_penjual.php';
?>
<main>
    <h2>Cari Karyawan</h2>
    <form action="<?= base_url("welcome/cari_action")?>"
          class="form-horizontal" name="formtambah" method="post" id="formtambah">
        <div class="form-group">
            <label></label>
            <input type="text" name="nama" id="nama" placeholder="Ketik nama" size="30" required="required">
            <input type="submit" value="Cari" id="submit" name="submit">
        </div>
    </form>
    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Lokasi</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Quota</th>
        </tr>
        <?php
        if (isset($records)) {
            foreach ($records as $idx => $data) {
                ?>
                <tr>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['lokasi'] ?></td>
                    <td><?= $data['starttime'] ?></td>
                    <td><?= $data['endtime'] ?></td>
                    <td><?= $data['quota'] ?></td>
                </tr>

                <?php
            }
        }
        ?>
    </table>
</main>