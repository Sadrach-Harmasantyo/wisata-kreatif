<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .w-full {
            width: 100%;
        }

        #navbar-custom {
            height: 15vh;
            background-color: transparent;
            transition: all 0.3s ease;
        }

        #navbar-custom.scrolled {
            background-color: rgba(0, 0, 0, 0.5);
            height: 10vh;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav id="navbar-custom" class="w-full fixed-top navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="text-white fw-bold navbar-brand" href="index.php">Wisata Kreatif</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto fw-bold">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="?c=Destinasi&m=index">Destinasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="?c=Produk&m=index">Produk</a>
                    </li>
                    <?php if (isset($_SESSION['user_id'])) : ?>
                        <!-- <li class="nav-item">
                            <a class="nav-link text-white" href="?c=Post&m=create_form">Create Post</a>
                        </li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profil
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="?c=User&m=profile">Lihat Profil</a></li>
                                <li><a class="dropdown-item"><?php echo $_SESSION['username'] ?></a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="?c=User&m=logout">Logout</a></li>
                            </ul>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="?c=User&m=login_form">Login</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link text-white" href="?c=User&m=register_form">Register</a>
                        </li> -->
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        window.addEventListener('scroll', function() {
            var navbar = document.getElementById('navbar-custom');
            if (window.scrollY > 50) { // adjust this value as needed
                navbar.classList.add('scrolled');

            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>