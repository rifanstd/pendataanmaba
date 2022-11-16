<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>

<div class="card col-6 pb-5">
    <form action="/prodi/update/<?= $prodi[0]['id_prodi'] ?>" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Prodi</label>
<<<<<<< HEAD
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $prodi[0]['nama_prodi'] ?>">
            <label for="">Jurusan : </label>
            <select name="jurusan_id" class="form-control">
                <?php foreach ($all_jurusan as $jur) : ?>
                    <option value="<?= $jur['id_jurusan'] ?>" <?php
                                                                if ($jur['nama_jurusan'] == $jurusan[0]['nama_jurusan']) {
                                                                    echo "selected";
                                                                } ?>><?= $jur['nama_jurusan'] ?></option>
=======
            <input type="text" class="form-control <?= ($validation->hasError('nama') ? 'is-invalid' : ''); ?>" id="nama" name="nama" value="<?= (old('nama')) ? old('nama') : $prodi[0]['nama_prodi'] ?>">
            <div>
                <p><?= $validation->getError('nama') ?></p>
            </div>
            <label for="">Jurusan : </label>
            <select name="jurusan_id" class="form-control">
                <?php foreach ($all_jurusan as $jur) : ?>
                    <option value="<?= $jur['id_jurusan'] ?>" <?= ($jur['nama_jurusan'] == $jurusan[0]['nama_jurusan']) ? "selected" : "" ?>><?= $jur['nama_jurusan'] ?></option>
>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
                <?php endforeach; ?>
            </select>
            <label for="">Fakultas : </label>
            <select name="fakultas_id" class="form-control">
<<<<<<< HEAD
            <option value="<?= $fakultas[0]['id_fakultas'] ?>"><?= $fakultas[0]['nama_fakultas'] ?></option>
            <?php foreach ($all_fakultas as $f) : ?>
                <option value="<?= $f['id_fakultas'] ?>"><?= $f['nama_fakultas'] ?></option>
            <?php endforeach; ?>
        </select>
=======
                <option value="<?= $fakultas[0]['id_fakultas'] ?>"><?= $fakultas[0]['nama_fakultas'] ?></option>
                <?php foreach ($all_fakultas as $f) : ?>
                    <option value="<?= $f['id_fakultas'] ?>"><?= $f['nama_fakultas'] ?></option>
                <?php endforeach; ?>
            </select>
>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?= $this->endSection() ?>