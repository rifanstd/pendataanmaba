<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>
<div class="card col-6 pb-5">
    <form action="/mahasiswa/update/<?= $mahasiswa['id'] ?>" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control mb-2" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control mb-2 <?= ($validation->hasError('nik') ? 'is-invalid' : ''); ?>" id="nik" name="nik" value="<?= (old('nik')) ? old('nik') : $mahasiswa['nik'] ?>">
            <div>
                <p><?= $validation->getError('nik') ?></p>
            </div>
            <label for="npm" class="form-label">Nomor Pokok Mahasiswa</label>
            <input type="number" class="form-control mb-2 <?= ($validation->hasError('npm') ? 'is-invalid' : ''); ?>" id="npm" name="npm" value="<?= (old('npm')) ? old('npm') : $mahasiswa['npm'] ?>">
            <div>
                <p><?= $validation->getError('npm') ?></p>
            </div>
            <label for="angkatan" class="form-label mt-2">Angakatan</label>
            <input type="number" class="form-control mb-2" id="angkatan" name="angkatan" value="<?= $mahasiswa['angkatan'] ?>" readonly>
            <label for="kurikulum" class="form-label">Kurikulum</label>
            <input type="number" class="form-control mb-2" id="kurikulum" name="kurikulum" value="<?= $mahasiswa['kurikulum'] ?>" readonly>
            <small class="form-text text-muted">Note : Kurikulum di Inputkan oleh Admin</small>
            <label for="validasi" class="form-label mt-2">Status Validasi</label>
            <input type="text" class="form-control mb-2" id="validasi" name="validasi" value="<?= $mahasiswa['validasi'] ?>" readonly>
            <small class="form-text text-muted">Note : Validasi di Inputkan oleh Admin</small>
            <label for="" class="mt-2">Program Studi</label>
            <select name="prodi_id" class="form-select">
                <?php foreach ($all_prodi as $prodi) : ?>
                    <option value="<?= $prodi['id_prodi'] ?>"><?= $prodi['nama_prodi'] ?></option>
                <?php endforeach; ?>
            </select>
            <label for="" class="mt-2">Jurusan</label>
            <select name="jurusan_id" class="form-select">
                <?php foreach ($all_jurusan as $jurusan) : ?>
                    <option value="<?= $jurusan['id_jurusan'] ?>"><?= $jurusan['nama_jurusan'] ?></option>
                <?php endforeach; ?>
            </select>
            <label for="" class="mt-2">Fakultas</label>
            <select name="fakultas_id" class="form-select">
                <?php foreach ($all_fakultas as $fakultas) : ?>
                    <option value="<?= $fakultas['id_fakultas'] ?>"><?= $fakultas['nama_fakultas'] ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
<?= $this->endSection() ?>