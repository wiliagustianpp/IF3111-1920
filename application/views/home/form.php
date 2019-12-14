	<!-- View Untuk Form Inputan laporan baru -->
<div id="konten">
	<p>Buat Laporan</p>
	<br><hr><br>

	<form action="<?= base_url();?>CRUD/add" method="POST" onSubmit="validasi()" 
	enctype="multipart/form-data" name="data">
	<?= "<font color='red'><i>$error </i><br></font>"; ?>
	<div class="textinput">
		<input type="text" name="author" placeholder="Masukkan Nama..."> <br><br>
		<input type="text" name="judul" placeholder="Judul laporan anda..."> <br> <br>
	</div>
	<textarea placeholder="Ketik laporan..." class="textarea" name="isi"></textarea>
	<select name="aspek">
		<option value=NULL>Pilih kategori Laporan</option>
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
		<input type="submit" name="kirim" value="Lapor!">
	</div>
	<hr>
</form>
</div>
<script src=" <?= base_url(); ?>asset/js/validasi.js"></script>
