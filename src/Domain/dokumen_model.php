<?php
/**
 * Created by PhpStorm.
 * User: Nafilul Mubin
 * Date: 25/04/2018
 * Time: 9:29

 */

require_once($_SERVER['DOCUMENT_ROOT'].'/Sistem/src/Infrastruktur/database.php');

class Dokumen extends database{

    function tampil_data(){
        $data = mysql_query("SELECT dokumen.*, proyek.nama_proyek FROM dokumen join proyek on proyek.id_proyek = dokumen.id_proyek");
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
    function input($id_dokumen,$id_proyek,$judul,$attachment){
        mysql_query("insert into dokumen values('$id_dokumen','$id_proyek','$judul','$attachment')");
    }
    function edit($id){
        $data = mysql_query("select * from dokumen where id_dokumen='$id'");
        while($d = mysql_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update($id,$id_proyek,$judul,$attachment){
        mysql_query("update dokumen set id_proyek='$id_proyek', judul='$judul', attachment='$attachment' where id_dokumen='$id'");
    }

    function delete($id_dokumen){
        mysql_query("DELETE FROM dokumen WHERE id_dokumen='$id_dokumen'");
    }
    function getById(){
        $this->query("");
    }
}
?>