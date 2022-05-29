<?php $this->load->view('frontend/layouts/header') ?>
    <div class="card">
        <div class="card-header bg-warning text-white text-center">
            <h4><strong>N I L A I</strong></h4>
        </div>
    </div>
    <form action="<?= site_url('soal/dihitung') ?>" method="post">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <h1><?= $score ?></h1>
                </div>
                Jumlah Soal : <?= $jumlah_soal ?><br>
                Benar : <?= $benar ?><br>
                Salah : <?= $salah ?><br>
                Kosong : <?= $kosong ?><br>
                Nilai Tertinggi : <?= $nilai_tertinggi ?><br>
                <hr>
                <div class="text-center">
                    <a href="<?= site_url('welcome/user/soal') ?>" class="btn btn-sm btn-warning"><i class="fas fa-reply fa-sm"></i> &nbsp; COBA LAGI</a>
                </div>
            </div>
        </div>
    </form>

<?php $this->load->view('frontend/layouts/footer') ?>
</body></html>