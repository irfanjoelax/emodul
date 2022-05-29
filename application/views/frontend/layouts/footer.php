<!-- footer navbar -->
    <nav class="navbar fixed-bottom navbar-light bg-success">
        <a class="navbar-text text-white" href="#"><?= TITLE_BAR.' &copy; '.date('Y') ?></a>
        <?php
            $class      = $this->uri->segment(1);
            $function   = $this->uri->segment(2);
            $param      = $this->uri->segment(3);
            
            if ($class != 'welcome' || $function != 'user' || $param != 'home'):
        ?>
        <div class="float-right">
            <button onclick="goBack()" class="btn btn-outline-light"><i class="fa fa-reply"></i></button>
        </div>
        <?php endif; ?>
    </nav>
    <!-- footer navbar -->
    
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                </div>
                <div class="modal-body">Apakah Anda Yakin Ingin Keluar ?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-success" href="<?= site_url('login/logout') ?>">Setuju</a>
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

    <script>
        $(document).ready(function () {
            $('.btn-home').click(function (e) { 
                e.preventDefault();
                window.location.href = "<?= site_url('welcome/user/home') ?>";
            });

            $('.btn-profil').click(function (e) { 
                e.preventDefault();
                window.location.href = "<?= site_url('welcome/user/profil') ?>";
            });
        });

        function goBack() {
            window.history.back();
        }
    </script>
