<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Kreatif Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .hero {
            background: url('https://via.placeholder.com/1500x500') no-repeat center center;
            background-size: cover;
            color: white;
            text-align: center;
            padding: 100px 0;
        }

        .section-title {
            margin: 40px 0;
        }

        .card img {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <?php include 'navbar.php' ?>

    <!-- Hero Section -->
    <div class="hero">
        <h1 class="display-4">Wisata Kreatif Indonesia</h1>
        <p class="lead">Menemukan dan Mendukung Destinasi Wisata serta Produk Kreatif Lokal</p>
        <a href="#services" class="btn btn-primary btn-lg">Pelajari Lebih Lanjut</a>
    </div>

    <!-- Our Services Section -->
    <section id="services" class="container text-center">
        <h2 class="section-title">Layanan Kami</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Panduan Wisata</h5>
                        <p class="card-text">Menawarkan informasi lengkap tentang destinasi wisata kreatif di Indonesia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Dukungan Ekonomi Kreatif</h5>
                        <p class="card-text">Mendukung pelaku ekonomi kreatif lokal dengan mempromosikan produk mereka.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Event & Workshop</h5>
                        <p class="card-text">Menyelenggarakan berbagai event dan workshop untuk meningkatkan kreativitas lokal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section id="statistics" class="bg-light py-5 text-center h-100">
        <div class="container">
            <h2 class="section-title">Statistik</h2>
            <div class="row">
                <div class="col-md-4">
                    <h3>Total Destinasi</h3>
                    <p class="display-4">150+</p>
                </div>
                <div class="col-md-4">
                    <h3>Total Produk Kreatif</h3>
                    <p class="display-4">50+</p>
                </div>
                <div class="col-md-4">
                    <h3>Pengguna Aktif</h3>
                    <p class="display-4">1000+</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Destinations Section -->
    <section id="destinations" class="container text-center h-100">
        <h2 class="section-title">Destinasi Populer</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Destinasi 1">
                    <div class="card-body">
                        <h5 class="card-title">Bali</h5>
                        <p class="card-text">Keindahan pulau dewata dengan budaya dan alam yang memukau.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Destinasi 2">
                    <div class="card-body">
                        <h5 class="card-title">Yogyakarta</h5>
                        <p class="card-text">Kota budaya dengan warisan sejarah dan seni yang kaya.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Destinasi 3">
                    <div class="card-body">
                        <h5 class="card-title">Bandung</h5>
                        <p class="card-text">Kota kreatif dengan produk fashion dan kuliner yang inovatif.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Destinasi 4">
                    <div class="card-body">
                        <h5 class="card-title">Lombok</h5>
                        <p class="card-text">Destinasi dengan pantai-pantai eksotis dan keindahan alam yang luar biasa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Creative Products Section -->
    <section id="products" class="bg-light py-5 text-center h-100">
        <div class="container">
            <h2 class="section-title">Produk Kreatif Populer</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Produk 1">
                        <div class="card-body">
                            <h5 class="card-title">Batik</h5>
                            <p class="card-text">Kain tradisional dengan motif yang kaya akan budaya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Produk 2">
                        <div class="card-body">
                            <h5 class="card-title">Kerajinan Tangan</h5>
                            <p class="card-text">Produk unik yang dibuat oleh pengrajin lokal dengan keahlian tinggi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Produk 3">
                        <div class="card-body">
                            <h5 class="card-title">Kopi Lokal</h5>
                            <p class="card-text">Menikmati cita rasa kopi asli Indonesia dari berbagai daerah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Produk 4">
                        <div class="card-body">
                            <h5 class="card-title">Produk Fashion</h5>
                            <p class="card-text">Fashion lokal dengan desain kreatif dan inovatif.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>