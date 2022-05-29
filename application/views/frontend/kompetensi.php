<?php $this->load->view('frontend/layouts/header') ?>
    <div class="container-fluid">
        <div class="card border-success mb-3">
            <div class="card-header bg-warning text-white"><strong>Kompetensi</strong></div>
            <div class="card-body text-success text-justify">
                <?= $pengaturan->kmptnsiptr ?>
            </div>
        </div>
        <div class="card border-success mb-3">
            <div class="card-header bg-warning text-white"><strong>Tujuan</strong></div>
            <div class="card-body text-success text-justify">
                <?= $pengaturan->tjnptr ?>
            </div>
        </div>
    </div>

<?php $this->load->view('frontend/layouts/footer') ?>
</body></html>