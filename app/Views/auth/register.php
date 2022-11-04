<?= $this->extend('auth/layout') ?>
<?= $this->section('main') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            <div class="card">
                <h2 class="card-header text-center">Daftar Akun SIMABA</h2>
                <div class="card-body">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= url_to('register') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control <?php if (session('errors.nama')) : ?>is-invalid<?php endif ?>" name="nama" placeholder="Nama Lengkap" value="<?= old('nama') ?>">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="Email" value="<?= old('email') ?>">
                            <small id="emailHelp" class="form-text">Note : Masukkan email aktif Anda !!!</small>
                        </div>

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="Username" value="<?= old('username') ?>">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="Password" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="pass_confirm">Confirm Password</label>
                            <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="Confirm Password" autocomplete="off">
                            <small id="emailHelp" class="form-text">Note : Masukkan konfirmasi password yang sama dengan password Anda !!!</small>
                        </div>

                        <br>

                        <!-- untuk grup role -->
                        <input type="hidden" value="mahasiswa" name="group_id">

                        <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.register') ?></button>
                    </form>


                    <hr>

                    <p class="text-center">Sudah punya akun? <a href="<?= url_to('login') ?>">Masuk</a></p>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>