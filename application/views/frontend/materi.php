<?php $this->load->view('frontend/layouts/header') ?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-warning text-white text-center">
                <strong>M A T E R I</strong>
            </div>
        </div>

        <?php foreach ($materi as $mtr): ?>
        <a href="<?= site_url('welcome/user/submateri/'.$mtr->idmtr) ?>">
            <div class="card mt-2 mb-2" id="btn-materi<?= $mtr->idmtr ?>">
                <div class="card-body">
                    <h6 class="card-title">
                        <?= $mtr->namamtr ?>
                    </h6>
                </div>
            </div>
        </a>
        <?php endforeach; ?>
    </div>

<?php $this->load->view('frontend/layouts/footer') ?>
</body></html>