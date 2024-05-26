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
            background: url('https://source.unsplash.com/1600x900/?bali') no-repeat center center;
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
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .card-body {
            height: 150px;
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
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div id="home" class="h-screen hero d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-4 fw-bold">Wisata Destinasi Indonesia</h1>
    </div>
    <div class="h-screen container mt-5">
        <h2 class="text-center mb-4">Destinasi Wisata Kreatif di Indonesia</h2>
        <!-- Formulir Pencarian -->
        <form class="form-inline mb-4">
            <input class="form-control mr-sm-2 w-100" type="search" placeholder="Cari destinasi..." aria-label="Search" id="search">
            <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="button">Cari</button> -->
        </form>
        <a class="btn btn-primary mb-4" href="?c=Destinasi&m=create_form">Tambah Destinasi</a>
        <div id="destinasi-list" class="d-flex flex-wrap gap-4">
            <!-- Konten hasil pencarian akan muncul di sini -->
            <?php
            if (!$destinasi->num_rows) {
                echo '<p class="text-center">Tidak ada destinasi wisata yang tersedia.</p>';
            } else {
                while ($row = $destinasi->fetch_object()) {
                    echo "
                <div class='card w-25'>
                    <img src='$row->gambar' class='card-img-top' alt='$row->gambar'>
                    <div class='card-body'>
                        <h5 class='card-title'>$row->nama</h5>
                        <p class='card-text'>" . implode(' ', array_slice(explode(' ', $row->deskripsi), 0, 10)) . "...</p>
                        <p class='card-text'>Alamat : $row->alamat</p>
                    </div>
                    <div class='card-footer'>
                        <a href='?c=destinasi&m=detail&id=$row->id' class='btn btn-primary'>Lihat Detail</a>
                    </div>
                </div>";
                }
            }
            ?>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <!-- Include jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                let query = $(this).val();
                $.ajax({
                    type: 'POST',
                    url: '?c=Destinasi&m=search',
                    data: { query: query },
                    dataType: 'json',
                    success: function(response) {
                        let destinasiList = $('#destinasi-list');
                        destinasiList.empty();
                        if (response.length === 0) {
                            destinasiList.append('<p class="text-center">Tidak ada destinasi wisata yang tersedia.</p>');
                        } else {
                            response.forEach(function(row) {
                                let card = `
                                    <div class='card w-25'>
                                        <img src='${row.gambar}' class='card-img-top' alt='${row.nama}'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>${row.nama}</h5>
                                            <p class='card-text'>${row.deskripsi.split(' ').slice(0, 10).join(' ')}...</p>
                                            <p class='card-text'>Alamat : ${row.alamat}</p>
                                        </div>
                                        <div class='card-footer'>
                                            <a href='?c=destinasi&m=detail&id=${row.id}' class='btn btn-primary'>Lihat Detail</a>
                                        </div>
                                    </div>`;
                                destinasiList.append(card);
                            });
                        }
                    },
                    error: function() {
                        console.error('Error fetching data');
                    }
                });
            });
        });
    </script>
</body>
</html>