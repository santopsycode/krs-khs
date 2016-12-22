<?php 
	
	include ('koneksi.php');

	 $kataKunci  = $_POST['kataKunci'];
	 $query		= "SELECT * FROM mhs WHERE nama LIKE '%$kataKunci%'";
	 
	#ambil data di tabel dan masukkan ke array
	$sql = mysql_query ($query);
	$hasilcari 	= array();
	while ($row = mysql_fetch_assoc($sql)) {
		array_push($hasilcari, $row);
	}

	#setting judul laporan dan header tabel
	$judul = "LAPORAN PENCARIAN MAHASISWA";
	$header = array(
			array("label"=>"NIM", "length"=>30, "align"=>"L"),
			array("label"=>"NAMA", "length"=>50, "align"=>"L")
		);

	#sertakan library FPDF dan bentuk objek
	require_once ("../assets/fpdf181/fpdf.php");
	$pdf = new FPDF();
	$pdf->AddPage();
	 
	#tampilkan judul laporan
	$pdf->SetFont('Arial','B','16');
	$pdf->Cell(0,20, $judul, '0', 1, 'C');
	 
	#buat header tabel
	$pdf->SetFont('Arial','','10');
	$pdf->SetFillColor(255,0,0);
	$pdf->SetTextColor(255);
	$pdf->SetDrawColor(128,0,0);
	foreach ($header as $kolom) {
		$pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
	}
	$pdf->Ln();
	 
	#tampilkan data tabelnya
	$pdf->SetFillColor(224,235,255);
	$pdf->SetTextColor(0);
	$pdf->SetFont('');
	$fill=false;
	foreach ($hasilcari as $baris) {
		$i = 0;
		foreach ($baris as $cell) {
			$pdf->Cell($header[$i]['length'], 5, $cell, 1, '0', $kolom['align'], $fill);
			$i++;
		}
		$fill = !$fill;
		$pdf->Ln();
	}
	 
	#output file PDF
	$pdf->Output();


 ?>