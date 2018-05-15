<?php
require 'src/Domain/pengajuan_model.php';
$db = new Pengajuan();
?>
<div class="header col-md-12" style="margin-top: 15px;">
    <div class="col-md-7">
    </div>
    <!--    Context Classes  -->
    <div class="col-md-5">  
        <a href="?page=pengajuan_create">
            <button class="btn btn-primary col-md-offset-5"><i class="fa fa-plus"></i> Tambah Data</button>
        </a>
        <a href="views/pembeli_export.php" target="blank">
            <button class="btn btn-success"><i class="fa fa-download"></i> Export Excel</button>
        </a>      
    </div>

</div>



<div class="col-md-12">

   <!--    Context Classes  -->
   <div class="panel panel-default">
    <div class="panel-heading">
        Pengajuan
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table id="tabel_audit" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Kode Pengajuan</th>
                        <th>Nama Karyawan</th>
                        <th>RAB</th>
                        <th>Nama Pengajuan</th>
                        <th>Biaya</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($db->tampil_data() as $x){
                        ?>
                        <tr>
                            <td><?php echo $x['id_pengajuan'] ?></td>
                            <td><?php echo $x['nama_karyawan'] ?></td>
                            <td><?php echo $x['id_rab'] ?></td>
                            <td><?php echo $x['nama_pengajuan'] ?></td>                                                
                            <td><?php echo $x['biaya'] ?></td>
                            <td>
                                <a href="?page=pengajuan_detail&id=<?php echo $x['id_pengajuan'];?>">
                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </a>
                                <a href="?page=pengajuan_edit&id=<?php echo $x['id_pengajuan'];?>">
                                    <button class="btn btn-info"><i class="fa fa-pencil"></i></button>
                                </a>
                                <a href="src/Infrastruktur/pengajuan.php?aksi=hapus&id=<?php echo $x['id_pengajuan'];?>">
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>