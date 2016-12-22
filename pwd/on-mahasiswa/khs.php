<?php
	session_start();
	include 'database.php';
	$db 	= new database();

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

<?php foreach ($db->getMhs() as $row) { ?>
<table>
	<tr>
		<td><strong>Nim</strong></td>
		<td>:</td>
		<td><?php echo $row['nim'] ?></td>
	</tr>
	<tr>
		<td><strong>Nama</strong></td>
		<td>:</td>
		<td><?php echo $row['nama'] ?></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td><strong>Prodi</strong></td>
		<td>:</td>
		<td><?php echo $row['prodi'] ?></td>
	</tr>
	<tr>
		<td><strong>Fakultas</strong></td>
		<td>:</td>
		<td><?php echo $row['fakultas'] ?></td>
	</tr>
</table>
<?php } ?>

<br><br>
<table border="1" cellpadding="5" cellspacing="0">
	<tr>
		<td>no</td>
		<td>makul</td>
		<td>id makul</td>
		<td>sks</td>
		<td>nilai</td>
	</tr>
	<?php $no=1; foreach ($db->getKrs() as $row) { ?>
	<tr>
		<td><?php echo $no++ ?></td>
		
		<td><?php echo $row['makul'] ?></td>
		<td><?php echo $row['id_makul'] ?></td>
		<td><?php echo $row['sks'] ?></td>
		<td><?php echo $row['nilai'] ?></td>
	<tr></tr>
	<?php } ?>
</table>
<br>
<button><a href="pdf.php">cetak</a></button>