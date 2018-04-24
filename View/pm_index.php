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
                                            <th>Progress</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           
                                            <td>SMI</td>
                                            <td>Mbak Nisa</td>
                                            <td>0 %</td>
                                            <td>
                                                    <button class="btn btn-info" data-toggle="modal" data-target="#myModal">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                
                                                <a href="?page=proyek_delete&id=<?php echo $x['id_proyek'];?>">
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

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit PM</h4>
                      </div>
                      <div class="modal-body">
                        <form role="form" name="autosumform" method="POST">
                              <div class="form-group">
                                    <label>Proyek</label>
                                    <input class="form-control" type="text" name="id_proyek">
                                </div>
                                <div class="form-group">
                                    <label>Manajer Proyek</label>
                                    <select class="form-control" name="pm">
                                       <option>Mbak Nisa</option>
                                       <option>Inul</option>
                                       <option>Mbak Putri</option>
                                    </select>
                                </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
