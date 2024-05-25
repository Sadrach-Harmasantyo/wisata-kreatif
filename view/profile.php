<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'navbar.php' ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Pengguna</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .profile-card {
      background-color: #f8f9fa;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
    }
    .profile-image {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin-bottom: 20px;
    }
    .edit-profile-btn {
      background-color: #007bff;
      color: white;
    }
    .edit-profile-btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="profile-card">
          <img src="https://via.placeholder.com/150" alt="Foto Profil" class="profile-image">
          <h3 class="username"><?php echo $_SESSION['username']; ?></h3>
          <p class="role"><?php echo $_SESSION['role']; ?></p>
          <button class="btn edit-profile-btn" data-toggle="collapse" href="#editProfileForm" role="button" aria-expanded="false" aria-controls="editProfileForm">Edit Profile</button>
          <div class="collapse mt-4" id="editProfileForm">
            <div class="card card-body">
              <form action="?c=User&m=update_profile" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="editUsername">Edit Username</label>
                  <input type="text" class="form-control" id="editUsername" placeholder="Username Baru">
                </div>
                <div class="form-group">
                  <label for="editPassword">Edit Password</label>
                  <input type="password" class="form-control" id="editPassword" placeholder="Password Baru">
                </div>
                <div class="form-group">
                  <label for="editPassword">Ganti Gambar</label>
                  <input type="file" class="form-control-file" id="editImage">
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
