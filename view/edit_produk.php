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
        <form action="edit_product_process.php" method="post">
            <div class="form-group">
                <label for="productName">Nama Produk:</label>
                <input type="text" class="form-control" id="productName" name="productName" required>
            </div>
            <div class="form-group">
                <label for="productDescription">Deskripsi Produk:</label>
                <textarea class="form-control" id="productDescription" name="productDescription" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="productPrice">Harga Produk:</label>
                <input type="number" class="form-control" id="productPrice" name="productPrice" required>
            </div>
            <div class="form-group">
                <label for="productImage">Gambar Produk:</label>
                <input type="file" class="form-control-file" id="productImage" name="productImage">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
