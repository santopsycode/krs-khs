<?php
session_start();
/**
 * Jika Tidak login atau sudah login tapi bukan sebagai admin
 * maka akan dibawa kembali kehalaman login atau menuju halaman yang seharusnya.
 */
if ( !isset($_SESSION['user_login']) || 
    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'mahasiswa' ) ) {

	header('location:./../login.php');
	exit();
}
?>

 	<p>anda login sebagai <strong><?=$_SESSION['user_login'];?></strong> dengan nama : <?=$_SESSION['nama'];?></p>
 	<br>
 	<a href="./../logout.php">logout</a>
 	<hr>

 	<p>menu</p>
 	<a href="khs.php">khs</a>
 	<a href=krs.php>krs</a>
