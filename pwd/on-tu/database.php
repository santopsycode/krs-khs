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


		/* ---------------------fungsi matakuliah--------------------- */

		//method menampilkan data makul
		function tampil_dataMakul() {
			$data = mysql_query("SELECT * FROM makul");
			while($d = mysql_fetch_array($data)) {
				$hasil[] = $d;
			}
			return $hasil;
		}

		//method tamnbah data makul
		function inputMakul($makul, $sks, $pengampu) {
			mysql_query("INSERT INTO makul VALUES('','$makul', '$sks', '$pengampu')");
		}

		//method hapus data makul
		function hapusMakul($id_makul) {
			mysql_query("DELETE FROM makul WHERE id_makul='$id_makul'");
		}

		//method untuk menampilkan data makul di dalam form inputan 'editMakul.php'
		function editMakul($id_makul) {
			$data = mysql_query("SELECT * FROM makul WHERE id_makul='$id_makul'");
			while($d = mysql_fetch_array($data)) {
				$hasil[] = $d;
			}
			return $hasil;
		}

		//method update data makul
		function updateMakul($id_makul, $makul, $sks, $pengampu) {
			mysql_query("UPDATE makul SET makul='$makul', sks='$sks' , pengampu='$pengampu' WHERE id_makul='$id_makul'");
		}

		// function cariMakul($makul) {
		// 	$data = mysql_query("SELECT * FROM makul WHERE makul LIKE %'$makul'% ");
		// 	while($d = mysql_fetch_array($data)){
		// 		$hasil[] = $d;
		// 	}
		// 	return $hasil;
		// }

		/* ---------------------fungsi mahasiswa--------------------- */

		//method menampilkan data mhs
		function tampil_dataMhs() {
			$data = mysql_query("SELECT * FROM mhs");
			while($d = mysql_fetch_array($data)) {
				$hasil[] = $d;
			}
			return $hasil;
		}

		//method tamnbah data mhs
		function inputMhs($nim, $nama, $prodi, $fakultas) {
			mysql_query("INSERT INTO mhs VALUES('$nim','$nama', '$prodi', '$fakultas')");
		}

		 //method hapus data makul
		 function hapusMhs($nim) {
		 	mysql_query("DELETE FROM mhs WHERE nim='$nim'");
		 }

		 //method untuk menampilkan data mhs di dalam form inputan 'editMhs.php'
		 function editMhs($nim) {
		 	$data = mysql_query("SELECT * FROM mhs WHERE nim='$nim'");
		 	while($d = mysql_fetch_array($data)) {
		 		$hasil[] = $d;
		 	}
		 	return $hasil;
		 }

		 //method update data mhs
		 function updateMhs($nim, $nama, $prodi, $fakultas) {
		 	mysql_query("UPDATE mhs SET nama='$nama', prodi='$prodi', fakultas='$fakultas' WHERE nim='$nim'");
		 }

	} 

?>
