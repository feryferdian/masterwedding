<?php
//print_r($records);
// index dari views jenis
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php'
?>

    <div class="container-fluid">


        <body>
        <header>
        </header>
        </body>

        <div class="col-md col-md-offset-0"style="width: 1200px">
            <h1>Laporan Transaksi</h1>

            <div class="panel panel-default panel-table">


                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                            <h3 class="panel-title">Laporan Transaksi</h3>
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    <table class="table table-striped ">
                        <?php
                        $no = 0;
                        foreach($records as $idx => $data) {
                            $no++;

                        ?>
                        <tr>
                            <th width="15%">Nota</th>
                            <th><?= $data['no_nota'] ?></th>
                        </tr>
                        <tr>
                            <th>Tanggal</th>
                            <th><?= $data['tanggal'] ?></th>
                        </tr>
                        <tr>
                            <th>User</th>
                            <th><?= $data['userid'] ?></th>
                        </tr>
                    </table>

                    <table class="table table-striped table-bordered ">
                        <thead>
                        <tr>
                            <th class="hidden-xs">No</th>
                            <th>Id Nota</th>
                            <th>Id Vendor</th>
                            <th>Id Item</th>
                            <th>Harga</th>
                        </tr>
                        </thead>

                        <?php
                        $no=0;
                        $record = $this->detail->find_by_id_nota($data['notaid']);
                        foreach ($record as $idx => $data2) {
                            $no++;

                            ?>

                            <tbody>
                            <tr>
                                <td class="hidden-xs"><?= $no ?></td>
                                <td><?= $data2['no_nota'] ?></td>
                                <td><?= $data2['idvendor'] ?></td>
                                <td><?= $data2['itemid'] ?></td>
                                <!--                                <td width="10%"><?/*= nice_date($data['tanggal'], 'D-d-M-y H:i') */?>
                                    - <?/*= nice_date($data['tanggal'], 'H:i') */?></td>
                                <!--                        <td>-->
                                <?/* //= nice_date($data['endtime'], 'D-d-M-y H:i')*/?><!--</td>-->
                                <td>Rp.<?= number_format($data2['subtotal'], 2, ',', '.') ?></td>
                            </tr>
                            </tbody>

                            <?php }?>

                    </table>
                    <?php }?>


                </div>


            </div>

        </div>

    </div>

<?php include APPPATH . 'views/fragment/footer.php';?>