<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Edit Produk</h2>
        <form action="?c=Produk&m=update" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $produk->id; ?>" />
            <div class="form-group">
                <label for="productName">Nama Produk:</label>
                <input type="text" class="form-control" id="nama" name="nama" required value="<?php echo $produk->nama; ?>" />
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Produk:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" required><?php echo $produk->deskripsi; ?></textarea>
            </div>
            <div class="form-group">
                <label for="deskripsi">Kategori Produk:</label>
                <input class="form-control" id="kategori" name="kategori" rows="5" required value="<?php echo $produk->kategori; ?>" />
            </div>
            <div class="form-group">
                <label for="harga">Harga Produk:</label>
                <input type="number" class="form-control" id="harga" name="harga" required value="<?php echo $produk->harga; ?>" />
            </div>
            <div class="form-group">
                <label>Gambar Produk Sekarang:</label>
                <?php if (!empty($produk->gambar)) : ?>
                    <img src="<?php echo $produk->gambar; ?>" width="300" height="300"><br>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="upload_gambar">Upload Gambar Produk Baru:</label>
                <input type="file" class="form-control-file" id="upload_gambar" name="upload_gambar" />
            </div>
            <button type="submit" class="btn btn-primary" value="Update">Simpan Perubahan</button>
        </form>
        <form action="?c=Produk&m=delete" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $produk->id; ?>">
            <input class="btn btn-danger" type="submit" value="Delete">
        </form>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>