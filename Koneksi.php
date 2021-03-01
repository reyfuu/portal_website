<?php
$host="localhost";
$user="root";
$password="";
$db="webnews_kita";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>