<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'/Sistem/src/Domain/pembeli_model.php');
$db = new Pembeli();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	$db->input($_POST['id_pembeli'],$_POST['id_pengajuan'],$_POST['id_karyawan'],$_POST['tgl_beli'],$_POST['anggaran'],$_POST['attachment']);
	header("location:../../index.php?page=pembeli_index");
}elseif($aksi == "hapus"){ 	
	$db->delete($_GET['id']);
	header("location:../../index.php?page=pembeli_index");
}elseif($aksi == "update"){
	$db->update($_POST['id_pembeli'],$_POST['id_pengajuan'],$_POST['id_karyawan'],$_POST['tgl_beli'],$_POST['anggaran'],$_POST['attachment']);
	header("location:../../index.php?page=pembeli_index");
}
?>