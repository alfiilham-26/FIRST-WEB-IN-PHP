<?php 
session_start();

include 'koneksi.php';

	$username   = $_POST["username"];
	$password   = md5($_POST["password"]);
 
$login = mysqli_query($koneksi,"select * from anggota where username='$username' and password='$password'");
 
$cek = mysqli_num_rows($login);
 
if($cek > 0){

	$data = mysqli_fetch_assoc($login);
	

	if($data['level']=="user,admin"||$data['level']=="admin,user"){
		
		$_SESSION["anggota_id"] = $data["id"];
		$_SESSION["anggota_username"] = $data["username"];
		$_SESSION["anggota_password"] = $data["password"];
		$_SESSION['anggota_nama'] = $data["nama"];
		$_SESSION['anggota_pekerjaan'] = $data["pekerjaan"];
		$_SESSION['anggota_alamat'] = $data["alamat"];
		$_SESSION['level'] = "admin,user";
		$_SESSION['status'] ="login";
		header("location:adminuser/index.php");
	
	}else if($data['level']=="admin"){

		$_SESSION["anggota_id"] = $data["id"];
		$_SESSION["anggota_username"] = $data["username"];
		$_SESSION["anggota_password"] = $data["password"];
		$_SESSION['anggota_nama'] = $data["nama"];
		$_SESSION['anggota_pekerjaan'] = $data["pekerjaan"];
		$_SESSION['anggota_alamat'] = $data["alamat"];
		$_SESSION['level'] = "admin";
		$_SESSION['status'] ="login";
		header("location:admin/index.php");
 
	}else if($data['level']=="user"){
		
		$_SESSION["anggota_id"] = $data["id"];
		$_SESSION["anggota_username"] = $data["username"];
		$_SESSION["anggota_password"] = $data["password"];
		$_SESSION['anggota_nama'] = $data["nama"];
		$_SESSION['anggota_pekerjaan'] = $data["pekerjaan"];
		$_SESSION['anggota_alamat'] = $data["alamat"];
		$_SESSION['level'] = "user";
		$_SESSION['status'] ="login";
		header("location:user/index.php");

	}else{
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
?>

