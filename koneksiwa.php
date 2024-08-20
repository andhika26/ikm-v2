<?php 
$host = "localhost";
$username = "bulu_masdanis2021";
$password = "simasdanisbeta21!!";
$db = "bulu_masdanis";
//error_reporting(0);
$koneksi = mysqli_connect($host, $username, $password, $db) or die("GAGAL");
$koneksi->set_charset('utf8mb4');
$base_url = "https://pppbulu.dkp.jatimprov.go.id/esurat/";
date_default_timezone_set('Asia/Jakarta');

?>