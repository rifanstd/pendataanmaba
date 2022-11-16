<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>
<div class="card col-6 pb-5">
    <form action="/prodi/save" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Prodi</label>
<<<<<<< HEAD
            <input type="text" class="form-control" id="nama" name="nama">
=======
            <input type="text" class="form-control <?= ($validation->hasError('nama') ? 'is-invalid' : ''); ?>" id="nama" name="nama" value="<?= old('nama') ?>">
            <div>
                <p><?= $validation->getError('nama') ?></p>
            </div>
>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
            <label for="">Jurusan : </label>
            <select name="jurusan_id" class="form-control">
                <?php foreach ($jurusan as $jur) : ?>
                    <option value="<?= $jur['id_jurusan'] ?>"><?= $jur['nama_jurusan'] ?></option>
                <?php endforeach; ?>
            </select>
            <label for="">Fakultas : </label>
            <select name="fakultas_id" class="form-control">
                <?php foreach ($fakultas as $f) : ?>
                    <option value="<?= $f['id_fakultas'] ?>"><?= $f['nama_fakultas'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
<?= $this->endSection() ?>