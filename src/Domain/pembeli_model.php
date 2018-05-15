<?php
/**
 * Created by PhpStorm.
 * User: Nafilul Mubin
 * Date: 25/04/2018
 * Time: 9:29

 */

require_once($_SERVER['DOCUMENT_ROOT'].'/Sistem/src/Infrastruktur/database2.php');

class Pembeli extends database2{

    function tampil_data(){
        $data = mysql_query("SELECT pembeli.*, pengajuan.nama_pengajuan, karyawan.nama_karyawan FROM pembeli join pengajuan on pengajuan.id_pengajuan = pembeli.id_pengajuan join karyawan on karyawan.id_karyawan=pembeli.id_karyawan");
        while($d = mysql_fetch_array($data)){
            $hasil[] = $d;
        }
        if (empty($hasil)) {
            $hasil = [];
        }
        return $hasil;
    }
    function tampil_data_detail($id){
        $data = mysql_query("SELECT pembeli.*, pengajuan.nama_pengajuan, karyawan.nama_karyawan FROM pembeli join pengajuan on pengajuan.id_pengajuan = pembeli.id_pengajuan join karyawan on karyawan.id_karyawan=pembeli.id_karyawan WHERE id_pembeli = '$id'");
        while($d = mysql_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function input($id_pembeli,$id_pengajuan,$id_karyawan,$tgl_beli,$anggaran,$attachment){
        mysql_query("INSERT INTO pembeli(id_pembeli, id_pengajuan, id_karyawan, tgl_beli, anggaran, attachment) VALUES('$id_pembeli','$id_pengajuan','$id_karyawan','$tgl_beli','$anggaran','$attachment')");
    }
    function edit($id){
        $data = mysql_query("select * from pembeli where id_pembeli='$id'");
        while($d = mysql_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update($id,$id_pengajuan,$id_karyawan,$tgl_beli,$anggaran,$attachment){
        mysql_query("UPDATE pembeli SET id_pengajuan='$id_pengajuan',id_karyawan='$id_karyawan',tgl_beli='$tgl_beli',anggaran='$anggaran',attachment='$uploadfoto' WHERE id_pembeli='$id'");
    }

    function delete($id_pembeli){
        mysql_query("DELETE FROM pembeli WHERE id_pembeli='$id_pembeli'");
    }
    function rupiah($angka){    
        $angka = number_format($angka); $angka = str_replace(',', '.', $angka); 
        $angka ="$angka";   
        return $angka;
    }
}
?>