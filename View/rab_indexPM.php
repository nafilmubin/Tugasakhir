<?php
require 'src/Domain/rab_model.php';
$db = new RAB();
?>
<div class="header col-md-12" style="margin-top: 15px;">
    <div class="col-md-7">

    </div>
    <!--    Context Classes  -->
    <div class="col-md-5">  
        <a href="?page=rab_createPM">
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
                            Rancangan Anggaran Biaya
                        </div>

                        <div class="panel-body">
                            <form method="POST">
                                <button type="submit" name="register" class="btn btn-success" src="/Infrastruktur/RAB.php?aksi=updateRegis&id=<?php echo $x['id_rab'];?>">Register</button>
                                <button type="submit" name="unregister" class="btn btn-danger">Unregister</button>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Select</th>
                                                <th>Status</th>
                                                <th>Kode RAB</th>
                                                <th>Proyek</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach($db->tampil_data() as $x){
                                                ?>
                                                <tr>
                                                    <?php 
                                                    if ($x['keterangan']=='Approved') {
                                                        echo "<td></td>";
                                                    }else{


                                                     ?>
                                                     <td><input class="form-check-input" type="checkbox" name="id_rab[]" value="<?php echo $x['id_rab'] ?>"></td>
                                                     <?php } ?>
                                                     <td><?php echo $x['keterangan'] ?></td>
                                                     <td><?php echo $x['id_rab'] ?></td>
                                                     <td><?php echo $x['nama_proyek'] ?></td>

                                                     <td>

                                                         <a href="?page=rab_detail&id=<?php echo $x['id_rab'];?>">
                                                            <button class="btn btn-info"><i class="fa fa-search"></i></button>
                                                        </a>
                                                        <?php if ($x['keterangan']=="Draft" || $x['keterangan']=="Pending") {?>
                                                        <a href="?page=rab_edit&id=<?php echo $x['id_rab'];?>">
                                                            <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                                        </a>
                                                        <a href="src/Infrastruktur/RAB.php?aksi=hapusPM&id=<?php echo $x['id_rab'];?>">
                                                            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                        </a>
                                                        <?php }else{


                                                        } ?>

                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <?php 
// Get id from URL to delete that user
                   
                    if (isset($_POST['unregister'])) {
                        $chk=$_POST['id_rab'];
    // Delete user row from table based on given id
                        foreach ($chk as $val) {
                            $result =  mysqli_query(__construct(), "UPDATE rab SET keterangan='Draft' WHERE id_rab='$val'");
                        }
                        ?>
                        <script>
                            alert("Data RAB Telah Diunregister");
                            location="?page=rab_index";
                        </script>
                        <?php
                    }
                    ?>
