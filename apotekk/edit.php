<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
</head>
<body>
 
	<h2>EDIT DATA OBAT</h2>
	<br/>
	<a href="page.php">KEMBALI</a>
	<br/>
	<br/>
	
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($kon,"select * from tbl_obat where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Kategori obat</td>
					<td><input type="text" name="kategori" value="<?php echo $d['kategori']; ?>"></td>
				</tr>
				<tr>
					<td>harga</td>
					<td><input type="number" name="harga" value="<?php echo $d['harga']; ?>"></td>
				</tr>
				
				<tr>
					<td>note</td>
					<td><input type="text" name="note" value="<?php echo $d['note']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>