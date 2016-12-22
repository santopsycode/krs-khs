<?php

	include 'database.php';
	$db = new database();

	session_start();
	/**
	 * Jika Tidak login atau sudah login tapi bukan sebagai admin
	 * maka akan dibawa kembali kehalaman login atau menuju halaman yang seharusnya.
	 */
	if ( !isset($_SESSION['user_login']) || 
	    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'tu' ) ) {

		header('location:./../login.php');
		exit();
	}

?>


<h1>Form Input Mahasiswa</h1>
<form action="proses.php?aksi=updateMhs" method="POST">
	<table>
	<?php foreach($db->editMhs($_GET['nim']) as $row) { ?>
		<tr>
			<td>nim</td>
			<td><input type="text" name="nim" id="nim" value="<?php echo $row['nim']; ?>" readonly></td>
		</tr>
		<tr>
			<td>nama</td>
			<td><input type="text" name="nama" id="nama" value="<?php echo $row['nama']; ?>"></td>
		</tr>
		<tr>
			<td>prodi</td>
			<td><input type="text" name="prodi" id="prodi" value="<?php echo $row['prodi']; ?>"></td>
		</tr>
		<tr>
			<td>fakultas</td>
			<td><input type="text" name="fakultas" id="fakultas" value="<?php echo $row['fakultas']; ?>"></td>
		</tr>
		<tr>
			<td><button type="submit">Simpan</button></td>
		</tr>
		<?php } ?>
	</table>
</form>
