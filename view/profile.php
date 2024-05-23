<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .profile-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .profile-info {
            margin-bottom: 20px;
        }

        .profile-info h5 {
            margin-bottom: 10px;
        }

        .edit-profile-form {
            max-width: 600px;
            margin: auto;
        }
    </style>
</head>

<body>
<?php include 'navbar.php'; ?>
    <div class="container mt-5">
        <div class="profile-header">
            <img src="https://via.placeholder.com/150" alt="Profile Picture" class="profile-image">
            <h2>Nama Pengguna</h2>
        </div>
        <div class="profile-info text-center">
            <h5>Email: user@example.com</h5>
            <h5>Telepon: 08123456789</h5>
            <h5>Alamat: Jalan Contoh No. 123, Kota Contoh</h5>
        </div>

        <div class="text-center mb-4">
            <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#editProfileForm" aria-expanded="false" aria-controls="editProfileForm">Edit Profil</button>
        </div>

        <div class="collapse" id="editProfileForm">
            <div class="edit-profile-form">
                <form>
                    <div class="mb-3">
                        <label for="editName" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="editName" placeholder="Nama Pengguna">
                    </div>
                    <div class="mb-3">
                        <label for="editEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="editEmail" placeholder="user@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="editPhone" class="form-label">Telepon</label>
                        <input type="text" class="form-control" id="editPhone" placeholder="08123456789">
                    </div>
                    <div class="mb-3">
                        <label for="editAddress" class="form-label">Alamat</label>
                        <textarea class="form-control" id="editAddress" rows="3" placeholder="Jalan Contoh No. 123, Kota Contoh"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>