<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>
<form action="/prodi/save" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Prodi</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <label for="">Jurusan : </label>
    <select name="jurusan_id">
        <?php foreach ($jurusan as $jur) : ?>
            <option value="<?= $jur['id_jurusan'] ?>"><?= $jur['nama_jurusan'] ?></option>
        <?php endforeach; ?>
    </select>
    <br><br>
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