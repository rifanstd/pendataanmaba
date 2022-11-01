<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>
<form action="/jurusan/update/<?= $jurusan[0]['id_jurusan'] ?>" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Jurusan</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $jurusan[0]['nama_jurusan'] ?>">
    </div>
    <div class="mb-3">
        <label for="">Fakultas : </label>
        <select name="fakultas_id">
            <option value="<?= $fakultas[0]['id_fakultas'] ?>"><?= $fakultas[0]['nama_fakultas'] ?></option>
            <?php foreach ($all_fakultas as $f) : ?>
                <option value="<?= $f['id_fakultas'] ?>"><?= $f['nama_fakultas'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<?= $this->endSection() ?>