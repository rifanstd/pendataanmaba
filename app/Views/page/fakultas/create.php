<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>
<div class="card col-6 pb-5">

    <form action="/fakultas/save" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Fakultas</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
<?= $this->endSection() ?>