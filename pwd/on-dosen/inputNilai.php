<?php

	include 'database.php';
	$db = new database();

	session_start();
	/**
	 * Jika Tidak login atau sudah login tapi bukan sebagai admin
	 * maka akan dibawa kembali kehalaman login atau menuju halaman yang seharusnya.
	 */
	if ( !isset($_SESSION['user_login']) || 
	    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'dosen' ) ) {

		header('location:./../login.php');
		exit();
	}

	$id_makul = $_POST['id_makul'];
	$query = mysql_query("SELECT * FROM makul WHERE id_makul='$id_makul'");
		  		


?>

<p>anda login sebagai <strong><?=$_SESSION['user_login'];?></strong> dengan nama : <?=$_SESSION['nama'];?></p>
<br>
<a href="./../logout.php">logout</a>
<a href="./">balik</a>
<hr>

<br><br>
<strong>Form Input Nilai</strong>
<form action="proses.php?aksi=tambahNilai" method="POST">
	<table>
		<tr>
			<td>id makul</td>
			<td><input type="text" name="id_makul" value="<?php echo $id_makul; ?>" readonly></td>
		</tr>
		<tr>
			<td>makul</td>
			<td>
				<?php while ($d = mysql_fetch_array($query)) { ?>
				<input type="text" name="makul" value="<?php echo $d['makul']; ?>" readonly>
				<?php } ?>
			</td>
		</tr>
		<tr>
			<td>nim</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>nilai</td>
			<td><input type="text" name="nilai"></td>
		</tr>
	</table>
	<button type="submit">simpan</button>
</form>