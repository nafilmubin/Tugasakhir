   <div class="header col-md-12" style="margin-top: 15px;">
                    <div class="col-md-7">
                            <form role="form" method="POST" action="?page=pengajuan_indexuser">
                                <div class="form-group col-md-5">
                                <input class="form-control" type="text" name="search" value="">
                                </div>
                                <button type="submit" name="submit" class="btn btn-info col-md-2">Search </button>
                            </form>
                    </div>
                         <!--    Context Classes  -->
                       <div class="col-md-5">  
                            <a href="?page=pengajuan_createuser">
                            <button class="btn btn-primary col-md-offset-5"><i class="fa fa-plus"></i> Tambah Data</button>
                            </a>
                            <a href="views/pengajuan_export.php" target="blank">
                                <button class="btn btn-primary"><i class="fa fa-download"></i> Export Excel</button>
                            </a>      
                    </div>

        </div>
        
                 <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-check-square-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                          3

                                        </div>
                                        <div><h4>Approved</h4></div>
                                    </div>
                                </div>
                            </div>
                              <a href="?page=hrd_index">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="  fa fa-hourglass-2 fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                          5

                                        </div>
                                        <div><h4>Pending</h4></div>
                                    </div>
                                </div>
                            </div>
                              <a href="?page=hrd_index">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="  fa fa-window-close-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                          5
                                        </div>
                                        <div><h4>Rejected</h4></div>
                                    </div>
                                </div>
                            </div>
                              <a href="?page=hrd_index">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    </div>


    <div class="col-md-12">

                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pengajuan
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="tabel_audit" class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Karyawan</th>
                                            <th>Proyek</th>
                                            <th> Status </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <tr>
                                            <td>1. </td>
                                            <td>Ahmad Fatoni</td>
                                            <td>KPI-Online </td>
                                            <td> 
                                                <span class="label label-danger">Belum Disetujui</span> 
                                            </td>
                                            <td>
                                                 <a href="?page=pengajuan_detailuser&id=<?php echo $user_data['id_pengajuan'];?>">
                                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                </a>
                                                <a href="?page=pengajuan_edituser&id=<?php echo $user_data['id_pengajuan'];?>">
                                                    <button class="btn btn-info"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <a href="?page=pengajuan_deleteuser&id=<?php echo $user_data['id_pengajuan'];?>">
                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>