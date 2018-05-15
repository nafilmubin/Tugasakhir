<?php
require 'src/Domain/rab_model.php';
$db = new RAB();
?>
<div class="header col-md-12" style="margin-top: 15px;">
    <div class="col-md-7">
        <form role="form" method="POST" action="?page=pengajuan_index">
            <div class="form-group col-md-5">
            </div>
        </form>
    </div>

    <div class="col-md-5">
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
                        <th>No</th>
                        <th>Proyek</th>
                        <th>Project Manager</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                   $no = 1;
                   foreach($db->tampil_data() as $x){
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $x['nama_proyek'] ?></td>
                        <td><?php echo $x['nama_karyawan'] ?></td>
                        <td>
                        <a href="?page=rab_detail&id=<?php echo $x['id_rab'];?>">
                            <button class="btn btn-info"><i class="fa fa-search"></i></button>
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