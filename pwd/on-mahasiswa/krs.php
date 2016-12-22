<?php
	session_start();
	include 'database.php';
	include 'koneksi.php';
	$db 	= new database();
	$length = 7;
	$nim	= $_SESSION['username'];

	/**
	 * Jika Tidak login atau sudah login tapi bukan sebagai admin
	 * maka akan dibawa kembali kehalaman login atau menuju halaman yang seharusnya.
	 */
	if ( !isset($_SESSION['user_login']) || 
	    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'mahasiswa' ) ) {

		header('location:./../login.php');
		exit();
	}
?>

<p>anda login sebagai <strong><?=$_SESSION['user_login'];?></strong> dengan nama : <?=$_SESSION['nama'];?></p>
<br>
<a href="./../logout.php">logout</a>
<a href="./">balik</a>
<hr>

<h4>Form Krs</h4>
<strong>maks sks = 21</strong>
<table border="1" cellpadding="5" cellspacing="0">
	<tr>
		<td>id makul</td>
		<td>makul</td>
		<td>dosen pengampu</td>
		<td>aksi</td>
	</tr>
	<?php foreach ($db->getMakul() as $row) { $makul = $row['id_makul']?>
	<tr>
		<td><?php echo $makul ?></td>
		<td><?php echo $row['makul'] ?></td>
		<td><?php echo $row['pengampu'] ?></td>
		<td>
			<form action="proses.php?aksi=simpanKrs" method="POST">
				<input type="hidden" name="nim" value="<?=$_SESSION['username'];?>" readonly="true">
				<input type="hidden" name="makul" value="<?php echo $row['id_makul'] ?>" readonly="true">
				<?php 

				$s = "SELECT * FROM krs WHERE nim='$nim' AND id_makul='$row[id_makul]'";
			$q = mysql_query($s);
			$l = mysql_num_rows($q);

			if ($l > 0){
			echo "<p style='color: #1bbc9b'><b>Sukses</b></p>";
			} else {
			echo "<button type='submit'>pilih</button>";
			}

				 ?>
			</form>
		</td>
	</tr>
	<?php } ?>
</table>
