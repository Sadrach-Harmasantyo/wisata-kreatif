<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Destinasi Wisata - Bali</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Edit Detail Destinasi -->
    <div class="container mt-5">
        <h1 class="display-4 text-center">Edit Detail Destinasi - Pulau Bali</h1>
        <form action="proses_edit.php" method="POST">
            <div class="form-group">
                <label for="namaDestinasi">Nama Destinasi</label>
                <input type="text" class="form-control" id="namaDestinasi" name="namaDestinasi" value="Pulau Bali" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" required>Bali, juga dikenal sebagai Pulau Dewata, adalah salah satu destinasi wisata terpopuler di Indonesia. Pulau ini terkenal dengan pantai-pantainya yang indah, budaya yang kaya, dan pemandangan alam yang menakjubkan.</textarea>
            </div>
            <div class="form-group">
                <label for="aktivitas">Aktivitas</label>
                <textarea class="form-control" id="aktivitas" name="aktivitas" rows="3" required>Berselancar di Pantai Kuta
Menjelajah Pura Besakih
Menyelam di Tulamben
Mengunjungi Ubud Monkey Forest</textarea>
            </div>
            <div class="form-group">
                <label for="fasilitas">Fasilitas</label>
                <textarea class="form-control" id="fasilitas" name="fasilitas" rows="3" required>Bali menawarkan berbagai fasilitas mulai dari hotel mewah, restoran internasional, hingga pusat perbelanjaan modern.</textarea>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="Jl. Raya Kuta, Bali, Indonesia" required>
            </div>
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon" value="+62 123 4567" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="info@wisata-bali.com" required>
            </div>
            <div class="form-group">
                <label for="petaLokasi">Peta Lokasi (Embed URL)</label>
                <input type="text" class="form-control" id="petaLokasi" name="petaLokasi" value="https://maps.google.com/maps?q=Bali&t=&z=13&ie=UTF8&iwloc=&output=embed" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#konfirmasiHapus">Hapus Destinasi</button>
        </form>
    </div>

    <!-- Modal Konfirmasi Hapus -->
    <div class="modal fade" id="konfirmasiHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus destinasi ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <form action="proses_hapus.php" method="POST">
                        <input type="hidden" name="namaDestinasi" value="Pulau Bali">
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
