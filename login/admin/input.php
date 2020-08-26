<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>HALAMAN ADMIN</h1>
	</div>
	
	<br/>

	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td widht="20%"><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td widht="20%"><input type="text" name="alamat"></td>					
			</tr>	
			<tr>
				<td>Pekerjaan</td>
				<td widht="20%"><input type="text" name="pekerjaan"></td>					
			</tr>	
			<tr>
				<td>username</td>
				<td widht="20%"><input type="text" name="username"></td>					
			</tr>	
			<tr>
				<td>password</td>
				<td widht="20%"><input type="text" name="password"></td>					
			</tr>	
			<tr>
				<td>level</td>
				<td widht="20%"><label><input type="checkbox" name="level[]" value="admin">admin<br>	
				<input type="checkbox" name="level[]" value="user">user</label></td>		
			</tr>	
				<td></td>
				<td widht="20%"><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>