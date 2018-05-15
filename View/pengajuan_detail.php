 <?php
 require 'src/Domain/pengajuan_model.php';
 $db = new Pengajuan();
 ?>
 <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DETAIL PENGAJUAN</b>
       </div>
       <?php
       foreach($db->tampil_data_detail($_GET['id']) as $x){
        ?>
        <div class="panel-body">
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b>Kode Pengajuan</b> <span class="pull-right"><?php echo $x['id_pengajuan']; ?></span>
                </li>
                <li class="list-group-item">
                    <b>Nama Karyawan</b> <span class="pull-right"><?php echo $x['nama_karyawan']; ?></span>
                </li>
                <li class="list-group-item">
                    <b>Nama Pengajuan</b> <span class="pull-right"><?php echo $x['nama_pengajuan']; ?></span>
                </li>
                <li class="list-group-item">
                    <b>Biaya</b> <span class="pull-right"><?php echo $x['biaya']; ?></span>
                </li>
                <li class="list-group-item">
                    <b>Alasan</b> <span class="pull-right"><?php echo $x['alasan']; ?></span>
                </li>
                <li class="list-group-item">
                    <b>Tanggal Pengajuan</b> <span class="pull-right"><?php echo $x['tgl_pengajuan']; ?></span>
                </li>
                <li class="list-group-item">
                    <b>Status Pengajuan </b> <span class="pull-right"><?php echo $x['status_pengajuan']; ?></span>
                </li>
                <li class="list-group-item">
                    <b>Kode RAB</b> <span class="pull-right"><?php echo $x['id_rab']; ?></span>
                </li>
                <br/>x
                <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>