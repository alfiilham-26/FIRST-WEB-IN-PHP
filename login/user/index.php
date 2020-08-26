<!DOCTYPE html>
<html>
	<head>
		<title>USER</title>
		<link rel="stylesheet" type="text/css" href="style.css">

	</head>
	<body>
		<?php 
		session_start();
		if($_SESSION['status']!="login"){
			header("location:../index.php?pesan=belum_login");
		}
		?>
		<div class="judul">	
			<h1>USER</h1>
		</div>
		<?php 
		include "koneksi.php";
		$id = $_SESSION["anggota_id"];
		$query_mysqli = mysqli_query($koneksi,"SELECT * FROM anggota WHERE id='$id'")or die(mysql_error());
		$data = mysqli_fetch_array($query_mysqli)
		?>
		<h3>Data user</h3>
		<table  class="table" cellpadding="10">
			<tr>
				<th width="5%" align="left">Nama</th>
				<td width="1%">:</td>
				<td width="50%"><?php echo $data['nama'] ?></td>					
			</tr>	
			<tr>
				<th width="5%" align="left">Alamat</th>
				<td width="1%">:</td>
				<td width="50%"><?php echo $data['alamat'] ?></td>					
			</tr>	
			<tr>
				<th width="5%" align="left">Pekerjaan</th>
				<td width="1%">:</td>
				<td width="50%" ><?php echo $data['pekerjaan'] ?></td>					
			</tr>
			<tr>
				<th width="5%" align="left">Username</th>
				<td width="1%">:</td>
				<td width="50%"><?php echo $data['username'] ?></td>					
			</tr>
		</table>
		<br>
		<center>
		<a class="edit" href="edit-pw.php?id=<?php echo $_SESSION['anggota_id']; ?>">GANTI PASSWORD</a><br>
		<a class="edit" href="edit.php?id=<?php echo $_SESSION['anggota_id']; ?>">EDIT</a><br>
		<a href="logout.php">LOGOUT</a>
		</center>
	</body>
</html>