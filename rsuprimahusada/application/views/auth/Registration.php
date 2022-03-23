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
    <div class="align-self-center signup__box">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h1 class="signup__title">SIGN UP</h1>
            </div>
        </div>
        <form method="post" action="<?= base_url('auth/registration') ?>" class="row g-3 justify-content-center">
            <div class="form-row col-10">
                <div class="form-group col-md-6">
                    <label class="signup__label" for="email">Email</label>
                    <input name="email" type="email" class="form-control border border-info" id="email" placeholder="Email" value="<?= set_value("email"); ?>">
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group col-md-6">
                    <label class="signup__label" for="password">Password</label>
                    <div class="input-group">
                        <input name="password" type="password" class="form-control border border-info" id="password" placeholder="Password" value="<?= set_value("password"); ?>">
                        <div class="input-group-append">
                            <span class="input-group-text border border-info bg-transparent"><i style="cursor: pointer;" class="fa fa-eye-slash" id="togglePassword" onclick="togglePassword()"></i></span>
                        </div>
                    </div>
                    <small id="helpText" class="form-text text-muted">
                        Password Anda harus mempunyai lebih dari 8 karakter!
                    </small>
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-row col-10">
                <div class="form-group col-md-6">
                    <label class="signup__label" for="namaDepan">Nama Depan</label>
                    <input name="namaDepan" type="text" class="form-control border border-info" id="namaDepan" placeholder="Nama Depan" value="<?= set_value("namaDepan"); ?>">
                    <?= form_error('namaDepan', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group col-md-6">
                    <label class="signup__label" for="namaBelakang">Nama Belakang</label>
                    <input name="namaBelakang" type="text" class="form-control border border-info" id="namaBelakang" placeholder="Nama Belakang" value="<?= set_value("namaBelakang"); ?>">
                </div>
            </div>
            <div class="form-group col-10">
                <label class="signup__label" for="jenisKelamin">Jenis Kelamin</label>
                <select name="jenisKelamin" id="jenisKelamin" class="form-control custom-select">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <?= form_error('jenisKelamin', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group col-10">
                <label class="signup__label" for="agama">Agama</label>
                <input name="agama" type="text" class="form-control border border-info" id="agama" placeholder="Agama" value="<?= set_value("agama"); ?>">
                <?= form_error('agama', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-row col-10">
                <div class="form-group col-md-6">
                    <label class="signup__label" for="tempatLahir">Tempat Lahir</label>
                    <input name="tempatLahir" type="text" class="form-control border border-info" id="tempatLahir" placeholder="Tempat Lahir" value="<?= set_value("tempatLahir"); ?>">
                    <?= form_error('tempatLahir', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group col-md-6">
                    <label class="signup__label" for="tanggalLahir">Tanggal Lahir</label>
                    <input name="tanggalLahir" type="date" class="form-control border border-info" id="tanggalLahir" value="<?= set_value("tanggalLahir"); ?>">
                    <?= form_error('tanggalLahir', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group col-10">
                <label class="signup__label" for="alamat">Alamat</label>
                <input name="alamat" type="text" class="form-control border border-info" id="alamat" placeholder="Alamat" value="<?= set_value("alamat"); ?>">
                <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group col-10">
                <label class="signup__label" for="noTelepon">No. Telepon</label>
                <input name="noTelepon" type="text" class="form-control border border-info" id="noTelepon" placeholder="Nomor Telepon" value="<?= set_value("noTelepon"); ?>">
                <small id="helpText" class="form-text text-muted">
                    e.g. 08xxxxxxxxxx
                </small>
            </div>
            <div class="d-flex justify-content-center col-10">
                <p>Sudah Mempunyai Akun? <a href="<?= base_url(); ?>" class="signup__link">Masuk</a></p>
            </div>
            <div class="col-10 d-flex justify-content-center">
                <button type="submit" class="btn btn-danger" name="signup">Sign up</button>
            </div>

        </form>
    </div>
</main>