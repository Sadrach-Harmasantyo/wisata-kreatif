<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #content {
            height: 100vh;
        }
        .kategori {
            padding: 4px 12px;
            background-color: lightgray;
            color: black;
            border-radius: 16px;
            width: fit-content;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div id="content" class="container mt-5 h-screen">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $produk->gambar; ?>" class="img-fluid" alt="<?php echo $produk->nama; ?>">
            </div>
            <div class="col-md-6">
                <h2><?php echo $produk->nama; ?></h2>
                <p class="kategori"><?php echo $produk->kategori; ?></p>
                <h4 class="text-primary">Rp. <?php echo $produk->harga; ?></h4>
                <p><?php echo $produk->deskripsi; ?></p>

                <?php if ($_SESSION['role'] === 'admin'): ?>
                <a href="?c=Produk&m=edit&id=<?php echo $produk->id; ?>" class="btn btn-primary">Edit</a>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <!-- Link to Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
