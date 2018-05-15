<?php 
$jml = 0;
 ?>
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
        <form role="form" method="POST" enctype="multipart/form-data" action="src/Infrastruktur/RAB.php?aksi=update">
                   <?php
                   foreach($db->edit($_GET['id']) as $data){
                    ?>
                   
                   <div class="form-group">
                        <label>ID RAB</label>
                        <input class="form-control" readonly="true" value="<?php echo $data['id_rab'] ?>" type="text" name="id_rab" >
                    </div>
                    <div class="form-group">
                        <label>Proyek</label>
                        <input class="form-control" readonly="true" value="<?php echo $data['nama_proyek'] ?>" type="text" >
                    </div>
                    <div class="form-group">
                        <label>Project Manager</label>
                        <input class="form-control" readonly="true" value="<?php echo $data['nama_karyawan'] ?>" type="text" >
                    </div>
                    
                    <div class="form-group">
                        <label>Attachment</label><br/>
                        <a href="#">Download File</a>
                    </div>
                    <div class="form-group">
                        <label>Periode</label>
                        <input class="form-control" readonly="true" value="<?php echo $data['periode'] ?>" type="text" >
                    </div>
                    <div class="form-group">
                      <label>Detail Anggaran</label>
                    </div>
                     
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field">
                            <tr>
                                <td><b>Nama Anggaran</b></td>
                                <td><b>Nominal</b></td>
                                <td><b>Status</b></td>
                                
                            </tr>
                            <?php 
                            $i=0;
                            foreach($db->edit_detail($_GET['id']) as $data2) {?>

                            <tr>
                                <td>
                                    <input type="hidden" name="id_det[]" value="<?php echo $data2['id_det'] ?>" />
                                    <input type="text" name="nama_anggaran[]" placeholder="Nama Anggaran" class="form-control name_list" value="<?php echo $data2['nama_anggaran'] ?>" />
                                </td>
                                <td>
                                    <input type="text" name="nominal[]" placeholder="Nominal" class="form-control name_list" value="<?php echo $data2['nominal'] ?>">
                                </td>
                                <td>
                                     <select class="form-control" name="status[]">
                                    <option <?php if( $data2['status']=='Belum Disetujui'){echo "selected"; } ?> value="Belum Disetujui">Belum disetujui</option>
                                    <option <?php if( $data2['status']=='Disetujui'){echo "selected"; } ?> value="Disetujui">Setuju</option>
                                    <option <?php if( $data2['status']=='Tidak Disetujui'){echo "selected"; } ?> value="Tidak Disetujui">Tidak setuju</option>
                                   
                                    
                                    </select>
                                </td>  
                            
                            </tr>
                            <?php } ?>
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
        <script>
               
             
 $(document).ready(function(){ 
    
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"> <td><input type="text" name="nama_anggaran[]" placeholder="Nama Anggaran" class="form-control name_list" /></td><td><input type="text" name="nominal[]" placeholder="Nominal" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
            </script>
          
          <?php
    }
    ?>
