 <?php
 require 'src/Domain/proyek_model.php';
 $db = new Proyek();
 ?>
 <div class="header col-md-12" style="margin-top: 15px;">
    <div class="col-md-7">
      
    </div>
    <!--    Context Classes  -->
    <div class="col-md-5">  
        <a href="?page=pm_create">
            <button class="btn btn-primary col-md-offset-9"><i class="fa fa-plus"></i> Tambah Data</button>
        </a>
                          <!--   <a href="views/perencanaan_export.php" target="blank">
                                <button class="btn btn-primary"><i class="fa fa-download"></i> Export Excel</button>
                            </a>       -->
                        </div>

                    </div>



                    <div class="col-md-12" style="margin-top: 5px;">

                       <!--    Context Classes  -->
                       <div class="panel panel-default">
                        <div class="panel-heading">
                            Proyek
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="tabel_audit" class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            
                                            <th>Nama Proyek</th>
                                            <th>Manajer Proyek</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach($db->tampil_data() as $x){
                                            ?>
                                            <tr>
                                             
                                                <td><?php echo $x['nama_proyek'] ?></td>
                                                <td><?php echo $x['nama_karyawan'] ?></td>
                                                <td>
                                                    <a href="?page=pm_edit&id=<?php echo $x['id_proyek'];?>">
                                                        <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                                    </a>
                                                </button>
                                                <a href="src/Infrastruktur/proyek.php?aksi=hapus&id=<?php echo $x['id_proyek'];?>">
                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php }  ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
                </div>

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"></button>
                        <h4 class="modal-title">Edit PM</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" name="autosumform" method="POST" action="src/Infrastruktur/proyek.php?aksi=update">
                          <?php
                          foreach($db->edit($_GET['id_proyek']) as $d){
                              ?>
                              <div class="form-group">
                                <label>ID Proyek</label>
                                <input class="form-control" type="text" name="id_proyek" value="<?php echo $d['id_proyek']?>">
                            </div>
                            <div class="form-group">
                                <label>Proyek</label>
                                <input class="form-control" type="text" name="nama_proyek" value="<?php echo $d['nama_proyek']?>">
                            </div>
                            <div class="form-group">
                                <label>Manajer Proyek</label>
                                <input class="form-control" type="text" name="id_karyawan" value="<?php echo $d['id_karyawan']?>"> >
                            </div>
                            <?php } ?>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-info">Submit </button>
                    </div>
                </div>

            </div>
        </div>
        <script>
            var dataid;

            $('#rooms li a').click(function() {
             dataid = $(this).attr('data-id'); 
         });

            $('#myModal').on('show.bs.modal', function (e) {
                $(this).find('.id_proyek').text(dataid);
            });
        </script>
