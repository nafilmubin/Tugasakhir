<?php 
session_start();

class database{

	var $host = "localhost";
	var $user = "root";
	var $pass = "";
	var $db_name = "tugasakhir2";

	function __construct(){
		mysql_connect($this->host, $this->user, $this->pass);
		mysql_select_db($this->db_name);
	}
	 function tampil_data(){
		$data = mysql_query("select * from proyek");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function input($id_proyek,$nama_proyek,$beban){
		mysql_query("insert into proyek values('$id_proyek','$nama_proyek','','$beban')");
	}	
	function edit($id){
		$data = mysql_query("select * from proyek where id='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
 
	function update($id,$nama_proyek,$beban){
		mysql_query("update user set nama_proyek='$nama_proyek', beban='$beban' where id='$id'");
	}
}

?>