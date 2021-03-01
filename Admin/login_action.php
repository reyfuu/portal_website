<?php
session_start();

include "../Koneksi.php";

$username = $_POST["username"];
//$p = md5($_POST["password"]);
$p =($_POST["password"]);

$sql = "SELECT * from administrator where username='".$username."' and password='".$p."' limit 1";
$hasil = mysqli_query ($kon,$sql);
$jumlah = mysqli_num_rows($hasil);


	if ($jumlah>0) {
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION["id"]=$row["id"];
		$_SESSION["username"]=$row["username"];
		$_SESSION["name"]=$row["name"];
		$_SESSION["email"]=$row["email"];
	

		header("Location:user.php");
		
	}else {
		echo "Username atau password salah <br><a href='login.php'>Kembali</a>";
	}

?>
