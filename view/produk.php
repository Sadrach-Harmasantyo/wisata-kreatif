<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Wisata</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-custom {
            border-bottom: 1px solid black;
            height: 10vh;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            height: 150px;
            overflow: hidden;
        }

        .card-body p {
            margin-bottom: 0;
        }

        .card-footer {
            background-color: #f8f9fa;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
</head>

<body>

    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Produk Kreatif di Indonesia</h2>
        <a class="btn btn-primary" href="?c=Produk&m=create_form">Tambah Produk</a>
        <div class="row">
            <?php
            if (!$produk->num_rows) {
                echo '<p class="text-center">Tidak ada produk yang tersedia.</p>';
            } else {
                echo "<div class='col-md-4 mb-4'>";
                while ($row = $produk->fetch_object()) {
                    echo "
                <div class='card'>
                    <img src='$row->gambar' class='card-img-top' alt='$row->gambar'>
                    <div class='card-body'>
                        <h5 class='card-title'>$row->nama</h5>
                        <p class='card-text'>" . implode(' ', array_slice(explode(' ', $row->deskripsi), 0, 10)) . "...</p>
                    </div>
                    <div class='card-footer'>
                        <a href='?c=produk&m=detail&id=$row->id' class='btn btn-primary'>Lihat Detail</a>
                    </div>
                </div>
            </div>";
                }
                echo "</div>";
            }


            ?>
            <!-- <div class="col-md-4 mb-4">
            <div class="card">
                <img src="image1.jpg" class="card-img-top" alt="produk 1">
                <div class="card-body">
                    <h5 class="card-title">produk 1</h5>
                    <p class="card-text">Deskripsi singkat tentang produk wisata ini. Deskripsi ini dibatasi agar tidak terlalu panjang.</p>
                </div>
                <div class="card-footer">
                    <a href="detail1.php" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="image2.jpg" class="card-img-top" alt="produk 2">
                <div class="card-body">
                    <h5 class="card-title">produk 2</h5>
                    <p class="card-text">Deskripsi singkat tentang produk wisata ini. Deskripsi ini dibatasi agar tidak terlalu panjang.</p>
                </div>
                <div class="card-footer">
                    <a href="detail2.php" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="image3.jpg" class="card-img-top" alt="produk 3">
                <div class="card-body">
                    <h5 class="card-title">produk 3</h5>
                    <p class="card-text">Deskripsi singkat tentang produk wisata ini. Deskripsi ini dibatasi agar tidak terlalu panjang.</p>
                </div>
                <div class="card-footer">
                    <a href="detail3.php" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div> -->
        </div>
    </div>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>