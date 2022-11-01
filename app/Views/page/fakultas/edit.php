<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>
<form action="/fakultas/update/<?= $fakultas[0]['id_fakultas'] ?>" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Fakultas</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $fakultas[0]['nama_fakultas'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<?= $this->endSection() ?>