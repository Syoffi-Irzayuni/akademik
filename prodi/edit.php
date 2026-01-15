<?php
require 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM prodi WHERE id='$id'";
$edit = $koneksi->query($query);
$data = $edit->fetch_assoc();
?>

<h2 class="text-center mb-4 fw-bold text-warning">Edit Program Studi</h2>

<div class="card shadow-sm border-0 p-4">

    <form action="proses.php" method="post">

        <div class="mb-3">
            <label for="nama_prodi" class="form-label fw-bold">Nama Program Studi</label>
            <input type="text" class="form-control" id="nama_prodi" name="nama_prodi"
                value="<?= $data['nama_prodi'] ?>"
                required>
        </div>

        <div class="mb-3">
            <label for="jenjang" class="form-label fw-bold">Jenjang</label>
            <select class="form-control" id="jenjang" name="jenjang" required>
                <option value="D2" <?= ($data['jenjang'] == 'D2') ? 'selected' : ''; ?>>D2
                </option>
                <option value="D3" <?= ($data['jenjang'] == 'D3') ? 'selected' : ''; ?>>D3
                </option>
                <option value="D4" <?= ($data['jenjang'] == 'D4') ? 'selected' : ''; ?>>D4
                </option>
                <option value="S2" <?= ($data['jenjang'] == 'S2') ? 'selected' : ''; ?>>S2
                </option>
            </select>
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label fw-bold">Keterangan</label>
            <textarea class="form-control" id="keterangan" rows="3"
                name="keterangan"><?= $data['keterangan'] ?></textarea>
        </div>

        <div class="d-flex gap-2">

            <input type="hidden" name="id"
                value="<?= $data['id'] ?>">

            <button type="submit" name="prodi_ubah" class="btn btn-warning text-dark fw-bold">
                Update
            </button>

            <a href="index.php?page=prodi" class="btn btn-primary fw-bold">
                Lihat Data
            </a>

        </div>

    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>