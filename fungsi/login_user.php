<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
require_once "../koneksi.php";
 
// menangkap data yang dikirim dari form

$email = $_POST['email'];
$password = md5($_POST['password']);
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user where email='$email' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	header("location:../index.php?email=$email");
}else{
   echo "<script>alert('login gagal')
            window.location='../index.php'
        </script>";
}
?>