<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <!-- list side bar -->
    <ul>
        <li><a href="/">Welcome</a></li>
        <?php if (in_groups('mahasiswa')) : ?>
            <li><a href="/mahasiswa/informasi_data_anda">Informasi Data Anda</a></li>
            <li><a href="/mahasiswa/biodata">Biodata Anda</a></li>
            <li>Daftar Mahasiswa</li>
        <?php endif; ?>
        <?php if (in_groups('admin') || in_groups('superadmin')) : ?>
            <li><a href="/data_mahasiswa">Data Mahasiswa</a></li>
            <li><a href="/fakultas/index">Data Fakultas</a></li>
            <li><a href="/jurusan/index">Data Jurusan</a></li>
            <li><a href="/prodi/index">Data Program Studi</a></li>
        <?php endif; ?>
        <?php if (in_groups('superadmin')) : ?>
            <li>Data Admin</li>
        <?php endif; ?>
        <li>Logout</li>
    </ul>
</body>

</html>