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

<p>anda login sebagai <strong><?=$_SESSION['user_login'];?></strong> dengan nama : <?=$_SESSION['nama'];?></p>
<br>
<a href="./../logout.php">logout</a>
<hr>
 	
<h1>Tabel Matakuliah</h1>

<!-- form cari makul -->
<!-- <table border="1" cellpadding="5" cellspacing="0">
	<tr>
		<td>
			<form action="proses.php?aksi=cariMakul" method="post">
				Cari <strong>matakuliah </strong>berdasarkan <strong>nama matakuliah</strong> :
				<input type="text" name="makul">
				<button type="submit">cari</button>
			</form>
		</td>
	</tr>
</table>
<br>

<table>
<?php //foreach ($db->cariMakul() as $row) { ?>
	<tr>
		<td><?php //echo $row['id_makul'] ?></td>
		<td><?php //echo $row['makul'] ?></td>
		<td><?php //echo $row['sks'] ?></td>
	</tr>
	<?php //} ?>
</table> -->

<!-- tabel matakuliah -->
<a href="inputMakul.php">Input Data</a>
<table border="1" cellpadding="5" cellspacing="0">
	<tr style="background-color: silver;">
		<th>Id Makul</th>
		<th>Nama Makul</th>
		<th>sks</th>
		<th>Dosen Pengampu</th>
		<th>Opsi</th>
	</tr>
	<?php foreach ($db->tampil_dataMakul() as $row) { ?>
	<tr>
		<td><?php echo $row['id_makul']; ?></td>
		<td><?php echo $row['makul']; ?></td>
		<td><?php echo $row['sks']; ?></td>
		<td><?php echo $row['pengampu']; ?></td>
		<td>
			<a href="editMakul.php?id_makul=<?php echo $row['id_makul']; ?>&aksi=editMakul">Edit</a>
			<a onclick="return konfirmasi()" href="proses.php?id_makul=<?php echo $row['id_makul']; ?>&aksi=hapusMakul">Hapus</a>			
		</td>
	</tr>
	<?php } ?>
</table>

<br><br><hr>


<!-- tabel Mhs -->
<h1>tabel mahaasiswa</h1>
<a href="inputMhs.php">Input Data</a>
<table border="1" cellpadding="5" cellspacing="0">
	<tr style="background-color: silver;">
		<td>no</td>
		<td>nim</td>
		<td>nama</td>
		<td>prodi</td>
		<td>fakultas</td>
		<td>opsi</td>
	</tr>
	<?php
		$no = 1; 
		foreach ($db->tampil_dataMhs() as $row) { 
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $row['nim']; ?></td>
		<td><?php echo $row['nama']; ?></td>
		<td><?php echo $row['prodi']; ?></td>
		<td><?php echo $row['fakultas']; ?></td>
		<td>
			<a href="editMhs.php?nim=<?php echo $row['nim']; ?>&aksi=editMhs">Edit</a>
			<a onclick="return konfirmasi()" href="proses.php?nim=<?php echo $row['nim']; ?>&aksi=hapusMhs">Hapus</a>			
		</td>
	</tr>
	<?php } ?>
</table>


<script type="text/javascript" language="JavaScript">

	 function konfirmasi() {
		 tanya = confirm("Anda Yakin Akan Menghapus Data ?");
		 if (tanya == true) return true;
		 else return false;
	 }
	 
</script>
<?php include 'koneksi.php'; ?>
<h3>form cari</h3>
<form method="POST" action="cari.php">
		<p>cari</p>
		<input type="text" name="kataKunci">
		<input type="submit" value="cari">
	</form>
