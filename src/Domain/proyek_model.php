<?php
/**
 * Created by PhpStorm.
 * User: Nafilul Mubin
 * Date: 25/04/2018
 * Time: 9:29

 */

require_once($_SERVER['DOCUMENT_ROOT'].'/Sistem/src/Infrastruktur/database.php');

class Proyek extends database{

    function tampil_data(){
        $data = mysql_query("SELECT proyek.*, karyawan.nama_karyawan FROM proyek join karyawan on proyek.id_karyawan = karyawan.id_karyawan");
        while($d = mysql_fetch_array($data)){
            $hasil[] = $d;
        }
        if (empty($hasil)) {
            $hasil = [];
        }
        return $hasil;
    }
    function tampil_data_karyawan(){
        $data = mysql_query("SELECT * FROM karyawan WHERE id_role = 'Role3' ");
        while($d = mysql_fetch_array($data)){
            $hasil[] = $d;
        }
        if (empty($hasil)) {
            $hasil = [];
        }
        return $hasil;
    }
    function input($id_proyek,$nama_proyek,$id_karyawan){
        mysql_query("insert into proyek values('$id_proyek','$nama_proyek','$id_karyawan')");
    }
    function edit($id){
        $data = mysql_query("select * from proyek where id_proyek='$id'");
        while($d = mysql_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update($id,$nama_proyek,$id_karyawan){
        mysql_query("update proyek set nama_proyek='$nama_proyek', id_karyawan='$id_karyawan' where id_proyek='$id'");
    }

    function delete($id_proyek){
        mysql_query("DELETE FROM proyek WHERE id_proyek='$id_proyek'");
    }
    function getById(){
        $this->query("");
    }
}
?>