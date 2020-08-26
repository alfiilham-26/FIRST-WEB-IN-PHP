<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>HALAMAN USER</h1>
	</div>
	
	<br/>

	<br/>
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM anggota WHERE id='$id'")or die(mysql_error());
	$data = mysqli_fetch_array($query_mysqli);
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td width="50px" >
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="hidden" name="password" value="<?php echo $data['password'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td width="50px" ><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
			</tr>	
			<tr>
				<td>Pekerjaan</td>
				<td width="50px" ><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>" ></td>					
			</tr>
			<tr>
				<td>username</td>
				<td width="50px" ><input type="text" name="username" value="<?php echo $data['username'] ?>"></td>					
			</tr>
			<tr>
				<td>level</td>
				<td width="50px" ><input type="text" name="level" style="background-color:grey"  readonly value="<?php echo $data['level'] ?>"></td>					
			</tr>		
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>