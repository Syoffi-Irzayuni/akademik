<h2 class="text-center mb-4 fw-bold text-warning">List Data Mahasiswa</h2>

<a href="index.php?page=mahasiswa_create" class="btn btn-warning mb-3 text-dark fw-bold">
    Tambah Data
</a>

<div class="table-responsive">
    <table class="table table-hover align-middle shadow-sm">
        <thead class="table-warning">
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
                require 'koneksi.php';
            $tampil = $koneksi->query("SELECT m.nim, m.nama_mhs, m.tgl_lahir, m.alamat, p.nama_prodi, p.jenjang FROM mahasiswa m LEFT JOIN prodi p ON m.prodi_id = p.id");

            $no = 1;

            while ($data = mysqli_fetch_assoc($tampil)) {
                ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $data['nim'] ?></td>
                <td><?= $data['nama_mhs'] ?></td>
                <td><?= $data['tgl_lahir'] ?>
                </td>
                <td><?= $data['nama_prodi'] ?>
                </td>
                <td><?= $data['alamat'] ?></td>
                <td>

                    <a href="index.php?page=mahasiswa_update&nim=<?= $data['nim'] ?>"
                        class="btn btn-warning btn-sm text-dark">
                        Edit
                    </a>

                    <a href="proses.php?mhs_hapus=<?= $data['nim'] ?>"
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