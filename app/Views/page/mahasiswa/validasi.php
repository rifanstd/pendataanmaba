<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>

<div class="card col-6 pb-5">
    <form action="/validasi/save_validasi/<?= $mahasiswa[0]['id'] ?>" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control mb-2" id="nama" name="nama" value="<?= $mahasiswa[0]['nama'] ?>" readonly>
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control mb-2" id="nik" name="nik" value="<?= $mahasiswa[0]['nik'] ?>" readonly>
            <label for="npm" class="form-label">Nomor Pokok Mahasiswa</label>
            <input type="number" class="form-control mb-2" id="npm" name="npm" value="<?= $mahasiswa[0]['npm'] ?>" readonly>
            <label for="angkatan" class="form-label">Angakatan</label>
            <input type="number" class="form-control mb-2" id="angkatan" name="angkatan" value="<?= $mahasiswa[0]['angkatan'] ?>" readonly>
            <label for="kurikulum" class="form-label">Kurikulum</label>
            <input type="number" class="form-control mb-2" id="kurikulum" name="kurikulum" value="<?= $mahasiswa[0]['kurikulum'] ?>">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-select mb-2">
                <?php if ($mahasiswa[0]['status'] === null) : ?>
                    <option selected>Status Belum Di Atur</option>
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                <?php else : ?>
                    <option value="Aktif" <?= ($mahasiswa[0]['status'] === 'Aktif' ? 'selected' : ''); ?>>Aktif</option>
                    <option value="Tidak Aktif" <?= ($mahasiswa[0]['status'] === 'Tidak Aktif' ? 'selected' : ''); ?>>Tidak Aktif</option>
                <?php endif ?>
            </select>
            <label for="status" class="form-label">Jalur Pendaftaran</label>
            <select name="jalur_pendaftaran" class="form-select mb-2">
                <?php if ($mahasiswa[0]['jalur_pendaftaran'] === null) : ?>
                    <option selected>Jalur Pendaftaran Belum Di Atur</option>
                    <option value="SBMPTN">SBMPTN</option>
                    <option value="SNMPTN">SNMPTN</option>
                    <option value="SMMPTN BARAT">SMMPTN BARAT</option>
                <?php else : ?>
                    <option value="SBMPTN" <?= ($mahasiswa[0]['jalur_pendaftaran'] === 'SBMPTN' ? 'selected' : ''); ?>>SBMPTN</option>
                    <option value="SNMPTN" <?= ($mahasiswa[0]['jalur_pendaftaran'] === 'SNMPTN' ? 'selected' : ''); ?>>SNMPTN</option>
                    <option value="SMMPTN BARAT" <?= ($mahasiswa[0]['jalur_pendaftaran'] === 'SMMPTN BARAT' ? 'selected' : ''); ?>>SMMPTN BARAT</option>
                <?php endif ?>
            </select>
            <label for="prodi_id" class="form-label">Program Studi</label>
            <input type="text" class="form-control mb-2" id="prodi_id" placeholder="<?= $mahasiswa[0]['nama_prodi'] ?>" readonly>
            <input type="hidden" class="form-control mb-2" id="prodi_id" name="prodi_id" value="<?= $mahasiswa[0]['prodi_id'] ?>">
            <label for="jurusan_id" class="form-label">Jurusan</label>
            <input type="text" class="form-control mb-2" id="jurusan_id" placeholder="<?= $mahasiswa[0]['nama_jurusan'] ?>" readonly>
            <input type="hidden" class="form-control mb-2" id="jurusan_id" name="jurusan_id" value="<?= $mahasiswa[0]['jurusan_id'] ?>">
            <label for="fakultas_id" class="form-label">Fakultas</label>
            <input type="text" class="form-control mb-2" id="fakultas_id" placeholder="<?= $mahasiswa[0]['nama_fakultas'] ?>" readonly>
            <input type="hidden" class="form-control mb-2" id="fakultas_id" name="fakultas_id" value="<?= $mahasiswa[0]['fakultas_id'] ?>">
            <button type="submit" class="btn btn-primary mt-2">Validasi</button>
    </form>
</div>
<?= $this->endSection() ?>