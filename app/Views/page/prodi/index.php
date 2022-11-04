<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>

<div class="section-body">

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h4>Tabel Program Studi</h4>
                </div>
                <div class="col-2">
                    <a href="/prodi/create" class="btn btn-outline-primary"><i class="bi bi-plus-lg"></i> Tambah Data Program Studi</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>NAMA PROGRAM STUDI</th>
                                    <th>NAMA JURUSAN</th>
                                    <th>NAMA FAKULTAS</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($prodi as $pro) : ?>
                                    <tr>
                                        <td>
                                            <?= $pro['id_prodi'] ?>
                                        </td>
                                        <td><?= $pro['nama_prodi'] ?></td>
                                        <td><?= $pro['nama_jurusan'] ?></td>
                                        <td><?= $pro['nama_fakultas'] ?></td>
                                        <td>
                                            <form action="/prodi/delete/<?= $pro['id_prodi'] ?>" method="post">
                                                <?= csrf_field() ?>
                                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" href="/prodi/edit/<?= $pro['id_prodi'] ?>/<?= $pro['id_jurusan'] ?>/<?= $pro['id_fakultas'] ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="submit" class="btn btn-danger btn-delete"><i class="bi bi-trash"></i></button>
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