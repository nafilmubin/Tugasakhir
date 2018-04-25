
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DATA TIM</b>
        </div>
    <div class="panel-body">
        <form role="form" name="autosumform" method="POST">
                  <div class="form-group">
                        <label>ID Proyek</label>
                        <input class="form-control" type="text" name="id_proyek">
                    </div>
                  <div class="form-group">
                        <label>Proyek</label>
                        <input class="form-control" type="text" name="nama_proyek">
                    </div>
                    <div class="form-group">
                        <label>Manajer Proyek</label>
                        <input class="form-control" type="text" name="id_karyawan">
                    </div>  
                   <br>
                    <button type="submit" name="submit" class="btn btn-info">Submit </button>
                </form>
        </div>
    </div>
</div>
</section>
<?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
         $db->input($_POST['id_proyek'],$_POST['nama_proyek'],$_POST['id_karyawan']);
?>
        <script>
                alert("Data Proyek Berhasil Ditambahkan ");
                location="?page=pm_index";
            </script>
    <?php
    }
    ?>

    
  

