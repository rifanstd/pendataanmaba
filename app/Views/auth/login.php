<?= $this->extend('auth/layout') ?>
<?= $this->section('main') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class="card">
                <h2 class="card-header text-center"><?= $title ?></h2>
                <div class="card-body">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= url_to('login') ?>" method="post">
                        <?= csrf_field() ?>
                        <?php if ($config->validFields === ['email']) : ?>
                            <div class="form-group">
                                <label for="login">Email</label>
                                <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="Email">
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="form-group">
                                <label for="login">Email atau Username</label>
                                <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="Email atau Username">
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="Password">
                            <div class="invalid-feedback">
                                <?= session('errors.password') ?>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                    </form>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <?php if ($config->allowRegistration) : ?>
                                <p><a href="<?= url_to('register') ?>">Buat Akun</a></p>
                            <?php endif; ?>
                        </div>
                        <div class="col text-right">
                            <?php if ($config->activeResetter) : ?>
                                <p><a href="<?= url_to('forgot') ?>">Lupa Password</a></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        </div>
                        <div class="col text-right">
                            <p><a target="_blank" href="https://drive.google.com/file/d/11xIk3CuwhfxIDSFopHVEdJjMENgyK-bE/view?usp=share_link">Akun Admin Test</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>