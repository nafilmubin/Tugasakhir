<?php
require 'src/Domain/pengajuan_model.php';
$db = new Pengajuan();
?>
<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DATA RAB</b>
        </div>
    <div class="panel-body">
        <form role="form" method="POST" action="src/Infrastruktur/pengajuan.php?aksi=update">
           <?php
           foreach($db->edit($_GET['id']) as $data){
            ?>
                    <div class="form-group">
                        <label>Kode Pengajuan</label>
                        <input class="form-control" type="text" name="id_pengajuan" readonly="readonly" value="<?php echo $data['id_pengajuan']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama Karyawan</label>
                        <input class="form-control" type="text" name="id_karyawan" value="<?php echo $data['id_karyawan']; ?>">
                    </div>
                     <div class="form-group">
                        <label>RAB</label>
                        <input class="form-control" type="text" name="id_rab" value="<?php echo $data['id_rab']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama Pengajuan</label>
                        <input class="form-control" type="text" name="nama_pengajuan" value="<?php echo $data['nama_pengajuan']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Biaya</label>
                        <input class="form-control" type="text" name="biaya" value="<?php echo $data['biaya']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Alasan</label>
                        <input class="form-control" type="text" name="alasan" value="<?php echo $data['alasan']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pengajuan</label>
                        <input class="form-control datepicker" type="text" name="tgl_pengajuan" value="<?php echo $data['tgl_pengajuan']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Status Pengajuan</label>
                        <select class="form-control" name="status_pengajuan">
                        <option value="Menunggu" <?php if ($data['status_pengajuan'] == 'Menunggu') echo 'selected'; ?> >Menunggu </option>
                        <option value="Diterima" <?php if ($data['status_pengajuan'] == 'Diterima') echo 'selected'; ?>>Diterima</option>
                        <option value="Ditolak" <?php if ($data['status_pengajuan'] == 'Ditolak') echo 'selected'; ?>>Ditolak</option>
                        </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-info">Save </button>
                    <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a> 
                    <?php } ?>
                </form>
        </div>
    </div>
</div>
</section>