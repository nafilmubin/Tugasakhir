<div class="col-md-12 col-sm-6 col-xs-12">
    <div class="btn-group btn-group-justified">
  <a href="?page=perencanaan_create" class="btn btn-primary">Detail Proyek</a>
  <a href="?page=tim_create" class="btn btn-default">Tim</a>
  <a href="?page=jadwal" class="btn btn-primary">Penjadwalan</a>
  <a href="#" class="btn btn-primary">Biaya</a>
</div>
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DATA TIM</b>
        </div>
    <div class="panel-body">
        <form role="form" name="autosumform" method="POST">
                   <div class="form-group">
                      <label>TIM</label>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field">
                            <tr>
                                <td><input type="text" name="nama_karyawan[]" placeholder="Nama Karyawan" class="form-control name_list" /></td>
                                <td><input type="text" readonly="readonly" name="jabatan[]" placeholder="Jabatan" class="form-control name_list" /></td>
                                <td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>
                            </tr>
                        </table>
                        
                    </div>
                    
                   </form>
                   <br>
                    <button type="submit" name="submit" class="btn btn-info">Next </button>
                    <a onclick="window.history.back();return false;" class="btn btn-warning">Previous</a>

                </form>
        </div>
    </div>
</div>
</section>

 <script>
               
                     
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field1').append('<tr id="row'+i+'"> <td><input type="text" name="nama_karyawan[]" placeholder="Nama Karyawan" class="form-control name_list" /></td><td><input type="text" name="jabatan[]" placeholder="Jabatan" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
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

    
  

