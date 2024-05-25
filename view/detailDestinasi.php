<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Destinasi Wisata</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Detail Destinasi -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h1 class="display-4"><?php echo $destinasi->nama; ?></h1>
                <img src="<?php echo $destinasi->gambar; ?>" alt="Pulau Bali">
                <p class="lead"><?php echo $destinasi->deskripsi; ?></p>
                <h3>Aktivitas</h3>
                <!-- <ul>
                    <li>Berselancar di Pantai Kuta</li>
                    <li>Menjelajah Pura Besakih</li>
                    <li>Menyelam di Tulamben</li>
                    <li>Mengunjungi Ubud Monkey Forest</li>
                </ul> -->
                <p><?php echo $destinasi->aktivitas; ?></p>
                <h3>Fasilitas</h3>
                <p><?php echo $destinasi->fasilitas; ?></p>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Informasi Kontak</h5>
                        <p class="card-text">Alamat: <?php echo $destinasi->alamat; ?></p>
                        <p class="card-text">Telepon:<?php echo $destinasi->telepon; ?></p>
                        <p class="card-text">Email: <?php echo $destinasi->email; ?></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Peta Lokasi</h5>
                        <!-- <iframe src="https://maps.google.com/maps?q=Bali&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                            <iframe src="<?php echo $destinasi->lokasi; ?>" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- https://maps.app.goo.gl/xVbUSJXPqRKuVzSR6 -->
                    </div>
                    <!-- Tombol Edit -->
                    <?php if ($_SESSION['role'] === 'admin'): ?>
                    <div class="text-center mt-3">
                    <a href="?c=Destinasi&m=edit&id=<?php echo $destinasi->id; ?>" class="btn btn-primary">Edit</a>
                    <?php endif; ?>
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

