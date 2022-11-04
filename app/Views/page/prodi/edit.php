<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>

<div class="card col-6 pb-5">
    <form action="/prodi/update/<?= $prodi[0]['id_prodi'] ?>" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Prodi</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $prodi[0]['nama_prodi'] ?>">
            <label for="">Jurusan : </label>
            <select name="jurusan_id" class="form-control">
                <?php foreach ($all_jurusan as $jur) : ?>
                    <option value="<?= $jur['id_jurusan'] ?>" <?php
                                                                if ($jur['nama_jurusan'] == $jurusan[0]['nama_jurusan']) {
                                                                    echo "selected";
                                                                } ?>><?= $jur['nama_jurusan'] ?></option>
                <?php endforeach; ?>
            </select>
            <label for="">Fakultas : </label>
            <select name="fakultas_id" class="form-control">
            <option value="<?= $fakultas[0]['id_fakultas'] ?>"><?= $fakultas[0]['nama_fakultas'] ?></option>
            <?php foreach ($all_fakultas as $f) : ?>
                <option value="<?= $f['id_fakultas'] ?>"><?= $f['nama_fakultas'] ?></option>
            <?php endforeach; ?>
        </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?= $this->endSection() ?>