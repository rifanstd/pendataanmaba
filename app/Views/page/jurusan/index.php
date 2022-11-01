<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>
<a href="/jurusan/create">Tambah Data Jurusan</a>
<?php foreach ($jurusan as $jur) : ?>
    <p>ID : <?= $jur['id_jurusan'] ?></p>
    <p>Nama Jurusan : <?= $jur['nama_jurusan'] ?></p>
    <p>Nama Fakultas : <?= $jur['nama_fakultas'] ?></p>
    <a href="/jurusan/edit/<?= $jur['id_jurusan'] ?>/<?= $jur['id_fakultas'] ?>">Edit</a>
    <form action="/jurusan/delete/<?= $jur['id_jurusan'] ?>" method="post">
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="" onclick=" return confirm('Apakah anda yakin ingin menghapus data jurusan ini?');">Hapus</button>
    </form>
<?php endforeach; ?>
<?= $this->endSection() ?>