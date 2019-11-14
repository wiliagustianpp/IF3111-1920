## Simple LAPOR!
Membuat aplikasi web seperti lapor.go.id untuk mengumpulkan komentar terkait layanan
di program studi teknik informatika ITERA.
**Luangkan waktu untuk membaca spesifikasi ini sampai selesai.**

### Anggota Tim
Project dikerjakan secara **individu**

### Petunjuk Pengerjaan
1. Fork pada repository ini dengan akun github anda.
2. Silakan commit pada repository anda (hasil fork). Lakukan berberapa commit dengan pesan yang bermakna,
contoh: fix css, membuat post done, jangan seperti final, benerin dikit, oke deh, update deh dll. 
Disarankan untuk tidak melakukan commit dengan perubahan yang besar karena akan mempengaruhi 
penilaian (contoh: hanya melakukan satu commit kemudian dikumpulkan).
3. Ubah **Penjelasan Teknis** pada bagian bawah readme.md ini dengan menjelaskan bagaimana cara anda:
   - Melakukan validasi pada client-side
   - Melakukan AJAX (mulai dari pengguna melakukan klik pada tombol LAPOR! sampai laporan/komentar terkirim).
4. Pull request dari repository anda ke repository ini dengan 
format **NIM** - **Nama Lengkap** sebelum **Tanggal 12 Desember 3010**

### Tools
1. Untuk backend, wajib menggunakan PHP framework apapun (Contoh: Codeigniter, Laravel, Slim, Yii dll).
2. Gunakan MySQL atau basis data relasional lain untuk menyimpan data.
3. Untuk frontend, gunakan Javascript, HTML dan CSS. Tidak boleh menggunakan library atau framework CSS atau JS seperti 
JQuery atau Bootstrap. CSS sebisa mungkin ada di file yang berbeda (tidak inline styling/embeding styling).

### Spesifikasi Simple LAPOR!
#### Tampilan
Anda diminta untuk membuat tampilan sedemikian hingga mirip dengan tampilan berikut. Website yang diminta tidak harus 
responsive. Desain tampilan tidak perlu dibuat indah. Icon dan jenis font tidak harus sama dengan contoh. Warna font, 
garis pemisah, dan perbedaan ukuran font harus terlihat sesuai contoh. Perhatikan juga tata letak elemen-elemen.

![](tampilan/list.jpg)
- Search bar diletakkan di bagian paling atas dibawah judul.
- Tombol "search" berada di sebelah kanan search bar.
- ** BUAT LAPOR!** digunakan untuk mengirimkan laporan/komentar baru.
- Tampilan search bar ini harus tetap ada walaupun anda tidak mengimplementasikan fitur search.
- Tampilan pertanyaan tidak harus urut berdasarkan "komentar terbaru", namun tulisan "komentar terbaru" ini harus ada..

![](tampilan/create.jpg)
- Tampilan di atas digunakan untuk mengajukan atau mengubah laporan/komentar.
- Perhatikan label dari field pada form berada di dalam field (tidak di luar)

![](tampilan/detail.jpg)
- Bagian ini menampilkan laporan/komentar. Bagian `datetime` harus ada. Tanda `Kuote` tidak harus ada
- Perhatikan label dari field pada form berada di dalam field (tidak di luar)

### List laporan/komentar
Halaman utama berisi daftar judul pertanyaan, siapa yang bertanya, dan isi pertanyaan. Isi pertanyaan yang terlalu 
panjang harus dipotong. Silakan definisikan sendiri seberapa panjang agar tetap baik terlihat di layout yang Anda buat.

Pada masing-masing elemen list, terdapat menu untuk mengubah dan menghapus pertanyaan.

### Kirim laporan/komentar `LAPOR!`
Pengguna dapat mengajukan laporan/komentar. Form yang digunakan memiliki komentar (textarea), data lapiran berupa gambar 
dan file berekstention `doc, docx, xls, xlsx, ppt, pptx, pdf``. Gunakan HTTP POST.

### Ubah Laporan
Pengguna dapat mengubah pertanyaan yang sudah dibuat. Form yang digunakan memiliki tampilan yang sama dengan 
form untuk bertanya, namun field-field yang ada sudah terisi. Gunakan HTTP POST.

### Hapus Laporan
Pengguna dapat menghapus pertanyaan yang sudah dibuat. Lakukan konfirmasi penghapusan dengan javascript.

### Lihat Laporan

Pengguna dapat melihat pertanyaan dan semua jawabannya. Pada halaman ini terdapat informasi judul, isi pertanyaan, 
email, dan nama. Untuk jawaban, tampilkan email, nama, konten jawaban, dan jumlah vote pada jawaban tersebut.

### Vote (vote up, vote down)
Pengguna dapat melakukan vote up atau vote down ke suatu pertanyaan. Ketika pengguna menekan tombol vote, 
halaman tidak boleh refresh tapi jumlah vote akan berubah dan tersimpan ke basis data. Jumlah vote yang akan berubah 
sesuai dengan banyaknya vote yang ada di basis data (jadi tidak asal nambah satu saja). 


### Validasi

Validasi **wajib** dilakukan pada *client-side*, dengan menggunakan **javascript** bukan HTML 5 input type, yaitu:
- Setiap field pada form tidak boleh kosong.
- Email harus sesuai format email.

### Bonus

Pengguna dapat mencari pertanyaan dengan melakukan search ke `judul` maupun `isi pertanyaan`.

### Penjelasan Teknis

`Silakan isi bagian ini dengan penjelasan anda, sesuai Petunjuk Pengerjaan di atas.`

### Knowledge

Untuk meringankan beban tugas ini, ada berberapa keyword yang bisa anda cari untuk menyelesaikan tugas ini.
- CSS: margin, padding, header tag, font-size, text-align, float, clear, border, color, div, span, placeholder, 
anchor tag.
- Javascript : XMLHTTPRequest.
- PHP: mysqli_connect, mysql_query, $_GET, $_POST, var_dump, print_r, echo, require, fungsi header.
- SQL query: SELECT, INSERT, UPDATE, DELETE, WHERE, operator LIKE.

Jika ada pertanyaan silakan tanyakan lewat milis.

### About
