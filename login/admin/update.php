<?php 

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = implode(",", $_POST['level']);

mysqli_query($koneksi, "UPDATE anggota SET nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan', username='$username', password='$password', level='$level' WHERE id='$id'");

header("location:index.php?pesan=update");
?>