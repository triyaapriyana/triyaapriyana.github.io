<?php 
 
	$koneksi = new mysqli("localhost","root","","tabungan_kita");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>