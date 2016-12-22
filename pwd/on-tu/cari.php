<?php 

	include ('koneksi.php');

	$kataKunci  = $_POST['kataKunci'];
	$query		= "SELECT * FROM mhs WHERE nama LIKE '%$kataKunci%'";
	$data		= mysql_query($query);

	while ($a = mysql_fetch_array($data)) {
		if ($a['nama']) {
			echo $a['nim']."<br>";
			echo $a['nama']."<br>";
		} else {
			echo "data tidak ditemukan";
		}
	} 

 ?>