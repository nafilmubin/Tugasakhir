<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'/Sistem/src/Domain/proyek_model.php');
$db = new Proyek();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
 	//print_r($_POST);exit();
	$db->input($_POST['id_proyek'],$_POST['nama_proyek'],$_POST['id_karyawan']);
	header("location:../../index.php?page=pm_index");
}elseif($aksi == "hapus"){ 	
	$db->delete($_GET['id']);
	header("location:../../index.php?page=pm_index");
}elseif($aksi == "update"){
	$db->update($_POST['id_proyek'],$_POST['nama_proyek'],$_POST['id_karyawan']);
	header("location:../../index.php?page=pm_index");
}
?>