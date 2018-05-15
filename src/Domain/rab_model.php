<?php
/**
 * Created by PhpStorm.
 * User: Nafilul Mubin
 * Date: 25/04/2018
 * Time: 9:29

 */

require_once($_SERVER['DOCUMENT_ROOT'].'/Sistem/src/Infrastruktur/database2.php');

class RAB extends database2{

    function tampil_data(){
        $data = mysql_query("SELECT rab.*, proyek.nama_proyek, karyawan.nama_karyawan FROM rab join proyek on proyek.id_proyek=rab.id_proyek join karyawan on karyawan.id_karyawan=rab.id_karyawan");
        while($d = mysql_fetch_array($data)){
            $hasil[] = $d;
        }
        if (empty($hasil)) {
            $hasil = [];
        }
        return $hasil;
    }
    function tampil_data_detail($id){
        $data = mysql_query("SELECT rab.*, proyek.nama_proyek, karyawan.nama_karyawan FROM rab join proyek on proyek.id_proyek=rab.id_proyek join karyawan on karyawan.id_karyawan=rab.id_karyawan  WHERE id_rab = '$id' ");
        while($d = mysql_fetch_array($data)){
            $hasil[] = $d;
        }
        if (empty($hasil)) {
            $hasil = [];
        }
        return $hasil;
    }
    function tampil_data_detail_angg($id){
        $data = mysql_query("SELECT nama_anggaran, nominal FROM rab_detail WHERE id_rab = '$id'");
        while($d = mysql_fetch_array($data)){
            $hasil[] = $d;
        }
        if (empty($hasil)) {
            $hasil = [];
        }
        return $hasil;
    }
     function tampil_data_proyek(){
        $data = mysql_query("SELECT * FROM proyek");
        while($d = mysql_fetch_array($data)){
            $hasil[] = $d;
        }
        if (empty($hasil)) {
            $hasil = [];
        }
        return $hasil;
    }
    function tampil_data_karyawan(){
        $data = mysql_query("SELECT * FROM karyawan");
        while($d = mysql_fetch_array($data)){
            $hasil[] = $d;
        }
        if (empty($hasil)) {
            $hasil = [];
        }
        return $hasil;
    }
    function input( $id_rab,$id_proyek,$id_karyawan,$uploadattachment,$file_tmp,$uploaddokumen,$periode,$keterangan,$number,$nama_anggaran,$nominal){
        mysql_query("INSERT INTO rab (id_rab,id_proyek,id_karyawan,attachment,jumlah_pengajuan,jumlah_disetujui,periode,keterangan) VALUES('$id_rab','$id_proyek','$id_karyawan','$uploadattachment','$jml','','$periode','$keterangan')"); 
        $jml = 0;
        if($number > 1)
        {
            for($i=0; $i<$number; $i++)
            {
                mysql_query("INSERT INTO rab_detail(id_rab,nama_anggaran,nominal,status)values('$id_rab', '".$_POST["nama_anggaran"][$i]."','".$_POST["nominal"][$i]."', 'Belum Disetujui')");
                $jml += $_POST["nominal"][$i];
            }
        }
        
    }
    function edit($id){
        $data = mysql_query("SELECT rab.*, proyek.nama_proyek, karyawan.nama_karyawan FROM rab join proyek on proyek.id_proyek=rab.id_proyek join karyawan on karyawan.id_karyawan=rab.id_karyawan  WHERE id_rab = '$id'");
        while($d = mysql_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function edit_detail($id){
        $data = mysql_query("SELECT * FROM rab_detail WHERE id_rab = '$id'");
        while($d = mysql_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update($id,$keterangan){
         mysqli_query($koneksi, "UPDATE rab SET keterangan='Telah Ditanggapi' WHERE id_rab='".$_POST['id_rab']."'");
         $jml = 0;
         if($number > 1)
        {
            for($i=0; $i<$number; $i++)
            {
                mysqli_query("UPDATE rab_detail SET nama_anggaran='".$_POST["nama_anggaran"][$i]."', nominal='".$_POST["nominal"][$i]."', status='".$_POST["status"][$i]."' WHERE id_det='".$_POST["id_det"][$i]."'");
                
            }
        }
    }
    function delete($id_rab){
        mysql_query("DELETE FROM rab WHERE id_rab='$id_rab'");
        mysql_query("DELETE FROM rab_detail WHERE id_rab='$id_rab'");
    }
     function deletePM($id_rab){
        mysql_query("DELETE FROM rab WHERE id_rab='$id_rab'");
        mysql_query("DELETE FROM rab_detail WHERE id_rab='$id_rab'");
    }
    function editRegister($id_rab){
        $chk=$_POST['id_rab'];
    // Delete user row from table based on given id
        foreach ($chk as $val) {
        $result =  mysql_query(__construct(), "UPDATE rab SET keterangan='Register' WHERE id_rab='$val'");
    }
}
}
?>