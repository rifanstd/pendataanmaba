<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>

<div class="card col-6 pb-5">
    <form action="/jurusan/save" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Jurusan</label>
            <input type="text" class="form-control" id="nama" name="nama">
            <label for="">Fakultas : </label>
            <select name="fakultas_id" class="form-control col-3">
                <?php foreach ($fakultas as $f) : ?>
                    <option value="<?= $f['id_fakultas'] ?>"><?= $f['nama_fakultas'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
<?= $this->endSection() ?>