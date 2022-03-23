<?php
    if($user['jenis_kelamin'] == "Laki-laki") {
        $img = "user-default-man.png";
    } else {
        $img = "user-default-woman.png";
    }
?>

<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <img src="<?= base_url('assets'); ?>/img/logo_rsu_primhus.png" alt="Logo Primhus" height="50px">
        </div>

        <ul class="list-unstyled components">
            <!-- <p>Dummy Heading</p> -->
            <li class="active">
                <a id="a" href="<?= base_url('user'); ?>"><i class="fa fa-user"></i>&nbsp&nbsp&nbspProfil</a>
            </li>
            <li>
                <a id="a" href="data_obat.php"><i class="fas fa-briefcase-medical"></i>&nbsp&nbsp&nbspData Obat</a>
            </li>
            <li>
                <a id="a" href="riwayat.php"><i class="fas fa-history"></i>&nbsp&nbsp&nbspRiwayat</a>
            </li>
        </ul>
    </nav>

    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-justify"></i>
                </button>

                <button class="btn btn-outline-info" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?= $user['nama_lengkap']; ?>
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right bg-light shadow" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item menu__account__link" href="#"><i class="fas fa-user-edit"></i>&nbsp&nbsp&nbspEdit Profile</a>
                    <a class="dropdown-item menu__account__link logout__link" href="<?= base_url('auth/logout'); ?>"><i class="fas fa-sign-out-alt"></i>&nbsp&nbsp&nbspLogout</a>
                </div>

            </div>
        </nav>

        <p style="font-weight: bold; font-size: 20px;">Profil Saya</p>

        <div class="card user-card-full">
            <div class="row m-l-0 m-r-0">
                <div class="col-sm-4 bg-c-lite-green user-profile">
                    <div class="card-block text-center text-white">
                        <div class="m-b-25"> <img src="<?= base_url('assets/img/') . $img ?>?<?= time(); ?>" class="img-radius" alt="User-Profile-Image"> </div>
                        <h5 class="f-w-600"><?= $user['nama_lengkap']; ?></h5>
                        <p><?= $user['email']; ?></p>
                        <a style="text-decoration: none; color: #fff;" href="#"><i class="fa fa-edit"></i></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Alamat</p>
                                <h6 class="text-muted f-w-400"><?= $user['alamat']; ?></h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">No. Telepon</p>
                                <h6 class="text-muted f-w-400"><?= $user['no_telepon']; ?></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Agama</p>
                                <h6 class="text-muted f-w-400"><?= $user['agama']; ?></h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Jenis Kelamin</p>
                                <h6 class="text-muted f-w-400"><?= $user['jenis_kelamin']; ?></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Tempat Lahir</p>
                                <h6 class="text-muted f-w-400"><?= $user['tempat_lahir']; ?></h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Tanggal Lahir</p>
                                <h6 class="text-muted f-w-400"><?= $user['tanggal_lahir']; ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>