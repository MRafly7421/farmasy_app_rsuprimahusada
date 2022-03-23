<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <img src="<?= base_url('assets'); ?>/img/logo_rsu_primhus.png" alt="Logo Primhus" height="50px">
        </div>

        <ul class="list-unstyled components">
            <!-- <p>Dummy Heading</p> -->
            <li>
                <a id="a" href="<?= base_url('admin'); ?>"><i class="fas fa-tachometer-alt"></i>&nbsp&nbsp&nbspDashboard</a>
            </li>
            <hr class="md-2">
            <li>
                <a id="a" href="#obatMasukSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-reply"></i>&nbsp&nbsp&nbspObat Masuk</a>
                <ul class="collapse list-unstyled" id="obatMasukSubmenu">
                    <li>
                        <a id="a" href="<?= base_url('admin/obat_masuk/tambah_obat_masuk'); ?>">Tambah Data Obat Masuk</a>
                    </li>
                    <li>
                        <a id="a" href="<?= base_url('admin/obat_masuk/cek_obat_masuk'); ?>">Cek Data Obat Masuk</a>
                    </li>
                </ul>
            </li>
            <hr class="md-2">
            <li>
                <a id="a" href="#sisaObatSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-notes-medical"></i>&nbsp&nbsp&nbspSisa Obat</a>
                <ul class="collapse list-unstyled" id="sisaObatSubmenu">
                    <li>
                        <a id="a" href="<?= base_url('admin/sisa_obat/tambah_obat'); ?>">Tambah Data Obat</a>
                    </li>
                    <li>
                        <a id="a" href="<?= base_url('admin/sisa_obat/cek_sisa_obat'); ?>">Cek Sisa Obat</a>
                    </li>
                </ul>
            </li>
            <hr class="md-2">
            <li>
                <a id="a" href="#obatKeluarSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-share"></i>&nbsp&nbsp&nbspObat Keluar</a>
                <ul class="collapse list-unstyled" id="obatKeluarSubmenu">
                    <li>
                        <a id="a" href="<?= base_url('admin/obat_keluar/tambah_obat_keluar'); ?>">Tambah Data Obat Keluar</a>
                    </li>
                    <li>
                        <a id="a" href="<?= base_url('admin//obat_keluar/cek_obat_keluar'); ?>">Cek Data Obat Keluar</a>
                    </li>
                </ul>
            </li>
            <hr class="md-2">
        </ul>
    </nav>

    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-justify"></i>
                </button>

                <button class="btn btn-outline-info" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?= $admin['nama']; ?>
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right bg-light shadow" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item menu__account__link" href="<?= base_url('admin/register_admin'); ?>"><i class="fas fa-user-plus"></i></i>&nbsp&nbsp&nbspTambah Admin</a>
                    <a class="dropdown-item menu__account__link logout__link" href="<?= base_url('auth/logout'); ?>"><i class="fas fa-sign-out-alt"></i>&nbsp&nbsp&nbsp&nbspLogout</a>
                </div>

            </div>
        </nav>

        <p style="font-weight: bold; font-size: 20px;">Tambahkan Admin</p>

        <form method="post" action="<?= base_url('admin/register_admin'); ?>" class="row g-3 container-fluid">
            <div class="col-md-8">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Email" value="<?= set_value("email"); ?>">
                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="col-md-8 mt-3">
                <label for="password">Password</label>
                <div class="input-group">
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password" value="<?= set_value("password"); ?>">
                    <div class="input-group-append">
                        <span class="input-group-text bg-transparent"><i style="cursor: pointer;" class="fa fa-eye-slash" id="togglePassword" onclick="togglePassword()"></i></span>
                    </div>
                </div>
                <small id="passwordHelpBlock" class="form-text text-muted">
                    Password Anda harus mempunyai lebih dari 3 karakter!
                </small>
                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="col-md-8 mt-3">
                <label for="nama">Nama</label>
                <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama" value="<?= set_value("nama"); ?>">
                <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="col-md-8 mt-3">
                <button type="submit" class="btn btn-success" name="button" value="simpan">Tambah</button>
            </div>
        </form>
    </div>
</div>