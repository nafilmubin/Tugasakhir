<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="panel panel-info">
        <div class="panel-heading">
           <b>DATA DOKUMEN</b>
        </div>
    <div class="panel-body">
        <form role="form" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Proyek</label>
                        <select class="form-control" name="id_proyek">
                        <option>SMI</option>
                        <option>Raja Pindah</option>
                        <option>EmasDigi</option>
                        </select>
                                
                    </div>
                    <div class="form-group">
                        <label>Judul</label>
                        <input class="form-control" type="text" name="judul">
                    </div>
                    <div class="form-group">
                        <label>Dokumen</label><br>
                        <input type="file" name="attachment" >
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-info">Save </button>
                    <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply"></i> Back</a>

                </form>
        </div>
    </div>
</div>
</section>


        <script>
                alert("Data Dokumen Berhasil Ditambahkan ");
                location="?page=dokumen_index";
        </script>
           

