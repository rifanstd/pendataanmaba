<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/stisla/dist/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/stisla/dist/assets/modules/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/stisla/dist/assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="/stisla/dist/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/stisla/dist/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/stisla/dist/assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="/stisla/dist/assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="/stisla/dist/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/stisla/dist/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="/stisla/dist/assets/css/style.css">
    <link rel="stylesheet" href="/stisla/dist/assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <title>Dashboard</title>
</head>

<body>
    <!-- list side bar -->
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                    </ul>

                </form>
                <ul class="navbar-nav navbar-right">
                    <li class=""><a href="#" class="nav-link nav-link-lg nav-link-user">
                            <img alt="image" src="/stisla/dist/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="/"><?php if (in_groups('mahasiswa')) : ?>MAHASISWA<?php endif; ?><?php if (in_groups('superadmin')) : ?>SUPERADMIN<?php endif; ?><?php if (in_groups('admin')) : ?>ADMIN<?php endif; ?></a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="/"><?php if (in_groups('mahasiswa')) : ?>M<?php endif; ?><?php if (in_groups('superadmin')) : ?>S<?php endif; ?><?php if (in_groups('admin')) : ?>A<?php endif; ?></a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Starter</li>
                        <?php if (in_groups('mahasiswa')) : ?>
                            <li class="<?= ($title == "Informasi Data Anda") ? 'active' : '' ?>"><a class="nav-link" href="/mahasiswa/informasi_data_anda"><i class="far fa-square"></i> <span>Informasi Data Anda</span></a></li>
                            <li class="<?= ($title == "Biodata Anda") ? 'active' : '' ?>"><a class="nav-link" href="/mahasiswa/biodata"><i class="far fa-square"></i> <span>Biodata Anda</span></a></li>
                            <li class="<?= ($title == "Daftar Mahasiswa") ? 'active' : '' ?>"><a class="nav-link" href="Belum ada"><i class="far fa-square"></i> <span>Daftar Mahasiswa</span></a></li>
                        <?php endif; ?>
                        <?php if (in_groups('admin') || in_groups('superadmin')) : ?>
                            <li class="<?= ($title == "Data Mahasiswa") ? 'active' : '' ?>"><a class="nav-link" href="/data_mahasiswa"><i class="far fa-square"></i> <span>Data Mahasiswa</span></a></li>
                            <li class="<?= ($title == "Data Fakultas") ? 'active' : '' ?>"><a class="nav-link" href="/fakultas/index"><i class="far fa-square"></i> <span>Data Fakultas</span></a></li>
                            <li class="<?= ($title == "Data Jurusan") ? 'active' : '' ?>"><a class="nav-link" href="/jurusan/index"><i class="far fa-square"></i> <span>Data Jurusan</span></a></li>
                            <li class="<?= ($title == "Data Program Studi") ? 'active' : '' ?>"><a class="nav-link" href="/prodi/index"><i class="far fa-square"></i> <span>Data Program Studi</span></a></li>
                        <?php endif; ?>
                        <?php if (in_groups('superadmin')) : ?>
                            <li class="<?= ($title == "Admin") ? 'active' : '' ?>"><a class="nav-link" href="Belum ada"><i class="far fa-square"></i> <span>Admin</span></a></li>
                        <?php endif; ?>
                        <li><a class="nav-link" href="/logout"><i class="far fa-square"></i> <span>Logout</span></a></li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1><?= $title ?></h1>

                    </div>
                    <?= $this->renderSection('content'); ?>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2022 <div class="bullet"></div> Design By <a href="https://nauval.in/">SIMABA</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>


    <script src="/stisla/dist/assets/modules/jquery.min.js"></script>
    <script src="/stisla/dist/assets/modules/popper.js"></script>
    <script src="/stisla/dist/assets/modules/tooltip.js"></script>
    <script src="/stisla/dist/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="/stisla/dist/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="/stisla/dist/assets/modules/moment.min.js"></script>
    <script src="/stisla/dist/assets/js/stisla.js"></script>


    <!-- JS Libraies -->
    <script src="/stisla/dist/assets/modules/jquery.sparkline.min.js"></script>
    <script src="/stisla/dist/assets/modules/chart.min.js"></script>
    <script src="/stisla/dist/assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="/stisla/dist/assets/modules/summernote/summernote-bs4.js"></script>
    <script src="/stisla/dist/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="/stisla/dist/assets/js/page/index.js"></script>

    <!-- Template JS File -->
    <script src="/stisla/dist/assets/js/scripts.js"></script>
    <script src="/stisla/dist/assets/js/custom.js"></script>
    <script src="/stisla/dist/assets/modules/datatables/datatables.min.js"></script>
    <script src="/stisla/dist/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="/stisla/dist/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <script src="/stisla/dist/assets/modules/jquery-ui/jquery-ui.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="/stisla/dist/assets/js/page/modules-datatables.js"></script>

    <!-- Template JS File -->
    <script src="/stisla/dist/assets/js/scripts.js"></script>
    <script src="/stisla/dist/assets/js/custom.js"></script>
    <!-- <ul>
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
            <li><a>Admin</a></li>
        <?php endif; ?>
        <li><a href="/logout">Logout</a></li>
    </ul> -->
</body>

</html>