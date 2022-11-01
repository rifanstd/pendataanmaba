<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>
<form action="/prodi/update/<?= $prodi[0]['id_prodi'] ?>" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Prodi</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $prodi[0]['nama_prodi'] ?>">
    </div>
    <label for="">Jurusan : </label>
    <div class="mb-3">
        <select name="jurusan_id">
            <option value="<?= $jurusan[0]['id_jurusan'] ?>"><?= $jurusan[0]['nama_jurusan'] ?></option>
            <?php foreach ($all_jurusan as $jur) : ?>
                <option value="<?= $jur['id_jurusan'] ?>"><?= $jur['nama_jurusan'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <label for="">Fakultas : </label>
    <div class="mb-3">
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