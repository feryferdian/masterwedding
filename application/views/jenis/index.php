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

    <div class="col-md-10 col-md-offset-1">
        <h1>Kategori Vendor</h1>

        <div class="panel panel-default panel-table">

            <div class="panel-heading">
                <div class="row">
                    <div class="col col-xs-6">
                        <h3 class="panel-title">Daftar Kategori Vendor</h3>
                    </div>
                    <div class="col col-xs-6 text-right">
                        <a class="btn btn-sm btn-primary btn-create" href="<?= base_url('jenis/tambah')?>">Tambah</a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                    <thead>
                    <tr>
                        <th style="text-align: center"><em class="glyphicon glyphicon-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Kode Vendor</th>
                        <th>Jenis</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    $no = 0;
                    foreach ($records as $idx => $data) {
                        $no++;
                    ?>
                    <tr>
                        <td align="center">
                            <a class="btn btn-default " href="<?= base_url("jenis/edit/{$data['id']}") ?>" ><em class="glyphicon glyphicon-pencil"></em></a>
                            <a onclick="return confirm('Anda yakin akan menghapus data <?= $data['kode_jenis']?>')" class="btn btn-danger" href="<?= base_url("jenis/hapus/{$data['id']}") ?>"><em class="glyphicon glyphicon-trash"></em></a>
                        </td>
                        <input type="hidden" class="hidden-xs" value=" <?= $data['id']?>">
                        <td ><?= $no ?></td>
                        <td><?= $data['kode_jenis']?></td>
                        <td><?= $data['type']?></td>
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
