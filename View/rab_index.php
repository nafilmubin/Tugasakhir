   <div class="header col-md-12" style="margin-top: 15px;">
                    <div class="col-md-7">
                            <form role="form" method="POST" action="?page=pengajuan_index">
                                <div class="form-group col-md-5">
                                <input class="form-control" type="text" name="search" value="">
                                </div>
                                <button type="submit" name="submit" class="btn btn-info col-md-2">Search </button>
                            </form>
                    </div>
                   
                        <div class="col-md-5">
                            <a href="?page=rab_create">
                            <button class="btn btn-primary col-md-offset-5"><i class="fa fa-plus"></i> Tambah Data</button>
                            </a>
                            <a href="views/rab_export.php" target="blank">
                                <button class="btn btn-primary"><i class="fa fa-download"></i> Export Excel</button>
                            </a>  
                        </div>
                   

        </div>



    <div class="col-md-12" style="margin-top: 5px;">

                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Rancangan Anggaran Biaya
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Kode RAB</th>
                                            <th>Proyek</th>
                                            <th>Project Manager</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>RAB01</td>
                                            <td>SMI</td>
                                            <td>Fatoni</td>
                                            <td>
                                                <span class='badge badge-success'>Disetujui</span>
                                            </td>
                                            <td>
                                                <a href="?page=rab_detail&id=<?php echo $user_data['id_rab'];?>">
                                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                </a>
                                                <a href="?page=rab_edit&id=<?php echo $user_data['id_rab'];?>">
                                                    <button class="btn btn-info"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <a href="?page=rab_delete&id=<?php echo $user_data['id_rab'];?>">
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