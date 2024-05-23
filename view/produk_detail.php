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
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div id="content" class="container mt-5 h-screen">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo htmlspecialchars($produk->gambar); ?>" class="img-fluid" alt="<?php echo htmlspecialchars($produk->nama); ?>">
            </div>
            <div class="col-md-6">
                <h2><?php echo htmlspecialchars($produk->nama); ?></h2>
                <p class="text-muted"><?php echo htmlspecialchars($produk->kategori); ?></p>
                <h4 class="text-primary">Rp. <?php echo number_format($produk->harga, 0, ',', '.'); ?></h4>
                <p><?php echo nl2br(htmlspecialchars($produk->deskripsi)); ?></p>

                <a href="?c=Produk&m=edit&id=<?php echo $produk->id; ?>" class="btn btn-primary">Edit</a>


                <a href="delete_produk.php?id=<?php echo $produk->id; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
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
