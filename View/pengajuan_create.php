<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DATA PENGAJUAN</b>
        </div>
    <div class="panel-body">
        <form role="form" method="POST" action="src/Infrastruktur/pengajuan.php?aksi=tambah">
                    <div class="form-group">
                        <label>Kode Pengajuan</label>
                        <input class="form-control" type="text" name="id_pengajuan">
                    </div>
                    <div class="form-group">
                        <label>Nama Karyawan</label>
                        <input class="form-control" type="text" name="id_karyawan">
                    </div>
                    <div class="form-group">
                        <label>RAB</label>
                         <input class="form-control" type="text" name="id_rab">
                    </div>
                    <div class="form-group">
                        <label>Pengajuan</label>
                        <input class="form-control" type="text" name="nama_pengajuan">
                    </div>
                    <div class="form-group">
                        <label>Biaya</label>
                        <input class="form-control" type="text" name="biaya">
                    </div>
                    <div class="form-group">
                        <label>Alasan</label>
                        <input class="form-control" type="text" name="alasan">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pengajuan</label>
                        <input class="form-control datepicker" type="text" name="tgl_pengajuan">
                    </div>
                    <div class="form-group">
                        <label>Status Pengajuan</label>
                        <input class="form-control" type="text" name="status_pengajuan" value="Menunggu" readonly="readonly">
                    </div>    
                    <button type="submit" name="submit" class="btn btn-info">Save </button>
                    <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a>
                </form>
        </div>
    </div>
</div>
</section>