<?php

	include 'koneksi.php';

	$makul = $_GET['makul'];

	$query 		= mysqli_query($koneksi, "SELECT * FROM makul WHERE makul='$makul'");
	$id 		= mysqli_fetch_array($query);
	$data 		= array(
	            'id_makul' => $id['id_makul']);
	 echo json_encode($data);
	 
?>