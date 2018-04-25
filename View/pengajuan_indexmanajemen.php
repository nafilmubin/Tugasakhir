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
                            <form role="form" method="POST" action="?page=pengajuan_indexmanajemen">
                                <div class="form-group col-md-3">
                                <input class="form-control" type="text" name="search" value="">
                                </div>
                                <button type="submit" name="submit" class="btn btn-info col-md-1">Search </button>
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
                            <h4><b>Pengajuan</b></h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="tabel_audit" class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th> </th>
                                            <th>No.</th>
                                            <th>Nama Karyawan</th>
                                            <th>Proyek</th>
                                            <th> Status </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  <tr>
                                             <td><i class="fa fa-check-square"></i> </td>
                                            <td>1. </td>
                                            <td>Ahmad Fatoni</td>
                                            <td>KPI-Online </td>
                                            <td>
                                               <span class="label label-danger">Belum Disetujui</span> 
                                            </td>
                                            <td>
                                                 <a href="?page=pengajuan_detailmanajemen&id=<?php echo $user_data['id_pengajuan'];?>">
                                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                             <td><i class="fa fa-square"></i> </td>
                                            <td>2. </td>
                                            <td>Ristina</td>
                                            <td>Bisnis Kokoh</td>
                                            <td>Approved </td>
                                            <td>
                                                 <a href="?page=pengajuan_detailmanajemen&id=<?php echo $user_data['id_pengajuan'];?>">
                                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>