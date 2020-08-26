<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<div class="judul" width=100%>		
		<h1>HALAMAN ADMIN</h1>
	</div>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>

	<h3>Data user</h3>
	<table border="1" class="table">
		<tr class="kepala">
			<th width="2%;"style="background-color:grey; border-color:black" >No</th>
			<th width="10%;"style="background-color:grey; border-color:black" >Nama</th>
			<th width="15%;"style="background-color:grey; border-color:black" >Alamat</th>
			<th width="15%;"style="background-color:grey; border-color:black" >Pekerjaan</th>
			<th width="10%;"style="background-color:grey; border-color:black" >level</th>
			<th width="10%;"style="background-color:grey; border-color:black" >Opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysqli = mysqli_query($koneksi,"select * from anggota ORDER BY nama ASC") or die(mysql_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysqli)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['pekerjaan']; ?></td>
			<td><?php echo $data['level']; ?></td>
			<td align="center">
				<a id="edit" href="edit.php?id=<?php echo $data['id']; ?> " style="text-decoration:none;color:white;background-color:grey;">Edit</a>
				<a id="edit" href="hapus.php?id=<?php echo $data['id']; ?>" style="text-decoration:none;color:white;background-color:grey;">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>

	<a href="logout.php">LOGOUT</a>


</body>
</html>