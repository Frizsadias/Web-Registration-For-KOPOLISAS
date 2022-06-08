<?php
include 'database/koneksi.php';
$id =$_POST['id'];
$nama =$_POST['nama'];
$username =$_POST['username'];
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
$sql = "INSERT INTO user (id, nama, username, kursus, nokp, warganegara, umur, lahir, agama, pekerjaan, alamat, gaji, password, telepon )
VALUES ('$id', '$nama', '$username', '$kursus', '$nokp', '$warganegara', '$umur', '$lahir', '$agama', '$pekerjaan', '$alamat', '$gaji', '$password', '$telepon')";
if (mysqli_query($koneksi, $sql)) {
   echo "<script>
   alert ('New record created successfully');
   document.location.href = 'login.php';
   </script>";
} else {
   echo "<script>
   alert ('Error: ');
   document.location.href = 'form_signup.php';
   </script> " . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>