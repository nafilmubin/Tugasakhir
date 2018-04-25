<?php
// Get id from URL to delete that user
$id_proyek = $_GET['id'];
 
// Delete user row from table based on given id
 $db->delete($_GET['id']);
 
?>
<script>
alert("Data Proyek Berhasil Dihapus");
location="?page=pm_index";
</script>