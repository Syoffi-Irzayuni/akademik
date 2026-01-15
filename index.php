<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg shadow-sm" style="background-color: #f7d354;">
        <div class="container">

            <a class="navbar-brand d-flex align-items-center fw-bold text-dark" href="#">
                <img src="images/logo.png" width="38" height="38" class="rounded-circle me-2">
                Akademik
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-3">
                    <li class="nav-item">
                        <a class="nav-link text-dark <?= $page == 'home' ? 'fw-bold' : '' ?>"
                            href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-dark <?= $page == 'mahasiswa' ? 'fw-bold' : '' ?>"
                            href="index.php?page=mahasiswa">Mahasiswa</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-dark <?= $page == 'prodi' ? 'fw-bold' : '' ?>"
                            href="index.php?page=prodi">Program Studi</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto align-items-center">

                    <li class="nav-item d-flex align-items-center ms-4">
                        <a class="nav-link text-dark" href="index.php?page=profil_edit">
                            Edit Profil
                        </a>
                    </li>

                    <li class="nav-item ms-3">
                        <a href="logout.php" class="btn btn-danger btn-sm px-3">Logout</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="container my-5">

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">

                <?php
                    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
switch ($page) {
    case 'home':
        include 'home.php';
        break;
    case 'mahasiswa':
        include 'mahasiswa/list.php';
        break;
    case 'mahasiswa_create':
        include 'mahasiswa/create.php';
        break;
    case 'mahasiswa_update':
        include 'mahasiswa/edit.php';
        break;
    case 'prodi':
        include 'prodi/list.php';
        break;
    case 'prodi_create':
        include 'prodi/create.php';
        break;
    case 'prodi_update':
        include 'prodi/edit.php';
        break;
    case 'profil_edit':
        include 'profil/editP.php';
        break;
    default:
        include 'home.php';
}
?>

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>