 <?php
 require 'src/Domain/pembeli_model.php';
 $db = new Pembeli();
 ?>
    <div class="header col-md-12" style="margin-top: 15px;">
    <div class="col-md-7">
    </div>
    <!--    Context Classes  -->
    <div class="col-md-5">  
        <a href="?page=pembeli_create">
            <button class="btn btn-primary col-md-offset-5"><i class="fa fa-plus"></i> Tambah Data</button>
        </a>
        <a href="views/pembeli_export.php" target="blank">
            <button class="btn btn-success"><i class="fa fa-download"></i> Export Excel</button>
        </a>      
    </div>

</div>



<div class="col-md-12" style="margin-top: 5px;">

   <!--    Context Classes  -->
   <div class="panel panel-default">
    <div class="panel-heading">
        Penanggung Jawab 
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table id="tabel_audit" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pengajuan</th>
                        <th>Nama Karyawan</th>
                        <th>Tanggal Pembelian</th>
                        <th>Anggaran</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                 <?php
                 $no = 1;
                 foreach($db->tampil_data() as $x){
                    ?>
                    <tr>
                        <td><?php echo $no++?> .</td>
                        <td><?php echo $x['nama_pengajuan']; ?></td>
                        <td><?php echo $x['nama_karyawan']; ?></td>
                        <td><?php echo $x['tgl_beli']; ?></td>
                        <td>Rp<?php  echo rupiah($x['anggaran']); ?></td>
                        <td>
                            <a href="?page=pembeli_detail&id=<?php echo $x['id_pembeli'];?>">
                                <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </a>
                            <a href="?page=pembeli_edit&id=<?php echo $x['id_pembeli'];?>">
                                <button class="btn btn-info"><i class="fa fa-pencil"></i></button>
                            </a>
                            <a href="src/Infrastruktur/pembeli.php?aksi=hapus&id=<?php echo $x['id_pembeli'];?>">
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
</div>