   <?php
require 'src/Domain/rab_model.php';
$db = new RAB();
?>
<div class="header col-md-12" style="margin-top: 15px;">
                   <div class="col-md-7">
                            <a href="?#">
                            <button class="btn btn-default col-md-offset-1"><i class="fa fa-check"></i> Approved </button>
                            </a> &nbsp; &nbsp;
                            <a href="?#">
                            <button class="btn btn-default"><i class="fa fa-ban"></i> Unapproved </button>
                            </a>  
                        </div> 
                         <div class="col-sm-20">
                            <form role="form" method="POST" action="?page=rab_indexmanajemen">
                                <div class="form-group col-md-3">
                               
                                </div>
                           
                            </form>
                    </div>
                    <!--    <div class="col-md-5">
                            <a href="?page=rab_create">
                            <button class="btn btn-primary col-md-offset-5"><i class="fa fa-plus"></i> Tambah Data</button>
                            </a>
                            <a href="views/rab_export.php" target="blank">
                                <button class="btn btn-primary"><i class="fa fa-download"></i> Export Excel</button>
                            </a>  
                        </div> -->
                   

        </div>



    <div class="col-md-12" style="margin-top: 5px;">

                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><b>Rancangan Anggaran Biaya</b></h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="tabel_audit" class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th> </th>
                                            <th>No.</th>
                                            <th>Proyek</th>
                                            <th>Project Manager</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php
                                          $no=1;
                                           foreach($db->tampil_data() as $x){
                                            ?>
                                   <tr>
                                            <td><i class="fa fa-check-square"></i> </td>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $x['nama_proyek'] ?></td>
                                            <td><?php echo $x['nama_karyawan'] ?></td>
                                            <td>
                                                <?php if($x['keterangan']=="Disetujui"){
                                                    echo "<span class='label label-success'>Disetujui</span>";
                                                }else{
                                                    echo "<span class='label label-danger'>Belum Disetujui</span>";
                                                } ?>
                                            </td>
                                            <td>
                                                <a href="?page=rab_detail&id=<?php echo $x['id_rab'];?>">
                                                    <button class="btn btn-info"><i class="fa fa-search"></i></button>
                                                </a>
                                                <a href="?page=dokumen_editmanajemen&id=<?php echo $user_data['id_rab'];?>">
                                                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>