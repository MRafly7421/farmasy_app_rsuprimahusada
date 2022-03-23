<?php
    session_start();
    
    if (!(isset($_SESSION['email'])) || $_SESSION['as'] != "user") {
        header("Location: ../");
    }

    include("../config/koneksi.php");

    $currentEmail = $_SESSION['email'];
    
    $dataUser = mysqli_query($koneksi, "select * from user where email = '$currentEmail'");
    $data = mysqli_fetch_array($dataUser);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User | Edit Profil</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="../css/main.css?<?php echo time(); ?>">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"></script>
</head>
<body>
    <header class="header">
        <div class="header__box">
            <div class="header__brand">
                <div class="d-flex justify-content-center">
                    <img src="../img/logo_rsu_primhus.png" alt="Logo Primhus" class="logo__primhus">
                </div>
                <div class="d-flex justify-content-center text-center">
                    <h1>Aplikasi Manajemen Obat</h1>
                </div>
            </div>
        </div>
    </header>

    <main class="m-edit-profil">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h1>EDIT PROFIL</h1>
            </div>
        </div>
        <form method="post" action="../controller/action_edit_profil.php" class="row g-3 justify-content-center">
            <div class="form-group col-10">
                <label class="signup__label" for="idUser">User ID</label>
                <input name="idUser" type="text" class="form-control" id="idUser" value="<?php echo $data['id_user']; ?>" readonly>
            </div>
            <div class="form-row col-10">
                <div class="form-group col-md-6">
                    <label class="signup__label" for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email" value="<?php echo $data['email']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label class="signup__label" for="password">Password</label>
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" id="password" value="<?php echo $data['password']; ?>">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent"><i style="cursor: pointer;" class="fa fa-eye-slash" id="togglePassword" onclick="togglePassword()"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group col-10">
                <label class="signup__label" for="nama">Nama Lengkap</label>
                <input name="nama" type="text" class="form-control" id="nama" value="<?php echo $data['nama_lengkap']; ?>">
            </div>
            <div class="form-group col-10">
                <label class="signup__label" for="alamat">Alamat</label>
                <input name="alamat" type="text" class="form-control" id="alamat" value="<?php echo $data['alamat']; ?>">
            </div>
            <div class="form-group col-10">
                <label class="signup__label" for="jenisKelamin">Jenis Kelamin</label>
                <input name="jenisKelamin" type="text" class="form-control" id="jenisKelamin" value="<?php echo $data['jenis_kelamin']; ?>">
            </div>
            <div class="form-row col-10">
                <div class="form-group col-md-6">
                    <label class="signup__label" for="tempatLahir">Tempat Lahir</label>
                    <input name="tempatLahir" type="text" class="form-control" id="tempatLahir" value="<?php echo $data['tempat_lahir']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label class="signup__label" for="tanggal">Tanggal Lahir</label>
                    <input name="tanggal" type="date" class="form-control" id="tanggal" value="<?php echo $data['tanggal_lahir']; ?>">
                </div>
            </div>
            <div class="form-group col-10">
                <label class="signup__label" for="noTelepon">No. Telepon</label>
                <input name="noTelepon" type="text" class="form-control" id="noTelepon" value="<?php echo $data['no_telepon']; ?>">
            </div>
            <div class="form-row col-10 d-flex justify-content-center">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="button" value="simpan">Simpan</button>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger" name="button" value="batal">Batal</button>
                </div>
            </div>
        </form>
    </main>

    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script>
        function togglePassword() {
            var password = document.getElementById("password");
            var togglePassword = document.getElementById("togglePassword");

            if (password.type === "password") {
                password.type = "text";
                password.autocomplete = "off";
                togglePassword.classList.toggle('fa-eye');
            } else {
                password.type = "password";
                togglePassword.classList.toggle('fa-eye-slash');
            }
        }
    </script>
</body>
</html>