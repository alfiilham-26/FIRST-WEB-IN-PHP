<?php 

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$username = $_POST['username'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$level = $_POST['level'];

mysqli_query($koneksi, "UPDATE anggota SET nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan', username='$username', password='$password',level='$level'  WHERE id='$id'");

header("location:index.php?pesan=update");
?>