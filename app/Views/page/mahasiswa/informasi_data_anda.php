<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>
<<<<<<< HEAD
<p style="color: <?= ($mahasiswa['validasi'] === 'Belum' ? 'red' : 'green') ?>"><?= ($mahasiswa['validasi'] === 'Belum' ? 'Data Anda Belum di Validasi. Lengkapi data Anda agar segera di validasi oleh Admin. Jika data sudah lengkap mohon menunggu untuk divalidasi oleh Admin.' : 'Data Anda telah Tervalidasi') ?></p>
=======
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>
<div class="<?= ($mahasiswa['validasi'] === 'Belum' ? 'bg-danger' : 'bg-success') ?> h-25 p-3 mb-2 rounded" style="width: auto;">
    <p class="p-0 m-0"><span class="text-white align-middle fw-bold"><?= ($mahasiswa['validasi'] === 'Belum' ? 'Data Anda Belum di Validasi. Lengkapi data Anda agar segera di validasi oleh Admin. Jika data sudah lengkap mohon menunggu untuk divalidasi oleh Admin.' : 'Data Anda telah Tervalidasi') ?></span></p>
</div>
>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
<p>NPM : <?= $mahasiswa['npm'] ?></p>
<p>NIK : <?= $mahasiswa['nik'] ?></p>
<p>Nama : <?= $mahasiswa['nama'] ?></p>
<p>Angkatan : <?= $mahasiswa['angkatan']; ?></p>
<p>Kurikulum : <?= $mahasiswa['kurikulum'] ?></p>
<p>Status : <?= $mahasiswa['status'] ?></p>
<p>Jalur Pendaftaran : <?= $mahasiswa['jalur_pendaftaran'] ?></p>
<p>Program Studi : <?= (count($prodi) !== 0 ? $prodi[0]['nama_prodi'] : '') ?></p>
<p>Jurusan : <?= (count($jurusan) !== 0 ? $jurusan[0]['nama_jurusan'] : '') ?></p>
<p>Fakultas : <?= (count($fakultas) !== 0 ? $fakultas[0]['nama_fakultas'] : '') ?></p>
<<<<<<< HEAD
<a href="/mahasiswa/biodata/<?= $mahasiswa['id'] ?>">Lengkapi Biodata</a>
=======
<a href="/mahasiswa/edit_biodata/<?= $mahasiswa['id'] ?>" class="btn btn-success" <?= ($mahasiswa['validasi'] === 'Valid' ? 'hidden' : '') ?>>Lengkapi Biodata</a>
>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
<?= $this->endSection() ?>