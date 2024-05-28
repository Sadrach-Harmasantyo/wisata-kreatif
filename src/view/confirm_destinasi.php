<?php if ($destinasi): ?>
  <h2>Destinasi Berhasil Ditambahkan!</h2>
  <p>Nama: <?php echo $destinasi->nama; ?></p>
  <p>Deskripsi: <?php echo $destinasi->deskripsi; ?></p>
  <p>Lokasi: <?php echo $destinasi->lokasi; ?></p>
  <p>Kategori: <?php echo $destinasi->kategori; ?></p>
  <p>Gambar: <img src="<?php echo $destinasi->gambar; ?>" alt="Gambar Destinasi"></p>
<?php else: ?>
  <p>Destinasi tidak ditemukan.</p>
<?php endif; ?>
<a href="?c=Destinasi&m=create_form">Tambah Destinasi Lain</a>
