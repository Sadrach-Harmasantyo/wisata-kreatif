<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-custom {
            border-bottom: 1px solid black;
            height: 10vh;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
        <a class="navbar-brand" href="index.php">My Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <?php if (isset($_SESSION['user_id'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?c=User&m=logout">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?c=Post&m=create_form">Create Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?c=User&m=profile">Profile</a></li>
                    <li class="nav-item">
                        <span class="navbar-text mx-3">Your username: <?php echo $_SESSION['username']?></span>
                    </li>
                    <li class="nav-item">
                        <span class="navbar-text mx-3">Your role: <?php echo $_SESSION['role'] ?></span>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?c=User&m=login_form">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?c=User&m=register_form">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>