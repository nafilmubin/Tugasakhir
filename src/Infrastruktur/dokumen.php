<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'/Sistem/src/Domain/dokumen_model.php');
$db = new Dokumen();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
 	//print_r($_POST);exit();
	$db->input($_POST['id_dokumen'],$_POST['id_proyek'],$_POST['judul'],$_POST['attachment']);
	header("location:../../index.php?page=dokumen_index");
}elseif($aksi == "hapus"){ 	
	$db->delete($_GET['id']);
	header("location:../../index.php?page=dokumen_index");
}elseif($aksi == "update"){
	$db->update($_POST['id_dokumen'],$_POST['id_proyek'],$_POST['judul'],$_POST['attachment']);
	header("location:../../index.php?page=dokumen_index");
}
?>