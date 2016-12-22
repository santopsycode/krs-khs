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

<form action="proses.php?aksi=tambahMakul" method="post">
	
	<table>
		<tr>
			<td>Nama Makul</td>
			<td><input type="text" name="makul"></td>
		</tr>

		<tr>
			<td>sks</td>
			<td><input type="text" name="sks"></td>
		</tr>
		<tr>
			<td>dosen pengampu</td>
			<td><input type="text" name="pengampu"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>

</form>
