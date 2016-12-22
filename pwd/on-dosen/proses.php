<?php 

	include 'database.php';
	$db = new database();

//proses makul
	$aksi = $_GET['aksi'];
	 if ($aksi == "tambahNilai") {
	 	$db->tambahNilai($_POST['nim'],$_POST['id_makul'],$_POST['nilai']);
	 	header("location:./");
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


//proses mahasiswa
	 // elseif ($aksi == "tambahMhs") {
	 // 	$db->inputMhs($_POST['nim'], $_POST['nama'], $_POST['prodi'], $_POST['fakultas']);
	 // 	header("location:./");
	 // } elseif ($aksi == "hapusMhs") { 	
	 // 	$db->hapusMhs($_GET['nim']);
		// header("location:./");
	 // } elseif ($aksi == "updateMhs") {
	 // 	$db->updateMhs($_POST['nim'], $_POST['nama'], $_POST['prodi'], $_POST['fakultas']);
	 // 	header("location:./");
	 // }

?>
