<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>
<div class="card col-6 pb-5">

    <form action="/fakultas/update/<?= $fakultas[0]['id_fakultas'] ?>" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Fakultas</label>
<<<<<<< HEAD
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $fakultas[0]['nama_fakultas'] ?>">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
=======
            <input type="text" class="form-control <?= ($validation->hasError('nama') ? 'is-invalid' : ''); ?>" id="nama" name="nama" value="<?= (old('nama')) ? old('nama') : $fakultas[0]['nama_fakultas'] ?>">
        </div>
        <div>
            <p><?= $validation->getError('nama') ?></p>
        </div>
        <button type=" submit" class="btn btn-primary">Simpan</button>
>>>>>>> f0b96377d88efd856abeaa72c0c9b0e7dec34166
    </form>
</div>
<?= $this->endSection() ?>