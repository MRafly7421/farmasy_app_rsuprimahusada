<header class="header">
    <div class="header__box">
        <div class="header__brand">
            <div class="d-flex justify-content-center">
                <img src="<?= base_url('assets/img/logo_rsu_primhus.png') ?>" alt="Logo Primhus" class="logo__primhus">
            </div>
            <div class="d-flex justify-content-center text-center">
                <h1>Aplikasi Obat</h1>
            </div>
        </div>
    </div>
</header>

<main class="m-auto">
    <div class="align-self-center login__box">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h1 class="login__title">Login</h1>
            </div>
        </div>

        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <?= $this->session->flashdata('message'); ?>
            </div>
        </div>

        <form method="post" action="<?= base_url('auth'); ?>" class="row g-3 justify-content-center">
            <div class="form-group col-8">
                <div class="d-flex justify-content-center">
                    <label class="login__label" for="email">Email</label>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text border border-info bg-info text-light" id="basic-addon1"><i class="fa fa-user"></i></span>
                        </div>
                        <input name="email" type="email" class="form-control border border-info" id="email" placeholder="Email" value="<?= set_value("email"); ?>">
                    </div>
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group col-8">
                <div class="d-flex justify-content-center">
                    <label class="login__label" for="password">Password</label>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text border border-info bg-info text-light" id="basic-addon1"><i class="fa fa-key"></i></span>
                        </div>
                        <input name="password" type="password" class="form-control border border-info" id="password" placeholder="Password" value="<?= set_value("password"); ?>">
                        <div class="input-group-append">
                            <span class="input-group-text border border-info bg-transparent"><i style="cursor: pointer;" class="fa fa-eye-slash" id="togglePassword" onclick="togglePassword()"></i></span>
                        </div>
                    </div>
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="d-flex justify-content-center col-8">
                <p>Belum Punya Akun? <a href="<?= base_url('auth/registration') ?>" class="login__link">Daftar</a></p>
            </div>
            <div class="d-flex justify-content-center col-8 btn__login">
                <button type="submit" class="btn btn-success">Login</button>
            </div>
        </form>
    </div>
</main>
