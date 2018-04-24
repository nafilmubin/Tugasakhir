   <div class="header col-md-12">
                    <div class="col-md-7">
                            <form role="form" method="POST" action="?page=pengajuan_index">
                                <div class="form-group col-md-5">
                                <input class="form-control" type="text" name="search" value="">
                                </div>
                                <button type="submit" name="submit" class="btn btn-info col-md-2">Search </button>
                            </form>
                    </div>
                         <!--    Context Classes  -->
                       <div class="col-md-5">  
                            <a href="?page=pengajuan_create">
                            <button class="btn btn-primary col-md-offset-5"><i class="fa fa-plus"></i> Tambah Data</button>
                            </a>
                            <a href="views/pengajuan_export.php" target="blank">
                                <button class="btn btn-primary"><i class="fa fa-download"></i> Export Excel</button>
                            </a>      
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
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Kode Pengajuan</th>
                                            <th>Nama Karyawan</th>
                                            <th>Jenis Pengajuan</th>
                                            <th>Nama Pengajuan</th>
                                            <th>Biaya</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PEN01</td>
                                            <td>Richa Elek</td>
                                            <td>Proyek</td>
                                            <td>Emas kawin</td>
                                            <td>2.000.000,-</td>
                    
                                            <td>
                                                <a href="?page=pengajuan_detail">
                                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                </a>
                                                <a href="?page=pengajuan_edit">
                                                    <button class="btn btn-info"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <a href="?page=pengajuan_delete">
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