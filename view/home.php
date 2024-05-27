<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Kreatif Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .hero {
            background: url("https://source.unsplash.com/1600x900/?indonesia") no-repeat center center;
            background-size: cover;
            color: white;
            text-align: center;
            padding: 100px 0;
        }

        #home {
            background-color: lightgray;
        }

        .h-screen {
            height: 100vh;
        }

        .section-title {
            margin: 40px 0;
        }

        .center {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .card-custom {
            width: 250px;
            height: 320px;
            border-radius: 20px;
            background: lightgray;
            overflow: hidden;
            position: relative;
        }

        .card-custom img,
        .card-produk img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        .card-custom span,
        .card-produk span {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            margin: 0 auto;
            padding: 10px;
            color: white;
            font-weight: bold;
            z-index: 10;
        }

        .card-produk {
            width: 250px;
            height: 250px;
            border-radius: 20px;
            background: lightgray;
            overflow: hidden;
            position: relative;
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
        <!-- <h1><?php if (isset($destinasi)) echo "ada" ?></h1> -->
        <!-- <div class="row">
            <div class="col-md-3">
                <div class="card-custom">
                    <img src="https://source.unsplash.com/320x250/?bali" alt="Destinasi 1">
                    <span>Bali</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-custom">
                    <img src="https://source.unsplash.com/320x250/?yogyakarta" alt="Destinasi 2">
                    <span>Yogyakarta</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-custom">
                    <img src="https://source.unsplash.com/320x250/?bandung" alt="Destinasi 3">
                    <span>Bandung</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-custom">
                    <img src="https://source.unsplash.com/320x250/?lombok" alt="Destinasi 4">
                    <span>Lombok</span>
                </div>
            </div>
        </div> -->
        <div class="row">
            <?php
            if ($destinasi->num_rows > 0) {
                while ($row = $destinasi->fetch_assoc()) {
                    echo '<a href="?c=destinasi&m=detail&id=' . $row["id"] . '" class="col-md-3">';
                    echo '<div class="card-custom">';
                    echo '<img src="' . $row["gambar"] . '" alt="Destinasi">';
                    echo '<span>' . $row["nama"] . '</span>';
                    echo '</div>';
                    echo '</a>';
                }
            } else {
                echo '<p class="text-center">Tidak ada destinasi wisata yang tersedia.</p>';
            }
            ?>
        </div>
    </section>

    <!-- Popular Creative Products Section -->
    <section id="products" class="h-screen center bg-light py-5 text-center">
        <div class="container">
            <h2 class="section-title">Produk Kreatif Populer</h2>
            <!-- <h1><?php if (isset($produk)) echo "ada" ?></h1> -->
            <!-- <div class="row">
                <div class="col-md-3">
                    <div class="card-produk">
                        <img src="https://source.unsplash.com/1600x900/?batik" alt="Produk 1">
                        <span>Batik</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-produk">
                        <img src="https://source.unsplash.com/1600x900/?kerajinan" alt="Produk 2">
                        <span>Kerajinan Tangan</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-produk">
                        <img src="https://source.unsplash.com/1600x900/?kopi" alt="Produk 3">
                        <span>Kopi Lokal</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-produk">
                        <img src="https://source.unsplash.com/1600x900/?fashion" alt="Produk 4">
                        <span>Produk Fashion</span>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <?php
                if ($produk->num_rows > 0) {
                    while ($row = $produk->fetch_assoc()) {
                ?>
                        <a href="?c=produk&m=detail&id=<?php echo $row["id"]; ?>" class="col-md-3">
                            <div class="card-custom">
                                <img src="<?php echo $row["gambar"]; ?>" alt="Destinasi">
                                <span><?php echo $row["nama"]; ?></span>
                            </div>
                        </a>
                <?php
                    }
                } else {
                    echo '<p class="text-center">Tidak ada destinasi wisata yang tersedia.</p>';
                }
                ?>
            </div>
        </div>
    </section>


    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>