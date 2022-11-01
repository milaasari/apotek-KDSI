<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$note = $_POST['note'];
 
// menginput data ke database
mysqli_query($kon,"insert into tbl_obat values('','$nama','$kategori', '$harga','$note')");
 
// mengalihkan halaman kembali ke index.php
header("location:page.php");
 
?>