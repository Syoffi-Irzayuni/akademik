<h2 class="text-center mb-4 fw-bold text-warning">Input Program Studi</h2>

<div class="card shadow-sm border-0 p-4">

    <form action="/pemrograman_web/akademik/proses.php" method="post">

        <div class="mb-3">
            <label for="nama_prodi" class="form-label fw-bold">Nama Program Studi</label>
            <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" required>
        </div>

        <div class="mb-3">
            <label for="jenjang" class="form-label fw-bold">Jenjang</label>
            <select class="form-control" id="jenjang" name="jenjang" required>
                <option value="">-- Pilih Jenjang --</option>
                <option value="D2">D2</option>
                <option value="D3">D3</option>
                <option value="D4">D4</option>
                <option value="S2">S2</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label fw-bold">Keterangan</label>
            <textarea class="form-control" rows="3" name="keterangan"></textarea>
        </div>

        <div class="d-flex gap-2">

            <button type="submit" name="prodi_submit" class="btn btn-warning text-dark fw-bold">
                Simpan
            </button>

            <button type="reset" class="btn btn-danger fw-bold">
                Reset
            </button>

            <a href="index.php?page=prodi" class="btn btn-primary fw-bold">
                Lihat Data
            </a>

        </div>

    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
