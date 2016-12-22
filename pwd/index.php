<?php

session_start();
 
if ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != '' ) {  //cek cek apakah suser sudah login
    $halaman = $_SESSION['user_login'];
 
    header('location:on-'. $halaman);  //menentukan apakah di redirect ke halaman dosen atau mhs sesuai session
    exit();
} else {
    header('location:login.php');	//jika belum login maka di redirect ke halamanlogin
    exit();
}
?>
