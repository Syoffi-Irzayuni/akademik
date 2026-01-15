<?php
require 'koneksi.php';
$email = $_SESSION['email'];

$query = $koneksi->query("SELECT * FROM pengguna WHERE email='$email'");
$data  = $query->fetch_assoc();
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">

    <div class="card shadow-sm border-0 p-4" style="max-width: 450px; width: 100%;">

        <h3 class="text-center mb-3 fw-bold text-warning">Edit Profil Pengguna</h3>

        <form action="proses.php" method="post">

            <div class="mb-3">
                <label class="form-label fw-bold">Email</label>
                <input type="email" class="form-control"
                    value="<?= $data['email'] ?>"
                    readonly>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control"
                    value="<?= $data['nama_lengkap'] ?>"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Password Baru</label>
                <input type="password" name="password" class="form-control" placeholder="Kosongkan jika tidak diganti">
            </div>

            <input type="hidden" name="email"
                value="<?= $data['email'] ?>">

            <div class="d-flex gap-2">
                <a href="index.php" class="btn btn-secondary">Batal</a>
                <button type="submit" name="profil_ubah" class="btn btn-warning text-dark fw-bold">Simpan
                    Perubahan</button>
            </div>

        </form>
    </div>

</div>