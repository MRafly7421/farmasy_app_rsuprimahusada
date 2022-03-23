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
            <li class="active">
                <a id="a" href="#sisaObatSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"><i class="fas fa-notes-medical"></i>&nbsp&nbsp&nbspSisa Obat</a>
                <ul class="collapse list-unstyled show" id="sisaObatSubmenu">
                    <li>
                        <a id="a" href="<?= base_url('admin/sisa_obat/tambah_obat'); ?>">Tambah Data Obat</a>
                    </li>
                    <li class="active">
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
                    <?php
                    echo $admin['nama'];
                    ?>
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right bg-light shadow" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item menu__account__link" href="<?= base_url('admin/register_admin'); ?>"><i class="fas fa-user-plus"></i></i>&nbsp&nbsp&nbspTambah Admin</a>
                    <a class="dropdown-item menu__account__link logout__link" href="<?= base_url('auth/logout'); ?>"><i class="fas fa-sign-out-alt"></i>&nbsp&nbsp&nbsp&nbspLogout</a>
                </div>

            </div>
        </nav>

        <p style="font-weight: bold; font-size: 20px;">Data Sisa Obat</p>

        <div class="table__box">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Kode Obat</th>
                        <th scope="col">Nama Obat</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Satuan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope='row'>1</th>
                        <td>A000111</td>
                        <td>Paracetamol</td>
                        <td>Rp 1000</td>
                        <td>100</td>
                        <td>Box</td>
                        <td>
                            <form action='' method='post'>
                                <button class='btn btn-primary' name='buttonEdit' value=''>
                                    Edit
                                </button>
                                <button class='btn btn-danger' name='buttonHapus' value=''>
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th scope='row'>2</th>
                        <td>A000222</td>
                        <td>Kapsida</td>
                        <td>Rp 500</td>
                        <td></td>
                        <td></td>
                        <td>
                            <form action='' method='post'>
                                <button class='btn btn-primary' name='buttonEdit' value=''>
                                    Edit
                                </button>
                                <button class='btn btn-danger' name='buttonHapus' value=''>
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button class="btn btn-primary" onclick="window.location.reload();">Refresh</button>
    </div>
</div>