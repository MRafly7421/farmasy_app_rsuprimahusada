<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <img src="<?= base_url('assets'); ?>/img/logo_rsu_primhus.png" alt="Logo Primhus" height="50px">
        </div>

        <ul class="list-unstyled components">
            <!-- <p>Dummy Heading</p> -->
            <li class="active">
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

        <p style="font-weight: bold; font-size: 20px;">Dashboard</p>

        <h2>Collapsible Sidebar Using Bootstrap 4</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="line"></div>

        <h2>Lorem Ipsum Dolor</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="line"></div>

        <h2>Lorem Ipsum Dolor</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="line"></div>

        <h3>Lorem Ipsum Dolor</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>