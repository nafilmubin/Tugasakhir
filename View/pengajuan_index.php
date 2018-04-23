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
                                    <?php
                                     
                                    // Fetch all users data from database
                                    //$result = mysqli_query($koneksi, "SELECT * FROM pengajuan ORDER BY id_pengajuan DESC");
                                    //iner join 
                                     //iner join
                                    $result = mysqli_query($koneksi, "SELECT pengajuan.*, karyawan.nama_karyawan, jenis_pengajuan.nama_jenispengajuan FROM pengajuan join karyawan on karyawan.id_karyawan=pengajuan.id_karyawan join jenis_pengajuan on jenis_pengajuan.id_jenispengajuan=pengajuan.id_jenispengajuan ");

                                    //searching
                                    if( isset($_POST['search']) ){
                                          $key=$_POST['search'];
                                           $result = mysqli_query($koneksi, "SELECT pengajuan.*, karyawan.nama_karyawan, jenis_pengajuan.nama_jenispengajuan, rab.nama_rab FROM pengajuan join karyawan on karyawan.id_karyawan=pengajuan.id_karyawan join jenis_pengajuan on jenis_pengajuan.id_jenispengajuan=pengajuan.id_jenispengajuan join rab on rab.id_rab=pengajuan.id_rab WHERE karyawan.nama_karyawan LIKE '%$key%' ORDER BY pengajuan.id_karyawan DESC ");
                                          
                                          //$result = mysqli_query($koneksi, "SELECT pengajuan.*, karyawan.nama_karyawan FROM pengajuan join karyawan on pengajuan.id_karyawan=karyawan.id_karyawan WHERE karyawan.nama_karyawan LIKE '%$key%' ORDER BY pengajuan.id_karyawan DESC");
                                      }
                                      
                                      while($user_data = mysqli_fetch_array($result)) {   
                                        //var_dump($result);
                                        //die()
                                    ?>
                                        <tr>
                                            <td><?php echo $user_data['id_pengajuan'] ?></td>
                                            <td><?php echo $user_data['nama_karyawan'] ?></td>
                                            <td><?php echo $user_data['nama_jenispengajuan'] ?></td>
                                            <td><?php echo $user_data['nama_pengajuan'] ?></td>
                                            <td><?php echo $user_data['biaya'] ?></td>
                    
                                            <td>
                                                <a href="?page=pengajuan_detail&id=<?php echo $user_data['id_pengajuan'];?>">
                                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                </a>
                                                <a href="?page=pengajuan_edit&id=<?php echo $user_data['id_pengajuan'];?>">
                                                    <button class="btn btn-info"><i class="fa fa-pencil"></i></button>
                                                </a>
                                                <a href="?page=pengajuan_delete&id=<?php echo $user_data['id_pengajuan'];?>">
                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
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