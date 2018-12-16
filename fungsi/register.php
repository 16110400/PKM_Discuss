<?php

require_once "../koneksi.php";

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jk = $_POST['jk'];
    $alamat= $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $passowrd = $_POST['password'];

    // buat query
    $sql = "INSERT INTO user (nama,email, password,alamat, jenis_kelamin, password, telepon) VALUE ('$nama', '$email', '$alamat', '$jk', '$no_hp','$password')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: ../index.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: ../index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>