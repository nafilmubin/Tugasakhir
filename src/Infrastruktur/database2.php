<?php
class database2 {

    var $host = "localhost";
    var $user = "root";
    var $pass = "";
    var $db_name = "dot_richa";

    /**
     * database constructor.
     */
    function __construct(){
        mysql_connect($this->host, $this->user, $this->pass);
        mysql_select_db($this->db_name);
    }
    function query($query){
        $data = mysql_query(mysql_escape_string($query));
        return $data;
    }
}
?>