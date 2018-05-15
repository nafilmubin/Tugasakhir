<?php
require 'src/Domain/rab_model.php';
$db = new RAB();
?>
<div class="header col-md-12" style="margin-top: 15px;">
    <div class="col-md-7">
        <form role="form" method="POST" action="?page=pengajuan_index">
            <div class="form-group col-md-5">
                <input class="form-control" type="text" name="search" value="">
            </div>
            <button type="submit" name="submit" class="btn btn-info col-md-2">Search </button>
        </form>
    </div>

    <div class="col-md-5">
        <a href="?page=rab_create">
            <button class="btn btn-primary col-md-offset-5"><i class="fa fa-plus"></i> Tambah Data</button>
        </a>
        <a href="views/rab_export.php" target="blank">
            <button class="btn btn-primary"><i class="fa fa-download"></i> Export Excel</button>
        </a>  
    </div>


</div>



<div class="col-md-12" style="margin-top: 5px;">

   <!--    Context Classes  -->
   <div class="panel panel-default">
    <div class="panel-heading">
        Rancangan Anggaran Biaya
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table id="tabel_audit" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Kode RAB</th>
                        <th>Proyek</th>
                        <th>Project Manager</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                   foreach($db->tampil_data() as $x){
                    ?>
                    <tr>
                        <td><?php echo $x['id_rab'] ?></td>
                        <td><?php echo $x['nama_proyek'] ?></td>
                        <td><?php echo $x['nama_karyawan'] ?></td>
                        <td>
                            <?php if($x['keterangan']=="Disetujui"){
                                echo "<span class='label label-success'>Disetujui</span>";
                            }else{
                                echo "<span class='label label-danger'>Belum Disetujui</span>";
                            } ?>
                        </td>
                     <td>

                        <a href="?page=rab_detail&id=<?php echo $x['id_rab'];?>">
                            <button class="btn btn-info"><i class="fa fa-search"></i></button>
                        </a>
                        <?php if ($x['keterangan']=="Belum Ditanggapi") { ?>

                        <a href="src/Infrastruktur/proyek.php?aksi=hapus&id=<?php echo $x['id_proyek'];?>"></a>
                        <?php }else{


                        } ?>

                    </td>

                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>