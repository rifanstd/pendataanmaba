<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>
<p>Nama : <?= $mahasiswa['nama'] ?></p>
<p>NIK : <?= ($mahasiswa['nik'] !== NULL ? $mahasiswa['nik'] : 'Isi NIK Anda.') ?></p>
<p>NPM : <?= ($mahasiswa['npm'] !== NULL ? $mahasiswa['npm'] : 'Isi NPM Anda.') ?></p>
<p>Angkatan : <?= $mahasiswa['angkatan'] ?></p>
<p>Status Validasi : <span style="color: <?= ($mahasiswa['validasi'] === 'Valid' ? 'green' : 'red') ?>"><?= $mahasiswa['validasi'] ?></span></p>
<p>Program Studi : <?= (count($prodi) !== 0 ? $prodi[0]['nama_prodi'] : 'Isi Program Studi Anda') ?></p>
<p>Jurusan : <?= (count($jurusan) !== 0 ? $jurusan[0]['nama_jurusan'] : 'Isi Jurusan Anda') ?></p>
<p>Fakultas : <?= (count($fakultas) !== 0 ? $fakultas[0]['nama_fakultas'] : 'Isi Program Studi Anda') ?></p>

<?= $this->endSection() ?>