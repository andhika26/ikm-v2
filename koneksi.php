<?php 

$host = "localhost";
$username = "bulu_ikmonline2021";
$password = "pppbulumerdeka!!";
$db = "bulu_ikmonline";
//error_reporting(0);
//error_reporting(0);
$koneksiikm = new mysqli($host, $username, $password, $db) or die("GAGAL");
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : ".mysqli_connect_error();
}

?>