<?php
//print_r($records);
// index dari views jenis
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu_penjual.php'
?>

    <div class="container-fluid">


        <body>
        <header>

        </header>
        </body>
        <form method="post" action="<?= base_url("item/pesan") ?>">
            <div class="col-md col-md-offset-0" style="width: 1200px">
                <h1>Produk Vendor</h1>

                <div class="panel panel-default panel-table">


                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-xs-6">
                                <h3 class="panel-title">Daftar Produk Vendor</h3>
                            </div>
                            <div class="col col-xs-6 text-right">
                                <a class="btn btn-sm btn-primary btn-create" href="<?= base_url('item/tambah') ?>">Tambah</a>
                            </div>
                            <div class="col col-xs-6 text-right">
                                <a class="btn btn-sm btn-primary btn-create"
                                   href="<?= base_url('item/pesan') ?>">pesan</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                            <tr>
                                <th style="text-align: center"><em class="glyphicon glyphicon-cog"></em></th>
                                <th class="hidden-xs">No</th>
                                <th>Jenis</th>
                                <th>Nama Vendor</th>
                                <th>Nama Paket</th>
                                <th>Lokasi</th>
                                <th>Deskripsi</th>
                                <th>Tanggal</th>
                                <!--                        <th>Akhir</th>-->
                                <th>Quota</th>
                                <th>Harga</th>
                                <th>Ceklist</th>
                                <th>Foto</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            $no = 0;
                            foreach ($records as $idx => $data) {
                            $no++;
                            ?>
                            <tr>
                                <td align="center" width="14%">

                                    <a class="btn btn-default " href="<?= base_url("item/detail/{$data['id']}") ?>"><em
                                                class="glyphicon glyphicon-zoom-in"></em></a>

                                </td>
                                <input class="hidden-xs" type="hidden" value=" <?= $data['id'] ?> ">
                                <td class="hidden-xs"><?= $no ?></td>
                                <td><?= $data['typepaket'] ?></td>
                                <td><?= $data['namavendor'] ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['lokasi'] ?></td>
                                <td><?= $data['deskripsi'] ?></td>
                                <td width="10%"><?= nice_date($data['starttime'], 'D-d-M-y H:i') ?>
                                    - <?= nice_date($data['endtime'], 'H:i') ?></td>
                                <!--                        <td>-->
                                <?//= nice_date($data['endtime'], 'D-d-M-y H:i')?><!--</td>-->
                                <td><?= $data['quota'] ?></td>
                                <td>Rp.<?= number_format($data['harga'], 2, ',', '.') ?></td>
                                <td>
                                    <div class="form-group">
                                        <input type="checkbox" name="id[<?= $data['id'] ?>]"
                                               id="fancy-checkbox-primary-custom-icons" autocomplete="off"/>

                                    </div> <?/*= $data['stock']*/ ?></td>
                                <td><img src="<?= $data['foto'] ?>" width="100" height="100"/></td>
                            </tr>
                            </tbody>

                            <?php
                            }
                            ?>

                        </table>
                        <?php if (isset($links)) { ?>
                            <?php echo $links ?>
                        <?php } ?>
                        <h1>Jumlah Pesanan </h1>

                        <button type="submit" class="btn-lg btn-primary pull-right" id="btncheckout">Proses</button>


                    </div>


                </div>
                <!--    <div class="panel-footer">
                            <div class="row">
                                <div class="col col-xs-4">Page 1 </div>
                                <div class="col col-xs-8">
                                    <ul class="pagination hidden-xs pull-right">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                    </ul>
                                    <ul class="pagination visible-xs pull-right">
                                        <li><a href="#">«</a></li>
                                        <li><a href="#">»</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                -->
            </div>

    </div>
    </form>
<?php include APPPATH . 'views/fragment/footer.php'; ?>