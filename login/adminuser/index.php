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
	<div class="judul">		
		<h1>WELCOME</h1>
	</div>
	<a  href="../user/index.php?" target=_blank>user</a> |
	<a  href="../admin/index.php?" target=_blank>admin</a><br>			
	<a  href="logout.php">LOGOUT</a>


</body>
</html>