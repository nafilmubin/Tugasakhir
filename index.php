<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Kepegawaian PT DOT Indonesia</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- NAVBAR-->
    <link href="assets/css/kanan.css" rel="stylesheet" />
     <!-- IMAGE PREVIEW-->
    <link href="assets/css/images.css" rel="stylesheet" />
     <!-- BARANG-->
    <link href="assets/css/barang.css" rel="stylesheet" />
    <!-- NOTIFICATION-->
    <link href="assets/css/notif.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
     <!--PAGINATION-->
    <link href="assets/dataTables/datatables.min.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/niken.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/datepicker.min.css">
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CHART  -->
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/utils.js"></script>
    <script src="assets/js/Chart.min.js"></script>
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/Chart.bundle.min.js"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?page=index.php"><h6><b>DISTINCTION ON TECHNOLOGY</b></h6></a>
            </div>

            <div class="header-right2">
                <a href="login/Logout.php" class="btn" title="Logout" style="background-color:green"><i class="fa fa-sign-out fa-2x" style="color:white"></i></a>

            </div>
           <div class="header-right-kanan">
             
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell fa-2x" style="color:white"></i></a>
          <ul class="dropdown-menu notify-drop">
            <div class="notify-drop-title">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">Bildirimler (<b>2</b>)</div>
                    <div class="col-md-6 col-sm-6 col-xs-6 text-right"><a href="" class="rIcon allRead" data-tooltip="tooltip" data-placement="bottom" title="tümü okundu."><i class="fa fa-dot-circle-o"></i></a></div>
                </div>
            </div>
            <!-- end notify title -->
            <!-- notify content -->
            <div class="drop-content">
                <li>
                    <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="assets/img/user.png" alt=""></div></div>
                    <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="">Ahmet</a> Atayev <a href="">Kamu Ganteng</a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
                    
                    <hr>
                    <p class="time">1 Menit yang lalu</p>
                    </div>
                </li>
                <li>
                    <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="assets/img/user.png" alt=""></div></div>
                    <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="">Ahmet</a> yorumladı. <a href="">bakekok</a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
                    <p>Menambahkan data proyek</p>
                    <p class="time">Baru Saja</p>
                    </div>
                </li>
                <li>
                    <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="assets/img/user.png" alt=""></div></div>
                    <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="">Ahmet</a> yorumladı. <a href="">bakekok</a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
                    <p>Menambahkan data proyek</p>
                    <p class="time">Baru Saja</p>
                    </div>
                </li>
                <li>
                    <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img img src="assets/img/user.png" alt=""></div></div>
                    <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="">Ahmet</a> yorumladı. <a href="">bakekok</a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
                    <p>Menambahkan data proyek</p>
                    <p class="time">Baru Saja</p>
                    </div>
                </li>
                 <li>
                    <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="assets/img/user.png" alt=""></div></div>
                    <div class="col-md-9 col-sm-9 col-xs-9 pd-l0"><a href="">Ahmet</a> yorumladı. <a href="">bakekok</a> <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
                    <p>Menambahkan data proyek</p>
                    <p class="time">Baru Saja</p>
                    </div>
                </li>
            </div>
            <div class="notify-drop-footer text-center">
                <a href=""><i class="fa fa-eye"></i> Load</a>
            </div>
          </ul>
        </li>


            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/fauser.jpg" class="img-thumbnail" />

                            <div class="inner-text">
                                Nafilul Mubin
                            <br />
                                <small>mnafilul@gmail.com</small>
                            </div>
                        </div>

                    </li>
                    <li>
                        <a href="?page=dashboard_manajemen"><i class="fa fa-dashboard "></i>Dashboard<span></span></a>
                    </li>
                   
                    <li>
                      <a href ="#"><i class="fa fa-archive"></i>Manajemen Proyek<span></span></a>
                      <ul class="nav">
                            <li>
                                 <a href="?page=perencanaan">Perencanaan <span></span></a>
                            </li>
                            <li>
                                 <a href="?page=progress_index">Progress<span></span></a>
                            </li>
                            <li>
                                 <a href="?page=peminjaman_index">Garansi<span></span></a>
                             </li>
                            <li>
                                 <a href="?page=dokumen_index">Dokumentasi Proyek<span></span></a>
                            </li>
                            <li>
                                 <a href="?page=pm_create">Tim <span></span></a>
                            </li>
                             <li>
                                 <a href="?page=barang">Barang <span></span></a>
                            </li>

                      </ul>

                      <a href ="#"><i class="fa fa-archive"></i>ADMIN<span></span></a>
                      <ul class="nav">
                       <li>
                        <a href="?page=dashboard"><i class="fa fa-dashboard "></i>Hello Admin<span></span></a>
                        </li>            
                       <li>
                        <a href="?page=rab_index"><i class="fa fa-bank "></i>Rancangan Anggaran Biaya <span></span></a>
                         </li>
                         <li>
                          <a href="?page=pengajuan_index"><i class="fa fa-archive"></i>Pengajuan  <span></span></a>
                          </li>
                          <li>
                          <a href="?page=pembeli_index"><i class="fa fa-cart-plus "></i>Penanggung Jawab <span></span></a>
                           </li>
                          <li>
                          <a href="?page=barang_indexAdmin"><i class =" fa fa-folder-open "></i>Data Barang <span></span></a>
                           </li>            
                        </ul>


                      <a href ="#"><i class="fa fa-archive"></i>KARYAWAN<span></span></a>
                      <ul class="nav">
                        <li>
                        <a class="" href="?page=dashboard_user">Hello Karyawan</a>
                    </li>
                    <li>
                        <a href="?page=rab_indexuser"><i class="fa fa-bank "></i>Rancangan Anggaran Biaya <span></span></a>
                    </li>

                    <li>
                      <a href="?page=pengajuan_indexuser"><i class="fa fa-archive"></i>Pengajuan <span></span></a>
                      
                    </li>

                     <li>
                        <a href="?page=pembeli_indexuser"><i class="fa fa-cart-plus "></i>Penanggung Jawab <span></span></a>
                    </li>
                    <li>
                      <a href ="?page=barang_indexuser"><i class="fa fa-folder-open"></i>Data Barang<span></span></a>
                    </li> 
                    </ul>



                      <a href ="#"><i class="fa fa-archive"></i>PM<span></span></a>
                      <ul class="nav">
                    <li>
                        <a href="?page=dashboard_PM">Hello Project Manager</a>
                    </li>
                      <li>
                        <a href="?page=rab_indexPM"><i class="fa fa-bank "></i>Rancangan Anggaran Biaya <span></span></a>
                    </li>

                    <li>
                      <a href="?page=pengajuan_indexPM"><i class="fa fa-archive"></i>Pengajuan<span></span></a>
                      
                    </li>

                     <li>
                        <a href="?page=pembeli_indexPM"><i class="fa fa-cart-plus "></i>Penanggung Jawab <span></span></a>
                    </li>
                    <li>
                      <a href ="?page=barang_indexPM"><i class="fa fa-folder-open"></i>Data Barang<span></span></a>
                    </li>  
                  </ul>




                      <a href ="#"><i class="fa fa-archive"></i>CEO<span></span></a>
                      <ul class="nav">
                      <li>
                        <a class="" href="?page=dashboard_Manajemen">Hello CEO</a>
                     <li>
                        <a href="?page=rab_indexManajemen"><i class="fa fa-bank "></i>Rancangan Anggaran Biaya <span></span></a>
                    </li>

                    <li>
                      <a href="?page=pengajuan_indexmanajemen"><i class="fa fa-archive"></i>Pengajuan<span></span></a>
                      
                    </li>

                     <li>
                        <a href="?page=pembeli_indexManajemen"><i class="fa fa-cart-plus "></i>Penanggung Jawab <span></span></a>
                    </li>
                    <li>
                      <a href ="?page=barang_indexManajemen"><i class="fa fa-folder-open"></i>Data Barang<span></span></a>
                    </li>      
                  </ul>


                    <li>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
           <div id="page-inner">
            <?php

            
            $page = '';
             
            if( isset($_GET['page']) ){

              $page=$_GET['page'];

            }
            
            $path="View/$page.php";
            
            if(!empty($page) && file_exists($path)){

                include $path;
                // echo "<pre>";
                // print_r($path);
                // die();

            }else{

                include 'View/dashboard.php';
                
            }
        
        ?>
        
           </div>

    <div id="footer-sec">
        &copy; 2018 Distinction On Technology. All Right Reserved.</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
     <!-- PAGINATION -->
     <script src="assets/dataTables/datatables.min.js"></script>
    
    
    <script type="text/javascript" src="assets/js/datepicker.min.js"></script>
    <script type="text/javascript">
      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
      $('#tabel_audit').DataTable();
                    });

    </script>
    <script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['gantt']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Task ID');
      data.addColumn('string', 'Task Name');
      data.addColumn('string', 'Resource');
      data.addColumn('date', 'Start Date');
      data.addColumn('date', 'End Date');
      data.addColumn('number', 'Duration');
      data.addColumn('number', 'Percent Complete');
      data.addColumn('string', 'Dependencies');

      data.addRows([
        ['2014Spring', 'Spring 2014', 'spring',
         new Date(2014, 2, 22), new Date(2014, 5, 20), null, 100, null],
        ['2014Summer', 'Summer 2014', 'summer',
         new Date(2014, 5, 21), new Date(2014, 8, 20), null, 100, null],
        ['2014Autumn', 'Autumn 2014', 'autumn',
         new Date(2014, 8, 21), new Date(2014, 11, 20), null, 100, null],
        ['2014Winter', 'Winter 2014', 'winter',
         new Date(2014, 11, 21), new Date(2015, 2, 21), null, 100, null],
        ['2015Spring', 'Spring 2015', 'spring',
         new Date(2015, 2, 22), new Date(2015, 5, 20), null, 50, null],
        ['2015Summer', 'Summer 2015', 'summer',
         new Date(2015, 5, 21), new Date(2015, 8, 20), null, 0, null],
        ['2015Autumn', 'Autumn 2015', 'autumn',
         new Date(2015, 8, 21), new Date(2015, 11, 20), null, 0, null],
        ['2015Winter', 'Winter 2015', 'winter',
         new Date(2015, 11, 21), new Date(2016, 2, 21), null, 0, null],
        ['Football', 'Football Season', 'sports',
         new Date(2014, 8, 4), new Date(2015, 1, 1), null, 100, null],
        ['Baseball', 'Baseball Season', 'sports',
         new Date(2015, 2, 31), new Date(2015, 9, 20), null, 14, null],
        ['Basketball', 'Basketball Season', 'sports',
         new Date(2014, 9, 28), new Date(2015, 5, 20), null, 86, null],
        ['Hockey', 'Hockey Season', 'sports',
         new Date(2014, 9, 8), new Date(2015, 5, 21), null, 89, null]
      ]);

      var options = {
        height: 400,
        gantt: {
          trackHeight: 30
        }
      };

      var chart = new google.visualization.Gantt(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
  </script>
  <script>
               
                     
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"> <td><input type="text" name="nama_karyawan[]" placeholder="Nama Karyawan" class="form-control name_list" /></td><td><input type="text" name="jabatan[]" placeholder="Jabatan" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
            </script>
</body>
</html>