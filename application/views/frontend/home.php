<?php $this->load->view('frontend/layouts/header') ?>

    <!-- konten aplikasi -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="h5 mb-0 font-weight-bold text-gray-800 btn-kompetensi">Kompetensi</div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-check fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="h5 mb-0 font-weight-bold text-gray-800 btn-materi">Materi</div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="h5 mb-0 font-weight-bold text-gray-800 btn-soal">Soal</div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-question fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="h5 mb-0 font-weight-bold text-gray-800 btn-bantuan">Bantuan</div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-exclamation fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- konten aplikasi -->

<?php $this->load->view('frontend/layouts/footer') ?>
<script>
    $(document).ready(function () {
        $('.btn-kompetensi').click(function (e) { 
            e.preventDefault();
            window.location.href = "<?= site_url('welcome/user/kompetensi') ?>";
        });

        $('.btn-materi').click(function (e) { 
            e.preventDefault();
            window.location.href = "<?= site_url('welcome/user/materi') ?>";
        });

        $('.btn-soal').click(function (e) { 
            e.preventDefault();
            window.location.href = "<?= site_url('welcome/user/soal') ?>";
        });

        $('.btn-bantuan').click(function (e) { 
            e.preventDefault();
            window.location.href = "<?= site_url('welcome/user/bantuan') ?>";
        });

    });
</script>
</body></html>