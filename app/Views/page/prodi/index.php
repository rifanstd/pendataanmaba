<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>
<a href="/prodi/create">Tambah Data Program Studi</a>
<?php foreach ($prodi as $pro) : ?>
    <p>ID : <?= $pro['id_prodi'] ?></p>
    <p>Nama Program Studi : <?= $pro['nama_prodi'] ?></p>
    <p>Nama Jurusan : <?= $pro['nama_jurusan'] ?></p>
    <p>Nama Fakultas : <?= $pro['nama_fakultas'] ?></p>
    <a href="/prodi/edit/<?= $pro['id_prodi'] ?>/<?= $pro['id_jurusan'] ?>/<?= $pro['id_fakultas'] ?>">Edit</a>
    <form action="/prodi/delete/<?= $pro['id_prodi'] ?>" method="post">
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="" onclick=" return confirm('Apakah anda yakin ingin menghapus data Program Studi ini?');">Hapus</button>
    </form>
<?php endforeach; ?>
<?= $this->endSection() ?>