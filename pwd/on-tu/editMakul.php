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

<form action="proses.php?aksi=updateMakul" method="post">
<?php foreach($db->editMakul($_GET['id_makul']) as $row) { ?>
<table>
	<tr>
		<td>Nama Makul</td>
		<td>
			<input type="hidden" name="id_makul" value="<?php echo $row['id_makul'] ?>">
			<input type="text" name="makul" value="<?php echo $row['makul'] ?>">
		</td>
	</tr>
	<tr>
		<td>sks</td>
		<td><input type="text" name="sks" value="<?php echo $row['sks'] ?>"></td>
	</tr>
	<tr>
		<td>dosen pengampu</td>
		<td><input type="text" name="pengampu" value="<?php echo $row['pengampu'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>