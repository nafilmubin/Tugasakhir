<?php
require 'src/Domain/rab_model.php';
$db = new RAB();
?>
<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
         <b>DETAIL RAB</b>
     </div>
     <?php
     foreach($db->tampil_data_detail($_GET['id']) as $data){
        ?>
        <div class="panel-body">
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b>ID  RAB </b> <span class="pull-right"><?php echo $data['id_rab']; ?></span>
                </li>
                <li class="list-group-item">
                    <b>Nama Proyek</b> <span class="pull-right"><?php echo $data['nama_proyek']; ?></span>
                </li>
                <li class="list-group-item">
                    <b>Nama Project Manager</b> <span class="pull-right"><?php echo $data['nama_karyawan']; ?></span>
                </li>
                <li class="list-group-item">
                    <b>Attachment</b> 
                    <span class="pull-right"><a href="download.php?page=<?php echo $data['attachment']; ?>" target="blank"><?php echo $data['attachment']; ?></a></span>
                </li>

                <li class="list-group-item">
                    <b>Periode</b> <span class="pull-right"><?php echo $data['periode']; ?></span>
                </li>
                <li class="list-group-item">
                    <b>Keterangan</b> <?php if($data['keterangan']=="Disetujui"){
                        echo "<span class='pull-right label label-success'>Disetujui</span>";
                    }else{
                       echo "<span class='pull-right label label-danger'>Belum Disetujui</span>";
                   } ?>
               </li>
               <li class="list-group-item">
                <center><h4><b>Detail Anggaran</b></h4></center>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dynamic_field">
                        <tr>
                            <td><b>Nama Anggaran</b></td>
                            <td><b>Nominal</b></td>

                        </tr>
                        <?php
                        foreach($db->tampil_data_detail_angg($_GET['id']) as $data2){
                            ?>
                            <tr>
                                <td><?php echo $data2['nama_anggaran']; ?></td>
                                <td>Rp <?php echo rp($data2['nominal']); ?></td>
                                
                            </tr>
                            <?php 
                            
                        } ?>
                    </table>

                </li>
                <br>
                <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a>
                  <?php } ?>
            </ul>
        </div>
    </div>
</div>

<?php 

function rp($angka){    
    $angka = number_format($angka); $angka = str_replace(',', '.', $angka); 
    $angka ="$angka";   
    return $angka;
} ?>