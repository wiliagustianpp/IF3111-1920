
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?= $title; ?></title>

  <!-- Pengabilan file dari folder assets External dari CI-->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>asset/css/main.css">

  <!-- -->

</head>
<body>
  <div id="container">
  <div id="head">
     <h1>SIMPLE LAPOR!</h1>
  </div>
<!-- View Untuk Form Inputan laporan baru -->

<div id="konten">
	<p>Buat laporan/komentar </p>
	<br><hr><br>
	<form action="../../CRUD/edit" method="POST" onSubmit="validasi()" enctype="multipart/form-data" name="data">

	<?php 
		foreach ($laporan as $laporans) {
	?>	
	<input type="text" name="ID" value="<?php echo $laporans->ID ?>" style="display: none";
	<div class="textinput">
		<input type="text" name="author" value="<?php echo $laporans->author ?>" placeholder="Masukkan nama author dan kosongkan jika ingin disamarkan..."> <br><br>
		<input type="text" name="judul" value="<?php echo $laporans->judul ?>" placeholder="Judul laporan anda..."> <br> <br>
	</div>
	<textarea placeholder="Ketik laporan/komentar anda..." class="textarea" name="isi"> <?php echo $laporans->isi ?> </textarea>
	<select name="aspek">
		<option value=NULL>Pilih aspek pelaporan/komentar</option>
		<option selected value="<?php echo $laporans->kategori ?>"><?php echo $laporans->kategori ?></option>
		<option value="dosen">Dosen</option>
		<option value="staff">Staff</option>
		<option value="mahasiswa">Mahasiswa</option>
		<option value="infrastruktur">Infrastruktur</option>
		<option value="pengajaran">Pengajaran</option>
	</select>
	<br>
	<input type="file" name="lampiran">
	<div class="jarak">
		<a class="button" href="<?= base_url();?>home/index">Kembali</a> 
		<input type="submit" name="kirim" value="Edit LAPOR!">
	</div>
	<hr>
	<?php
		}
	?>
</form>
</div>
<script src=" <?= base_url(); ?>asset/js/validasi.js"></script>
