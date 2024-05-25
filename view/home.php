<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Kreatif Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .hero {
            background: url('https://source.unsplash.com/1600x900/?indonesia') no-repeat center center;
            background-size: cover;
            color: white;
            text-align: center;
            padding: 100px 0;
        }

        #home {
            background-color: #6998ab;
        }

        .h-screen {
            height: 100vh;
        }

        .section-title {
            margin: 40px 0;
        }

        .card img {
            height: 200px;
            object-fit: cover;
        }

        .center {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        #home2 {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 100vh;
        }

        #home2 .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        #home2 .video-foreground {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            transform: translate(-50%, -50%);
            pointer-events: none;
        }

        #home2 .video-foreground iframe {
            width: 100vw;
            height: 56.25vw;
            /* 16:9 ratio */
            min-height: 100vh;
            min-width: 177.78vh;
            /* 16:9 ratio */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            pointer-events: none;
        }

        #home2 h1,
        p,
        a {
            position: relative;
            z-index: 1;
        }
    </style>
</head>

<body>

    <?php include 'navbar.php' ?>

    <!-- Hero Section -->
    <div id="home" class="h-screen hero d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-4 fw-bold">Wisata Kreatif Indonesia</h1>
        <p class="lead">Menemukan dan Mendukung Destinasi Wisata serta Produk Kreatif Lokal</p>
        <a href="#services" class="btn btn-primary btn-lg">Pelajari Lebih Lanjut</a>
    </div>
    <!-- <div id="home2" class="h-screen d-flex flex-column justify-content-center align-items-center">
        <div class="video-background">
            <div class="video-foreground">
                <iframe src="https://www.youtube.com/embed/Ox5X9Yzuik8?autoplay=1&mute=1&loop=1&playlist=Ox5X9Yzuik8" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>
        </div>
        <h1 class="display-4 fw-bold text-white">Wisata Kreatif Indonesia</h1>
        <p class="lead">Menemukan dan Mendukung Destinasi Wisata serta Produk Kreatif Lokal</p>
        <a href="#services" class="btn btn-primary btn-lg">Pelajari Lebih Lanjut</a>
    </div> -->




    <!-- Our Services Section -->
    <section id="services" class="h-screen center container text-center">
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
    <section id="statistics" class="center h-screen bg-light py-5 text-center">
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
    <section id="destinations" class="h-screen center container text-center">
        <h2 class="section-title">Destinasi Populer</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img src="https://source.unsplash.com/1600x900/?bali" class="card-img-top" alt="Destinasi 1">
                    <div class="card-body">
                        <h5 class="card-title">Bali</h5>
                        <p class="card-text">Keindahan pulau dewata dengan budaya dan alam yang memukau.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://source.unsplash.com/1600x900/?yogyakarta" class="card-img-top" alt="Destinasi 2">
                    <div class="card-body">
                        <h5 class="card-title">Yogyakarta</h5>
                        <p class="card-text">Kota budaya dengan warisan sejarah dan seni yang kaya.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://source.unsplash.com/1600x900/?bandung" class="card-img-top" alt="Destinasi 3">
                    <div class="card-body">
                        <h5 class="card-title">Bandung</h5>
                        <p class="card-text">Kota kreatif dengan produk fashion dan kuliner yang inovatif.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://source.unsplash.com/1600x900/?lombok" class="card-img-top" alt="Destinasi 4">
                    <div class="card-body">
                        <h5 class="card-title">Lombok</h5>
                        <p class="card-text">Destinasi dengan pantai-pantai eksotis dan keindahan alam yang luar biasa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Creative Products Section -->
    <section id="products" class="h-screen center bg-light py-5 text-center">
        <div class="container">
            <h2 class="section-title">Produk Kreatif Populer</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://source.unsplash.com/1600x900/?batik" class="card-img-top" alt="Produk 1">
                        <div class="card-body">
                            <h5 class="card-title">Batik</h5>
                            <p class="card-text">Kain tradisional dengan motif yang kaya akan budaya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://source.unsplash.com/1600x900/?kerajinan" class="card-img-top" alt="Produk 2">
                        <div class="card-body">
                            <h5 class="card-title">Kerajinan Tangan</h5>
                            <p class="card-text">Produk unik yang dibuat oleh pengrajin lokal dengan keahlian tinggi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://source.unsplash.com/1600x900/?kopi" class="card-img-top" alt="Produk 3">
                        <div class="card-body">
                            <h5 class="card-title">Kopi Lokal</h5>
                            <p class="card-text">Menikmati cita rasa kopi asli Indonesia dari berbagai daerah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://source.unsplash.com/1600x900/?fashion" class="card-img-top" alt="Produk 4">
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