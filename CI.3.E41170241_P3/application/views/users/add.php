<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
</head>
<body>
	<center>
		<h1>Create User</h1>
		<!-- <h3>Tambah data baru</h3> -->
	</center>
	<form action="<?php echo base_url(). 'index.php/user/store'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>