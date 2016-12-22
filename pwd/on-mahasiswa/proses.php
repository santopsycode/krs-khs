<?php 

	include 'database.php';
	$db = new database();

//proses makul
	$aksi = $_GET['aksi'];
	 if ($aksi == "simpanKrs") {
	 	$db->simpanKrs($_POST['nim'], $_POST['makul']);
	 	header("location:krs.php");
	 } 

	 // elseif ($aksi == "hapusMakul") { 	
	 // 	$db->hapusMakul($_GET['id_makul']);
		// header("location:./");
	 // } elseif ($aksi == "updateMakul") {
	 // 	$db->updateMakul($_POST['id_makul'], $_POST['makul'], $_POST['sks'], $_POST['pengampu']);
	 // 	header("location:./");
	 // } elseif ($aksi == "cariMakul") {
	 // 	$db->cariMakul($_POST['makul']);
	 // 	header("locaion:./");
	 // }

?>
