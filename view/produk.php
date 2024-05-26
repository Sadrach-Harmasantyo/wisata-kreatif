<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Wisata</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: url("https://source.unsplash.com/1600x900/?batik") no-repeat center center;
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

        .produk {
            margin-top: 100px;
        }

        .navbar-custom {
            border-bottom: 1px solid black;
            height: 10vh;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            gap: 10px;
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

        .kategori {
            padding: 4px 12px;
            background-color: lightgray;
            color: black;
            border-radius: 16px;
            width: fit-content;
        }

        .harga {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <?php include 'navbar.php'; ?>

    <div id="home" class="h-screen hero d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-4 fw-bold">Produk Kreatif Indonesia</h1>
    </div>

    <div id="produk-list" class="h-screen container produk">
        <h2 class="text-center mb-4">Produk Kreatif di Indonesia</h2>
        <!-- <form method="GET" action="?c=Produk&m=search" class="mb-4">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Cari produk...">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Cari</button>
                </div>
            </div>
        </form> -->
        <!-- Formulir Pencarian -->
        <form id="search-form" class="form-inline mb-4" method="GET" action="">
            <input type="hidden" name="c" value="Produk">
            <input type="hidden" name="m" value="index">
            <input class="form-control mr-sm-2 w-75" type="search" placeholder="Cari destinasi..." aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
        </form>
        <a class="btn btn-primary" href="?c=Produk&m=create_form">Tambah Produk</a>
        <div class="d-flex flex-wrap gap-4">
            <?php
            if (!$produk->num_rows) {
                echo '<p class="text-center">Tidak ada produk yang tersedia.</p>';
            } else {
                while ($row = $produk->fetch_object()) {
                    echo "
                <div class='card w-25'>
                    <img src='$row->gambar' class='card-img-top' alt='$row->gambar'>
                    <div class='card-body'>
                        <h5 class='card-title'>$row->nama</h5>
                        <p class='kategori'>$row->kategori</p>
                        <p class='card-text text-justify'>" . implode(' ', array_slice(explode(' ', $row->deskripsi), 0, 10)) . "...</p>
                        <p class='card-text harga'>Rp. $row->harga</p>
                    </div>
                    <div class='card-footer'>
                        <a href='?c=produk&m=detail&id=$row->id' class='btn btn-primary'>Lihat Detail</a>
                    </div>
                </div>";
                }
            }
            ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('search-form').addEventListener('submit', function() {
            setTimeout(function() {
                window.location.hash = '#produk-list';
            }, 500);
        });
        // Check if there is a hash in the URL
        if (window.location.hash) {
            var hash = window.location.hash;
            // Check if the element with the hash ID exists
            var element = document.querySelector(hash);
            if (element) {
                // Scroll to the element with the hash ID
                element.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    </script>

</body>

</html>