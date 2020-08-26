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
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM anggota WHERE id='$id'")or die(mysql_error());
	$nomor = 1;
	$data = mysqli_fetch_array($query_mysqli);
	$datalevel=explode(',', $data['level']);{
	?>
	<form action="update.php" method="post">	
		<table cellpadding="5">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
			</tr>	
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>"></td>					
			</tr>
			<tr>
				<td>username</td>
				<td><input type="text" name="username" value="<?php echo $data['username'] ?>"></td>					
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" readonly value="<?php echo $data['password'] ?>"></td>					
			</tr>
			<tr>
				<td>status</td>
				<td><label><input type="checkbox" name="level[]" value="admin" <?php if (in_array("admin", $datalevel)) echo "checked";?> >admin<br>
				<input type="checkbox" name="level[]" value="user" <?php if (in_array("user", $datalevel)) echo "checked";?>>user</label></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>