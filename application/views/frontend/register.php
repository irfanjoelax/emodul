<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= TITLE_BAR ?></title>

    <link rel="shortcut icon" href="<?= base_url('ci-icon.png') ?>" type="image/x-icon">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('backend/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('backend/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body class="bg-success">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">
                                            DAFTAR <br>
                                            <?= TITLE_BAR ?>
                                        </h1>
                                    </div>
                                    <form class="user" action="<?= site_url('login/daftar') ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="txt_nama" id="txt_nama" placeholder="Nama Lengkap">
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" name="txt_nim" id="txt_nim" placeholder="NIM">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control form-control-user" name="txt_user" id="txt_user" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control form-control-user" name="txt_pass1" id="txt_pass1" placeholder="Password">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" class="form-control form-control-user" name="txt_pass2" id="txt_pass2" placeholder="Ulang Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="email" class="form-control form-control-user" name="txt_email" id="txt_email" placeholder="Email">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" class="form-control form-control-user" name="txt_tlp" id="txt_tlp" placeholder="Telepon">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="txt_almt" id="txt_almt" placeholder="Alamat">
                                        </div>
                                        <button type="submit" id="btn_save" class="btn btn-warning btn-user btn-block"><i class="fa fa-lock"></i> &nbsp; D A F T A R</button>
                                        <br>
                                        <div class="text-center">
                                            <a class="small" href="<?= site_url('login') ?>">Sudah Punya Akun ? Login</a>
                                        </div>
                                    </form>
                                    <!-- <hr> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('backend/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('backend/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('backend/js/sb-admin-2.min.js') ?>"></script>

    <!-- custom script dev -->
    <script src="<?= base_url('backend/script/validasi_register.js') ?>"></script>
</body>

</html>