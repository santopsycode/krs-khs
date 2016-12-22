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

?>

<p>anda login sebagai <strong><?=$_SESSION['user_login'];?></strong> dengan nama : <?=$_SESSION['nama'];?></p>
<br>
<a href="./../logout.php">logout</a>
<hr>

<br><br>
<form action="inputNilai.php" method="POST">
	<table>
		<tr>
			<td>makul</td>
			<td>
				<select name="id_makul" id="input">
					<?php foreach ($db->getMakul() as $row) { ?>
					<option name="id_makul" value="<?php echo $row['id_makul']; ?>"><?php echo $row['makul']; ?></option>
					<?php } ?>
				</select>
			</td>
			<td><button type="submit">tambah</button></td>
		</tr>
	</table>
</form>
<hr>
<br><strong>tabel nilai</strong>
	<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<td>no</td>
			<td>nim</td>
			<td>id makul</td>
			<td>makul</td>
			<td>nilai</td>
		</tr>
		<?php $no=1; foreach ($db->getNilai() as $row) { ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $row['nim'] ?></td>
			<td><?php echo $row['id_makul'] ?></td>
			<td><?php echo $row['makul'] ?></td>
			<td><?php echo $row['nilai'] ?></td>
		</tr>
		<?php } ?>
	</table>
