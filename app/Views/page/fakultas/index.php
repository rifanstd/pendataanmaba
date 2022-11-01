<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>
<a href="/fakultas/create">Tambah Data Fakultas</a>
<?php foreach ($fakultas as $f) : ?>
    <p>ID : <?= $f['id_fakultas'] ?></p>
    <p>Nama Fakultas : <?= $f['nama_fakultas'] ?></p>
    <a href="/fakultas/edit/<?= $f['id_fakultas'] ?>">Edit</a>
    <form action="/fakultas/delete/<?= $f['id_fakultas'] ?>" method="post">
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="" onclick=" return confirm('Apakah anda yakin ingin menghapus data fakultas ini?');">Hapus</button>
    </form>
<?php endforeach ?>
<?= $this->endSection() ?>