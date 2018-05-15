<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'/Sistem/src/Domain/pengajuan_model.php');
$db = new Pengajuan();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	//print_r($_POST);exit();
	$db->input($_POST['id_pengajuan'],$_POST['id_karyawan'],$_POST['id_rab'],$_POST['nama_pengajuan'],$_POST['biaya'],$_POST['alasan'],$_POST['tgl_pengajuan'],$_POST['status_pengajuan']);
	header("location:../../index.php?page=pengajuan_index");
}elseif($aksi == "hapus"){ 	
	$db->delete($_GET['id']);
	header("location:../../index.php?page=pengajuan_index");
}elseif($aksi == "update"){
	//print_r($_POST);exit();
	$db->update($_POST['id_pengajuan'],$_POST['id_karyawan'],$_POST['id_rab'],$_POST['nama_pengajuan'],$_POST['biaya'],$_POST['alasan'],$_POST['tgl_pengajuan'],$_POST['status_pengajuan']);
	header("location:../../index.php?page=pengajuan_index");
}
?>