<?php
include APPPATH . '/views/fragment/header.php';
include APPPATH . '/views/fragment/menu.php';
?>

<div class="page-header">
    <h1>Nota Pembelian</h1>
</div>
<div class="row" id="nota">
    <table class="table table-bordered">
        <tr>
            <th>Nomor Nota</th>
            <td><?= $no_nota ?></td>
        </tr>
        <tr>
            <th>Tanggal </th>
            <td><?= $tanggal ?></td>
        </tr>
        <tr>
            <th>Total </th>
            <td>Rp.<?= number_format($post['subtotal'],0,',','.')
                ?></td>
        </tr>
    </table>
    <hr>
</div>
