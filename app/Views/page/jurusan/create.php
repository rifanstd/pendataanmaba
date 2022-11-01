<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>
<form action="/jurusan/save" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Jurusan</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <label for="">Fakultas : </label>
    <select name="fakultas_id">
        <?php foreach ($fakultas as $f) : ?>
            <option value="<?= $f['id_fakultas'] ?>"><?= $f['nama_fakultas'] ?></option>
        <?php endforeach; ?>
    </select>
    <br><br>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
<?= $this->endSection() ?>