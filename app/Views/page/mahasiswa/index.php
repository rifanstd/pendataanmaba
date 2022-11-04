<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">NIK</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Angkatan</th>
                        <th scope="col">Kurikulum</th>
                        <th scope="col">Status</th>
                        <th scope="col">Jalur Pendaftaran</th>
                        <th scope="col">Validasi</th>
                        <th scope="col">Prodi</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Fakultas</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mahasiswa as $mhs) : ?>
                        <tr>
                            <td scope="col"><?= $mhs['nama'] ?></td>
                            <td scope="col"><?= $mhs['nik'] ?></td>
                            <td scope="col"><?= $mhs['npm'] ?></td>
                            <td scope="col"><?= $mhs['angkatan'] ?></td>
                            <td scope="col"><?= $mhs['kurikulum'] ?></td>
                            <td scope="col"><?= $mhs['status'] ?></td>
                            <td scope="col"><?= $mhs['jalur_pendaftaran'] ?></td>
                            <td scope="col"><?= $mhs['validasi'] ?></td>
                            <td scope="col"><?= $mhs['nama_prodi'] ?></td>
                            <td scope="col"><?= $mhs['nama_jurusan'] ?></td>
                            <td scope="col"><?= $mhs['nama_fakultas'] ?></td>
                            <td scope="col" class="p-3">
                                <?php if ($mhs['validasi'] === 'Belum') : ?>
                                    <a href="/validasi/<?= $mhs['id'] ?>" class="btn btn-warning">Validasi</a>
                                <?php else : ?>
                                    <span class="btn btn-success mb-1">Sudah Tervalidasi</span>
                                    <a href="/validasi/<?= $mhs['id'] ?>" class="btn btn-warning">Ubah</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>