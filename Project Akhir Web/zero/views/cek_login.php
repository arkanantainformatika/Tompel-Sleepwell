<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include '../util/koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from databasemultiuser where username='$username'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);

	if ($data) {
		if (password_verify($password, $data['password'])) {
			$_SESSION['logged'] = true;
			$userType = $data['level'];
			if ($userType == 'admin') {
				header('Location:dashboard.php');
			} elseif($userType == 'user') {
				header('Location:php.php');
			}
		}
	}
	// cek jika user login sebagai admin
	// if($data['level']=="admin"){
 
	// 	// buat session login dan username
	// 	$_SESSION['username'] = $username;
	// 	$_SESSION['level'] = "admin";
	// 	// alihkan ke halaman dashboard admin
	// 	header("location:dashboard.php");
 
	// // cek jika user login sebagai user
	// }else if($data['level']=="user"){
	// 	if (password_verify($password, $data['password'])) {
			
	// 		$_SESSION['username'] = $username;
	// 		$_SESSION['level'] = "user";
	// 		header("location:php.php");
	// 	}
	// 	// buat session login dan username
	// 	// alihkan ke halaman dashboard pegawai
	// }else{
 
	// 	// alihkan ke halaman login kembali
	// 	// header("location:form.php?pesan=gagal");
	// 	header("location:form.php?pesan=gagal");
	// }	
}else{
	header("location:form.php?pesan=gagal");
}
 
?>