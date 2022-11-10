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
                    <tr class="text-center">
                        <th>ID Admin</th>
                        <th>NAMA ADMIN</th>
                        <th>ROLE</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($admin as $a) : ?>
                        <tr class="text-center">
                            <td>
                                <?= $a['id_admin'] ?>
                            </td>
                            <td><?= $a['nama'] ?></td>
                            <td><?= $a['name'] ?></td>
                            <td>
                                <?php if ($a['name'] !== 'superadmin' && in_groups('superadmin')) : ?>
                                    <form action="/admin/delete/<?= $a['id_user'] ?>" method="post">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="submit" class="btn btn-danger btn-delete" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');"><i class="bi bi-trash"></i></button>
                                    </form>
                                <?php else : ?>
                                    Data Superadmin tidak bisa dihapus !!!
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>