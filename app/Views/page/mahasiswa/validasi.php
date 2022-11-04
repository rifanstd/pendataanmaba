<?= $this->extend('page/dashboard') ?>

<?= $this->section('content') ?>

<div class="card col-6 pb-5">
    <form action="/validasi/save" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control mb-2" id="nama" name="nama" value="<?= $mahasiswa[0]['nama'] ?>" readonly>
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control mb-2" id="nik" name="nik" value="<?= $mahasiswa[0]['nik'] ?>" readonly>
            <label for="npm" class="form-label">Nomor Pokok Mahasiswa</label>
            <input type="number" class="form-control mb-2" id="npm" name="npm" value="<?= $mahasiswa[0]['npm'] ?>">
            <label for="angkatan" class="form-label">Angakatan</label>
            <input type="number" class="form-control mb-2" id="angkatan" name="angkatan" value="<?= $mahasiswa[0]['angkatan'] ?>" readonly>
            <label for="kurikulum" class="form-label">Kurikulum</label>
            <input type="number" class="form-control mb-2" id="kurikulum" name="kurikulum" value="<?= $mahasiswa[0]['kurikulum'] ?>">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-select mb-2">
                <option value="<?= $mahasiswa[0]['status'] ?>" selected></option>
                <option value="Aktif">Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
            </select>
            <label for="status" class="form-label">Jalur Pendaftaran</label>
            <select name="jalur_pendaftaran" class="form-select mb-2">
                <option value="<?= $mahasiswa[0]['jalur_pendaftaran'] ?>" selected></option>
                <option value="SBMPTN">SBMPTN</option>
                <option value="SNMPTN">SNMPTN</option>
                <option value="SMMPTN BARAT">SMMPTN BARAT</option>
            </select>
            <label for="prodi_id" class="form-label">Program Studi</label>
            <input type="text" class="form-control mb-2" id="prodi_id" name="prodi_id" value="<?= $mahasiswa[0]['nama_prodi'] ?>" readonly>
            <label for="jurusan_id" class="form-label">Jurusan</label>
            <input type="text" class="form-control mb-2" id="jurusan_id" name="jurusan_id" value="<?= $mahasiswa[0]['nama_jurusan'] ?>" readonly>
            <label for="fakultas_id" class="form-label">Fakultas</label>
            <input type="text" class="form-control mb-2" id="fakultas_id" name="fakultas_id" value="<?= $mahasiswa[0]['nama_fakultas'] ?>" readonly>
            <button type="submit" class="btn btn-primary mt-2">Validasi</button>
    </form>
</div>
<?= $this->endSection() ?>