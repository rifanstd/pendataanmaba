<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>

<div class="section-body">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h4>Tabel Jurusan</h4>
                </div>
                <div class="col-2">
                    <a href="/jurusan/create" class="btn btn-outline-primary"><i class="bi bi-plus-lg"></i> Tambah Data Jurusan</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>NAMA JURUSAN</th>
                                    <th>NAMA FAKULTAS</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($jurusan as $jur) : ?>
                                    <tr>
                                        <td>
                                            <?= $jur['id_jurusan'] ?>
                                        </td>
                                        <td><?= $jur['nama_jurusan'] ?></td>
                                        <td><?= $jur['nama_fakultas'] ?></td>
                                        <td>
                                            <form action="/jurusan/delete/<?= $jur['id_jurusan'] ?>" method="post">
                                                <?= csrf_field() ?>
                                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" href="/jurusan/edit/<?= $jur['id_jurusan'] ?>/<?= $jur['id_fakultas'] ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="submit" class="btn btn-danger btn-delete" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>