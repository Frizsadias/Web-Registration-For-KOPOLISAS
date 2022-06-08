<?php
    include '../database/koneksi.php';
    $id         = $_POST['id'];
    $nama       = $_POST['nama'];
    $username   = $_POST['username'];
    $telepon    = $_POST['telepon'];
    $query = mysqli_query($koneksi, "UPDATE user SET nama='$nama', username='$username', telepon='$telepon' WHERE id='$id'");
    header("location:user.php?pesan=update");
?>
