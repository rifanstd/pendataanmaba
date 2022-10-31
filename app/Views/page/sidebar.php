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
        <?php if (in_groups('mahasiswa')) : ?>
            <li><a href="/">Data Anda</a></li>
            <li>Daftar Mahasiswa</li>
        <?php endif; ?>
        <?php if (in_groups('admin') || in_groups('superadmin')) : ?>
            <li>Data Mahasiswa</li>
            <li>Data Fakultas</li>
            <li>Data Jurusan</li>
            <li>Data Program Studi</li>
        <?php endif; ?>
        <?php if (in_groups('superadmin')) : ?>
            <li>Data Admin</li>
        <?php endif; ?>
        <li>Logout</li>
    </ul>
</body>

</html>