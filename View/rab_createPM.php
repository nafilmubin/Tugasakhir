<?php
require 'src/Domain/rab_model.php';
$db = new RAB();
?>
<html>
    <head>
    </head>
    <body>
        <div class="col-md-12 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DATA RAB</b>
        </div>
    <div class="panel-body">
        <form role="form" method="POST" enctype="multipart/form-data" action="src/Infrastruktur/RAB.php?aksi=tambahPM">
                   
                   <div class="form-group">
                        <label>ID RAB</label>
                        <input class="form-control" type="text" name="id_rab">
                    </div>
                    <div class="form-group">
                        <label>Proyek</label>
                        <select class="form-control" name="id_proyek">
                        <?php
                            foreach($db->tampil_data_proyek() as $data){
                        ?>
                        <option value="<?php echo $data['id_proyek']; ?>"><?php echo $data['nama_proyek']; ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Karyawan</label>
                        <select class="form-control" name="id_karyawan">
                        <?php
                            foreach($db->tampil_data_karyawan() as $data){
                        ?>
                        <option value="<?php echo $data['id_karyawan']; ?>"><?php echo $data['nama_karyawan']; ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Attachment</label>
                        <input name="attachment" type="file" />
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input class="form-control datepicker" type="text" name="periode">
                    </div>
                    <div class="form-group">
                      <label>Detail Anggaran</label>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field2">
                            <tr>
                                <td><input type="text" name="nama_anggaran[]" placeholder="Nama Anggaran" class="form-control name_list" /></td>
                                <td><input type="text" name="nominal[]" placeholder="Nominal" class="form-control name_list" /></td>
                                <td><button type="button" name="add" id="add_rab" class="btn btn-success">Add</button></td>
                            </tr>
                        </table>
                        
                    </div>

                    
                    <button type="submit" name="submit" class="btn btn-info">Save </button>
                    <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a>

                </form>
        </div>
    </div>
</div>
    </body>
</html>
       
