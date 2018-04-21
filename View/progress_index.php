     <div class="header col-md-12" style="margin-top: 15px;">
                    <div class="col-md-7">
                            <form role="form" method="POST" action="?page=progress_index">
                               <!--  <div class="form-group col-md-5">
                                <input class="form-control" type="text" name="search" value="">
                                </div>
                                <button type="submit" name="submit" class="btn btn-info col-md-2">Search </button> -->
                            </form>
                    </div>
                         <!--    Context Classes  -->
                       <div class="col-md-5">  
                            <a href="?page=perencanaan_create">
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
                        Progress Proyek
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Prosentase Total = 0 %
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                               <table id="tabel_audit" class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Proyek</th>
                                            <th>Nama Fitur</th>
                                            <th>Status</th>
                                            <th>Prosentase</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>SMI</td>
                                            <td>Login Page</td>
                                            <td>Backlog</td>
                                            <td>0 %</td>
                                            <td>
                                                <a href="?page=dokumen_edit&id=<?php echo $user_data['id_dokumen'];?>">
                                                    <button class="btn btn-info"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <a href="?page=dokumen_delete&id=<?php echo $user_data['id_dokumen'];?>">
                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </a>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td>SMI</td>
                                            <td>Mini Blog</td>
                                            <td>Backlog</td>
                                            <td>0 %</td>
                                            <td>
                                                <a href="?page=dokumen_edit&id=<?php echo $user_data['id_dokumen'];?>">
                                                    <button class="btn btn-info"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <a href="?page=dokumen_delete&id=<?php echo $user_data['id_dokumen'];?>">
                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
                </div>
    