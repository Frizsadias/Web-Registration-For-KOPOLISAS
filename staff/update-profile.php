<?php
include '../database/koneksi.php';
$id         = $_POST['id'];
$nama       = $_POST['nama'];
$username   = $_POST['username'];
$warganegara =$_POST['warganegara'];
$umur =$_POST['umur'];
$lahir =$_POST['lahir'];
$agama =$_POST['agama'];
$pekerjaan =$_POST['pekerjaan'];
$alamat =$_POST['alamat'];
$gaji =$_POST['gaji'];
$password =$_POST['password'];
$telepon =$_POST['telepon'];
$query = mysqli_query($koneksi, "UPDATE user SET nama='$nama', username='$username', warganegara='$warganegara', umur='$umur', lahir='$lahir', agama='$agama', pekerjaan='$pekerjaan', alamat='$alamat', gaji='$gaji', password='$password', telepon='$telepon' WHERE id='$id'");
header("location:profile.php?pesan=update");
?>
