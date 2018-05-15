<?php
/**
 * Created by PhpStorm.
 * User: Nafilul Mubin
 * Date: 25/04/2018
 * Time: 9:29

 */

require_once($_SERVER['DOCUMENT_ROOT'].'/Sistem/src/Infrastruktur/database2.php');

class Pengajuan extends database2{

    function tampil_data(){
        $data = mysql_query("SELECT pengajuan.*, karyawan.nama_karyawan FROM pengajuan 
            join karyawan on karyawan.id_karyawan=pengajuan.id_karyawan");
        while($d = mysql_fetch_array($data)){
            $hasil[] = $d;
        }
        if (empty($hasil)) {
            $hasil = [];
        }
        return $hasil;
    }
    function tampil_data_detail($id){
        $data = mysql_query("SELECT pengajuan.*, karyawan.nama_karyawan FROM pengajuan 
            join karyawan on karyawan.id_karyawan=pengajuan.id_karyawan WHERE id_pengajuan ='$id'");
        while($d = mysql_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function input($id_pengajuan,$id_karyawan,$id_rab,$nama_pengajuan,$biaya,$alasan,$tgl_pengajuan,$status_pengajuan){
        mysql_query("INSERT INTO pengajuan VALUES('$id_pengajuan','$id_karyawan','$id_rab','$nama_pengajuan', '$biaya', '$alasan', '$tgl_pengajuan', '$status_pengajuan')");
    }
    function edit($id){
        $data = mysql_query("select * from pengajuan where id_pengajuan='$id'");
        while($d = mysql_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update($id,$id_karyawan,$id_rab,$nama_pengajuan,$biaya,$alasan,$tgl_pengajuan,$status_pengajuan){
        mysql_query("UPDATE pengajuan set id_karyawan='$id_karyawan', id_rab='$id_rab', nama_pengajuan='$nama_pengajuan', biaya='$biaya', alasan = '$alasan', tgl_pengajuan='$tgl_pengajuan', status_pengajuan = '$status_pengajuan' where id_pengajuan='$id'");
    }

    function delete($id_pengajuan){
        mysql_query("DELETE FROM pengajuan WHERE id_pengajuan='$id_pengajuan'");
    }
    function getById(){
        $this->query("");
    }
    function rp($angka){    
    $angka = number_format($angka); $angka = str_replace(',', '.', $angka); 
    $angka ="$angka";   
    return $angka;
}
}
?>