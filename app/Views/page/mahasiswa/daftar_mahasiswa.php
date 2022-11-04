<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Angkatan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Prodi</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Fakultas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mahasiswa as $mhs) : ?>
                        <tr>
                            <td scope="col"><?= $mhs['nama'] ?></td>
                            <td scope="col"><?= $mhs['npm'] ?></td>
                            <td scope="col"><?= $mhs['angkatan'] ?></td>
                            <td scope="col"><?= $mhs['status'] ?></td>
                            <td scope="col"><?= $mhs['nama_prodi'] ?></td>
                            <td scope="col"><?= $mhs['nama_jurusan'] ?></td>
                            <td scope="col"><?= $mhs['nama_fakultas'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>