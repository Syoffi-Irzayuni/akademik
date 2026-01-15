<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center vh-100">

        <div class="card shadow border-0 p-4" style="max-width: 420px; width: 100%;">

            <div class="text-center mb-3">
                <img src="images/logo.png" width="60" class="rounded-circle mb-2">
                <h3 class="fw-bold text-warning">Login Akademik</h3>
            </div>

            <form action="" method="post">

                <div class="mb-3">
                    <label class="form-label fw-bold">Email</label>
                    <input name="email" type="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Password</label>
                    <input name="password" type="password" class="form-control" required>
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Ingat saya</label>
                </div>

                <button type="submit" class="btn btn-warning text-dark fw-bold w-100">
                    Login
                </button>

            </form>

            <div class="mt-3 text-center text-danger fw-bold">
                <?php
                if (isset($_POST['email'])) {
                    $email = $_POST['email'];
                    $pass = md5($_POST['password']);

                    require 'koneksi.php';
                    $ceklogin = "SELECT * FROM pengguna WHERE email='$email' AND password='$pass'";
                    $result = $koneksi->query($ceklogin);

                    if ($result->num_rows > 0) {
                        session_start();
                        $_SESSION['login'] = true;
                        $_SESSION['email'] = $email;
                        header("Location: index.php");
                    } else {
                        echo "Email atau Password salah!";
                    }
                }
                ?>
            </div>

        </div>
    </div>

</body>

</html>