<!DOCTYPE html>
<html>
<head>
	<title>beranda</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<center>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
		echo"maaf username anda salah";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<div class="judul">		
		<h1>WELCOME</h1>
	</div>
	<div class="judul">		
		<img srhc="pp.jpg" id="pp" align=right>	
	</div>
	<form method="post" action="cek_login.php">
				<table id="tabel" cellpadding="10">
					<tr>
						<td id="login" colspan=3>LOGIN</td>
					</tr>	
					<tr>
						<td id="input_nama" >USERNAME<input type="text" name="username" id="input" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"></td>
					</tr>
					<tr>
						<td id="input_nama">PASWORD<input type="password" name="password" id="input-pw" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"></td>
					</tr>
					<tr>
						<td colspan=3 align=center ><input type="submit" value="LOGIN" id="tombol_login"></td>
					</tr>
				</table>
	</form>
	</center>
</body>
</html>