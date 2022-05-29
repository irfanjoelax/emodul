<?php $this->load->view('frontend/layouts/header') ?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-warning text-white text-center">
                <strong><?= $materi->namamtr ?></strong>
            </div>
        </div>

        <ul class="list-group">
            <?php foreach ($submateri as $submtr): ?>
            <a href="<?= site_url('welcome/user/submateri-lihat/'.$submtr->idsubmtr) ?>"> 
                <li class="list-group-item"><?= $submtr->namasubmtr ?></li>
            </a>
            <?php endforeach; ?>
        </ul>
        
    </div>

<?php $this->load->view('frontend/layouts/footer') ?>
</body></html>