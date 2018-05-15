<?php
 require 'src/Domain/dokumen_model.php';
 $db = new Dokumen();
 ?>
 <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DATA DOKUMEN</b>
        </div>
    <div class="panel-body">
        <form role="form" method="POST" action="src/Infrastruktur/dokumen.php?aksi=tambah" >
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
                        <label>Judul</label>
                        <input class="form-control" type="text" name="judul">
                    </div>
                    <div class="form-group">
                        <label>Dokumen</label><br>
                        <input class="form-control" type="text" name="attachment" >
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-info">Save </button>
                    <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a>

                </form>
        </div>
    </div>
</div>
</section>
           

