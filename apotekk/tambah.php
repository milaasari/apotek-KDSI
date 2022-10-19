<!DOCTYPE html>
<html>
<head>
	<title>Tambah Obat Baru</title>
</head>
<body>
 
	<h2>Tambah Obat Baru</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH OBAT</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>harga</td>
				<td><input type="number" name="harga"></td>
			</tr>
			<tr>
				<td>note</td>
				<td><input type="text" name="note"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>