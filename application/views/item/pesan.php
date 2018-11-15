<?php
//print_r($records);
// index dari views jenis
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu_pembeli.php'
?>

    <div class="container-fluid">


        <body>
        <header>
        </header>
        </body>
        <form method="post" action="<?= base_url("item/pesan_save") ?>" name="item" id="item">
            <div class="col-md col-md-offset-0" style="width: 1200px">
                <h1>Daftar Pesanan</h1>

                <div class="panel panel-default panel-table">


                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-xs-6">
                                <h3 class="panel-title">Daftar Pesanan

                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-list">
                            <thead>
                            <tr>
                                <th class="hidden-xs">No</th>
                                <th>Jenis</th>
                                <th>Nama Vendor</th>
                                <th>Nama Paket</th>
                                <th>Lokasi</th>
                                <th>Deskripsi</th>
                                <th>Tanggal</th>
                                <!--                        <th>Akhir</th>-->
                                <th>Quota</th>
                                <th>Foto</th>
                                <th>Harga</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            $no = 0;
                            $subtotal = 0;
                            foreach ($records as $idx => $data) {
                                $subtotal += $data['harga'];
                            }

                            foreach ($records as $idx => $data) {
                            $no++;
                            ?>
                                <input class="hidden-xs" type="hidden" value=" <?= $data['id'] ?> " name="id" id="id">
                                <input class="hidden-xs" type="hidden" value=" <?= $data['userid'] ?> " name="userid" id="userid">
<?php
$con=mysqli_connect("localhost","root","","dbmasterwed");
    $sql="SELECT notaid from NOTA order by notaid";
if($result=mysqli_query($con,$sql)){
    $rowcount=mysqli_num_rows($result);
}
$nmr_nota=$rowcount+=1;
                                $no_nota = substr(date('Y-m-d'),2,2).substr(date('Y-m-d'),5,2).substr(date('Y-m-d'),8,2).$data['userid'].$nmr_nota;
            ?>

                                <input class="hidden-xs" type="hidden" value=" <?= $no_nota ?>" name="no_nota" id="no_nota">
                                <td class="hidden-xs"><?= $no ?></td>
                                <td><?= $data['typepaket'] ?></td>
                            <input class="hidden-xs" type="hidden" value=" <?= $data['vendorid'] ?>" name="idvendor" id="idvendor">
                                <td><?= $data['namavendor'] ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['lokasi'] ?></td>
                                <td><?= $data['deskripsi'] ?></td>
                                <td width="10%"><?= nice_date($data['starttime'], 'D-d-M-y H:i') ?>
                                    - <?= nice_date($data['endtime'], 'H:i') ?></td>
                                <!--                        <td>-->
                                <?//= nice_date($data['endtime'], 'D-d-M-y H:i')?><!--</td>-->
                                <td><?= $data['quota'] ?></td>
                                <td><img src="<?= $data['foto'] ?>" width="100" height="100"/></td>
                                <td>Rp.<?= number_format($data['harga'], 2, ',', '.') ?>

                                </td>
                            </tr>


                            </tbody>

                            <?php
                            }
                            ?>
                            <tr>
                                <td colspan="9" align="right">Subtotal</td>
                                <td><input class="hidden" id="subtotal" name="subtotal" value="<?= $subtotal?>">Rp.<?= number_format($subtotal,2,',','.')
                                    ?></td>
                            </tr>
<!--                            <tr>
                                <td colspan="9" align="right">Bukti Bayar</td>
                                <td><input type="file" name="foto" id="foto" required="required"></td>
                            </tr>
-->
                        </table>
                        <?php if (isset($links)) { ?>
                            <?php echo $links ?>
                        <?php } ?>

                        <button type="submit" class="btn-lg btn-primary pull-right" id="btncheckout">Bayar</button>


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