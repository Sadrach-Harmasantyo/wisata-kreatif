<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Wisata</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
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

    <div class="container produk">
        <h2 class="text-center mb-4">Produk Kreatif di Indonesia</h2>
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

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>