<?php
require 'koneksi.php';
$prodi = $koneksi->query("SELECT id, nama_prodi, jenjang FROM prodi");
?>

<h2 class="text-center mb-4 fw-bold text-warning">Input Data Mahasiswa</h2>

<div class="card shadow-sm border-0 p-4">

    <form action="/pemrograman_web/akademik/proses.php" method="post">

        <div class="mb-3">
            <label for="nim" class="form-label fw-bold">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" required>
        </div>

        <div class="mb-3">
            <label for="nama_mhs" class="form-label fw-bold">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" required>
        </div>

        <div class="mb-3">
            <label for="tgl_lahir" class="form-label fw-bold">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Program Studi</label>
            <select name="prodi_id" class="form-control" required>
                <option value="">-- Pilih Prodi --</option>
                <?php while ($p = mysqli_fetch_assoc($prodi)) : ?>
                <option value="<?= $p['id']; ?>">
                    <?= $p['nama_prodi']; ?>
                    (<?= $p['jenjang']; ?>)
                </option>
                <?php endwhile; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label fw-bold">Alamat</label>
            <textarea class="form-control" rows="3" name="alamat" required></textarea>
        </div>

        <div class="d-flex gap-2 mt-3">
            <button type="submit" name="mhs_submit" class="btn btn-warning text-dark fw-bold">Simpan</button>

            <button type="reset" class="btn btn-danger fw-bold">Reset</button>

            <a href="index.php?page=mahasiswa" class="btn btn-primary fw-bold">Lihat Data Mahasiswa</a>
        </div>

    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>