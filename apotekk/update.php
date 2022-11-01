<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$note = $_POST['note'];
 
// update data ke database
mysqli_query($kon,"update tbl_obat set nama='$nama', kategori='$kategori', harga='$harga', note='$note' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:page.php");
 
?>