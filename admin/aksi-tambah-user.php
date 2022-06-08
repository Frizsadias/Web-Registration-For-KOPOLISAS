<?php
include '../database/koneksi.php';
$id = $_POST['id'];
$nama       = $_POST['nama'];
$username   = $_POST['username'];
$kursus =$_POST['kursus'];
$nokp =$_POST['nokp'];
$warganegara =$_POST['warganegara'];
$umur =$_POST['umur'];
$lahir =$_POST['lahir'];
$agama =$_POST['agama'];
$pekerjaan =$_POST['pekerjaan'];
$alamat =$_POST['alamat'];
$gaji =$_POST['gaji'];
$password =$_POST['password'];
$telepon =$_POST['telepon'];
$query = mysqli_query($koneksi, "INSERT INTO user VALUES('$id','$nama','$username','$kursus','$nokp','$warganegara', '$umur', '$lahir', '$agama', '$pekerjaan', '$alamat', '$gaji', '$password', '$telepon')");
header("location:user.php?pesan=berhasil");
?>
