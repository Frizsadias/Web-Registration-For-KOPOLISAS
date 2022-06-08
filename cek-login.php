<?php 
session_start();
include 'database/koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_assoc($login);
	$_SESSION['id'] = $data['id'];
	$_SESSION['pekerjaan'] = $data['pekerjaan'];
	$_SESSION['username'] = $username['username'];
	if($data['pekerjaan']=="Student"){
		$_SESSION['pekerjaan'] = "Student";
		header("location:student/index.php");
	}else if($data['pekerjaan']=="Staff"){
		// $_SESSION['username'] = $username;
		$_SESSION['pekerjaan'] = "Staff";
		header("location:staff/index.php");
	}else if($data['pekerjaan']=="Admin"){
		// $_SESSION['username'] = $username;
		$_SESSION['pekerjaan'] = "Admin";
		header("location:admin/index.php");
	}else{
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}

?>