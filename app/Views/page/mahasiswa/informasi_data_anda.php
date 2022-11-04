<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>
<p style="color: <?= ($mahasiswa['validasi'] === 'Belum' ? 'red' : 'green') ?>"><?= ($mahasiswa['validasi'] === 'Belum' ? 'Data Anda Belum di Validasi. Lengkapi data Anda agar segera di validasi oleh Admin. Jika data sudah lengkap mohon menunggu untuk divalidasi oleh Admin.' : 'Data Anda telah Tervalidasi') ?></p>
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
<a href="/mahasiswa/edit_biodata/<?= $mahasiswa['id'] ?>" class="btn btn-success">Lengkapi Biodata</a>
<?= $this->endSection() ?>