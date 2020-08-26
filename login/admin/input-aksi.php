<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$username = $_POST['username'];
$password =md5($_POST['password']); 
$level = implode(",", $_POST['level']);

mysqli_query($koneksi,"INSERT INTO anggota VALUES('','$nama','$alamat','$pekerjaan','$username','$password','$level')");

header("location:index.php?pesan=input");
?>