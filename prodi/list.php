<h2 class="text-center mb-4 fw-bold text-warning">List Program Studi</h2>

<a href="index.php?page=prodi_create" class="btn btn-warning mb-3 text-dark fw-bold">
    Tambah Data
</a>

<div class="table-responsive">
    <table class="table table-hover align-middle shadow-sm">
        <thead class="table-warning">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Jenjang</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
                require 'koneksi.php';
            $tampil = $koneksi->query("SELECT * FROM prodi");
            $no = 1;

            while ($data = $tampil->fetch_assoc()) {
                ?>
            <tr>
                <td><?= $no ?></td>

                <td><?= $data['nama_prodi'] ?>
                </td>

                <td><?= $data['jenjang'] ?></td>

                <td><?= $data['keterangan'] ?>
                </td>

                <td>
                    <a href="index.php?page=prodi_update&id=<?= $data['id'] ?>"
                        class="btn btn-warning btn-sm text-dark">
                        Edit
                    </a>

                    <a href="proses.php?prodi_hapus=<?= $data['id'] ?>"
                        class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?');">
                        Hapus
                    </a>
                </td>
            </tr>
            <?php
                    $no++;
            }
            ?>
        </tbody>
    </table>
</div>