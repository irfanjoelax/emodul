<?php $this->load->view('frontend/layouts/header') ?>
        <div class="card">
            <div class="card-header bg-warning text-white text-center">
                <strong><?= $submateri->namasubmtr ?></strong>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <?= $submateri->isisubmtr ?>
            </div>
        </div>

<?php $this->load->view('frontend/layouts/footer') ?>
</body></html>