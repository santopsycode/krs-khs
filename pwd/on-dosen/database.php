<?php 

	class Database{

		var $host 		= "localhost";
		var $username 	= "root";
		var $password 	= "";
		var $db 		= "pwd";

		function __construct() {
			mysql_connect($this->host, $this->username, $this->password);
			mysql_select_db($this->db);
		}

		 public function getMakul() {
		 	$data = mysql_query("SELECT * FROM makul");
		 	while ($d = mysql_fetch_array($data)) {
		  		$hasil[] = $d;
		  	}
	  		return $hasil;
		 }

		 public function dapatMakul($makul) { 
		 	$data = mysql_query("SELECT * FROM makul");
		 	while ($d = mysql_fetch_array($data)) {
		  		$hasil[] = $d;
		  	}
	  		return $hasil;
		 }

		// public function getMhs() {
		// 	$nim	= $_SESSION['username'];
		// 	$data 	= mysql_query("SELECT * FROM mhs WHERE nim='$nim' ");

		// 	while ($d = mysql_fetch_array($data)) {
		//  		$hasil[] = $d;
		//  	}
	 // 		return $hasil;
		// }

		public function getNilai() {
			$data 	= mysql_query("SELECT * FROM nilai 
		 							INNER JOIN makul ON nilai.id_makul=makul.id_makul
		 							");

		 	while ($d = mysql_fetch_array($data)) {
		  		$hasil[] = $d;
		  	}
	  		return $hasil;
		}

		// public function getKrs() {
		// 	$nim	= $_SESSION['username'];
		// 	$data 	= mysql_query("SELECT * FROM nilai 
		// 							INNER JOIN makul ON nilai.id_makul=makul.id_makul
		// 							WHERE nilai.nim='$nim'
		// 						");

		// 	while ($d = mysql_fetch_array($data)) {
		//  		$hasil[] = $d;
		//  	}
	 // 		return $hasil;
		// }


		  //method tamnbah nilai
		  function tambahNilai($nim, $id_makul, $nilai) {
		 	mysql_query("INSERT INTO nilai VALUES('', '$nim', '$id_makul', '$nilai')");
		 }

		// function cekKrs() {
		// 	$makul = mysql_query("SELECT * FROM makul");
		// 	while ($d = mysql_fetch_array($makul)) {
		//  		$d['id_makul'];
		//  	}
			
		
		// 	$s = "SELECT * FROM krs WHERE nim='1400018009' AND id_makul='$d[id_makul]'";
		// 	$q = mysql_query($koneksi, $s);
		// 	$l = mysql_num_rows($q);

		// 	if ($l > 0){
		// 	echo "<p color='green'><b>Sukses</b></p>";
		// 	} else {
		// 	echo "<button type='submit'>pilih</button>";
		// 	}
		// }

		// //method hapus data makul
		// function hapusMakul($id_makul) {
		// 	mysql_query("DELETE FROM makul WHERE id_makul='$id_makul'");
		// }

		// //method untuk menampilkan data makul di dalam form inputan 'editMakul.php'
		// function editMakul($id_makul) {
		// 	$data = mysql_query("SELECT * FROM makul WHERE id_makul='$id_makul'");
		// 	while($d = mysql_fetch_array($data)){
		// 		$hasil[] = $d;
		// 	}
		// 	return $hasil;
		// }

		// //method update data makul
		// function updateMakul($id_makul,$makul) {
		// 	mysql_query("UPDATE makul SET makul='$makul' WHERE id_makul='$id_makul'");
		// }

	} 

?>
