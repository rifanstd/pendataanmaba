<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>
<div class="card">
    <div class="card-header">
        <h4>Tabel Admin</h4>
    </div>
    <div class="col-2">
        <a href="/admin/create_admin" class="btn btn-outline-primary"><i class="bi bi-plus-lg"></i> Tambah Data Admin</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="table-1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAMA ADMIN</th>
                        <th>ROLE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($admin as $a) : ?>
                        <tr>
                            <td>
                                <?= $a['id'] ?>
                            </td>
                            <td><?= $a['nama'] ?></td>
                            <td><?= $a['name'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>