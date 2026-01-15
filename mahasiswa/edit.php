<?php
require 'koneksi.php';

$nim = $_GET['nim'];
$query = "SELECT * FROM mahasiswa WHERE nim='$nim'";
$edit = $koneksi->query($query);
$data = $edit->fetch_assoc();

// ambil list prodi
$prodi = $koneksi->query("SELECT id, nama_prodi, jenjang FROM prodi");
?>

<h2 class="text-center mb-4 fw-bold text-warning">Edit Data Mahasiswa</h2>

<div class="card shadow-sm border-0 p-4">

    <form action="/pemrograman_web/akademik/proses.php" method="post">

        <div class="mb-3">
            <label for="nim" class="form-label fw-bold">NIM</label>
            <input type="text" class="form-control" id="nim"
                value="<?= $data['nim'] ?>"
                disabled>
        </div>

        <div class="mb-3">
            <label for="nama_mhs" class="form-label fw-bold">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama_mhs" name="nama_mhs"
                value="<?= $data['nama_mhs'] ?>"
                required>
        </div>

        <div class="mb-3">
            <label for="tgl_lahir" class="form-label fw-bold">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                value="<?= $data['tgl_lahir'] ?>"
                required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Program Studi</label>
            <select name="prodi_id" class="form-control" required>
                <option value="">-- Pilih Prodi --</option>

                <?php while ($p = mysqli_fetch_assoc($prodi)) : ?>
                <option value="<?= $p['id']; ?>"
                    <?= ($p['id'] == $data['prodi_id']) ? 'selected' : '' ?>>
                    <?= $p['nama_prodi']; ?>
                    (<?= $p['jenjang']; ?>)
                </option>
                <?php endwhile; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label fw-bold">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat"
                required><?= $data['alamat'] ?></textarea>
        </div>

        <div class="d-flex gap-2">
            <input type="hidden" name="nim"
                value="<?= $data['nim'] ?>">

            <button type="submit" name="mhs_ubah" class="btn btn-warning text-dark fw-bold">Update</button>

            <a href="index.php?page=mahasiswa" class="btn btn-primary fw-bold">Lihat Data</a>
        </div>

    </form>

</div>