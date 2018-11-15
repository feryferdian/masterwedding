<?php
//print_r($records);
// index dari views jenis
include APPPATH . 'views/fragment/header.php';
include APPPATH . 'views/fragment/menu.php'
?>
<div class="container">

    <body>
    <header>
    </header>
    </body>

    <div class="col-md col-md-offset-0">
        <h1>Daftar Vendor</h1>

        <div class="panel panel-default panel-table">

            <div class="panel-heading">
                <div class="row">
                    <div class="col col-xs-6">
                        <h3 class="panel-title">Daftar Vendor</h3>
                    </div>
                    <div class="col col-xs-6 text-right">
                        <a class="btn btn-sm btn-primary btn-create" href="<?= base_url('vendor/tambah')?>">Tambah</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                    <thead>
                    <tr>
                        <th style="text-align: center"><em class="glyphicon glyphicon-cog"></em></th>
                        <th class="hidden-xs">No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Telpon</th>
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
                            <a class="btn btn-default " href="<?= base_url("vendor/detail/{$data['id']}") ?>" ><em class="glyphicon glyphicon-zoom-in"></em></a>
                            <a class="btn btn-default " href="<?= base_url("vendor/edit/{$data['id']}") ?>" ><em class="glyphicon glyphicon-pencil"></em></a>
                            <a onclick="return confirm('Anda yakin akan menghapus data <?= $data['nama']?>')" class="btn btn-danger" href="<?= base_url("vendor/hapus/{$data['id']}") ?>"><em class="glyphicon glyphicon-trash"></em></a>
                        </td>
                        <input class="hidden-xs" type="hidden" value=" <?= $data['id']?> ">
                        <td class="hidden-xs"><?= $no ?></td>
                        <td><?= $data['nama']?></td>
                        <td><?= $data['alamat']?></td>
                        <td><?= $data['telpon']?></td>
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
<?php include APPPATH . 'views/fragment/footer.php';?>