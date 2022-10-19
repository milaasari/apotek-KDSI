<?php 
$kon= mysqli_connect("localhost","root","","apotekk");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>