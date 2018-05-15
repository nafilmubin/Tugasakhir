<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'/Sistem/src/Domain/rab_model.php');
$db = new RAB();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
 	//print_r($_POST);exit();
	$db->input(
		$_POST['id_rab'],
        $_POST['id_proyek'],
        $_POST['id_karyawan'],
        $_FILES['attachment']['name'],
        $_FILES['attachment']['tmp_name'],
        move_uploaded_file($file_tmp, 'images/'.$uploadattachment),
        $_POST['periode'],
        'Belum Disetujui',
        count($_POST["nama_anggaran"]),
    	$_POST['nama_anggaran'],
    	$_POST['nominal']);
	header("location:../../index.php?page=rab_index");
}elseif($aksi == "tambahPM"){
 	//print_r($_POST);exit();
	$db->input(
		$_POST['id_rab'],
        $_POST['id_proyek'],
        $_POST['id_karyawan'],
        $_FILES['attachment']['name'],
        $_FILES['attachment']['tmp_name'],
        move_uploaded_file($file_tmp, 'images/'.$uploadattachment),
        $_POST['periode'],
        'Belum Disetujui',
        count($_POST["nama_anggaran"]),
    	$_POST['nama_anggaran'],
    	$_POST['nominal']);
	header("location:../../index.php?page=rab_indexPM");
}elseif($aksi == "hapus"){ 	
	$db->delete($_GET['id']);
	header("location:../../index.php?page=rab_index");
}elseif($aksi == "hapusPM"){ 	
	$db->delete($_GET['id']);
	header("location:../../index.php?page=rab_indexPM");
}elseif($aksi == "update"){
	$db->update($_POST['id_rab'], count($_POST["nama_anggaran"]));
	header("location:../../index.php?page=rab_index");
}elseif($aksi == "updateRegis"){
    $db->update($_POST['id_rab']);
    header("location:../../index.php?page=rab_indexPM");
}
?>