<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>
<div class="card col-6 pb-5">

<form action="/jurusan/update/<?= $jurusan[0]['id_jurusan'] ?>" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Jurusan</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $jurusan[0]['nama_jurusan'] ?>">
    </div>
    <div class="mb-3">
        <label for="">Fakultas : </label>
        <select name="fakultas_id" class="form-control col-3">>
            <?php foreach ($all_fakultas as $f) : ?>
                
                <option value="<?= $f['id_fakultas'] ?>" 
                <?php
                if($f['nama_fakultas']==$fakultas[0]['nama_fakultas']) {
                    echo "selected";
                }
                ?> ><?= $f['nama_fakultas'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>

<?= $this->endSection() ?>