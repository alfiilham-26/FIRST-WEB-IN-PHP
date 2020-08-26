<!DOCTYPE html>
<html>
<head>
	<title>user</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>HALAMAN USER</h1>
	</div>
	
	<br/>

	<br/>
	<h3>Edit data</h3>

	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>MASUKKAN PASSWORD BARU</td>
				<td>
				<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
				<input type="hidden" name="nama" value="<?php echo $data['nama'] ?>">
				<input type="hidden" name="alamat" value="<?php echo $data['alamat'] ?>">
				<input type="hidden" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>">
				<input type="hidden" name="username" value="<?php echo $data['username'] ?>">
				<input type="hidden" name="level" value="<?php echo $data['level'] ?>"></td>
				<td width="50px" ><input type="text" name="password"></td>					
			</tr>		
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>