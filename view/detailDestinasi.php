<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Destinasi Wisata - Bali</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Detail Destinasi -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h1 class="display-4">Pulau Bali</h1>
                <img src="https://via.placeholder.com/750x400" class="img-fluid mb-4" alt="Pulau Bali">
                <p class="lead">Bali, juga dikenal sebagai Pulau Dewata, adalah salah satu destinasi wisata terpopuler di Indonesia. Pulau ini terkenal dengan pantai-pantainya yang indah, budaya yang kaya, dan pemandangan alam yang menakjubkan.</p>
                <h3>Aktivitas</h3>
                <ul>
                    <li>Berselancar di Pantai Kuta</li>
                    <li>Menjelajah Pura Besakih</li>
                    <li>Menyelam di Tulamben</li>
                    <li>Mengunjungi Ubud Monkey Forest</li>
                </ul>
                <h3>Fasilitas</h3>
                <p>Bali menawarkan berbagai fasilitas mulai dari hotel mewah, restoran internasional, hingga pusat perbelanjaan modern.</p>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Informasi Kontak</h5>
                        <p class="card-text">Alamat: Jl. Raya Kuta, Bali, Indonesia</p>
                        <p class="card-text">Telepon: +62 123 4567</p>
                        <p class="card-text">Email: info@wisata-bali.com</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Peta Lokasi</h5>
                        <iframe src="https://maps.google.com/maps?q=Bali&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                    <!-- Tombol Edit -->
                    <div class="text-center mt-3">
                            <button class="btn btn-primary" onclick="window.location.href='?c=Destinasi&m=editDestinasi'">Edit Wisata</button>
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

