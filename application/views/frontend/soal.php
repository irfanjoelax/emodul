<?php $this->load->view('frontend/layouts/header') ?>
    <div class="card">
        <div class="card-header bg-warning text-white text-center">
            <h4><strong>S O A L</strong></h4>
        </div>
    </div>
    <form action="<?= site_url('soal/dihitung') ?>" method="post">
        <?php
            $query  = $soal->result();
			$jumlah = $soal->num_rows();
            $no = 1;
            
            foreach($query as $data):
        ?>
        <input type="hidden" name="id[]" value="<?= $data->idsoal ?>">
        <input type="hidden" name="jumlah" value="<?= $jumlah ?>">
        <div class="container-fluid">
            <div class="row">
                <div class="text-justify mt-3">
            <strong><?= $no++ ?>.</strong> <?= $data->tnysoal ?>
            <?php if(!empty($data->gmbrsoal)): ?>
            <br>&nbsp; &nbsp; &nbsp;<img src="<?= base_url('backend/soal/'.$data->gmbrsoal) ?>" class="img-fluid" alt="Responsive image" width="200" height="200">
            <?php endif; ?>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pilihan[<?= $data->idsoal ?>]" value="a">
                <label class="form-check-label" for="exampleRadios1">
                    <?= $data->asoal ?>
                </label>
                <br>
                <input class="form-check-input" type="radio" name="pilihan[<?= $data->idsoal ?>]" value="b">
                <label class="form-check-label" for="exampleRadios1">
                    <?= $data->bsoal ?>
                </label>
                <br>
                <input class="form-check-input" type="radio" name="pilihan[<?= $data->idsoal ?>]" value="c">
                <label class="form-check-label" for="exampleRadios1">
                    <?= $data->csoal ?>
                </label>
                <br>
                <input class="form-check-input" type="radio" name="pilihan[<?= $data->idsoal ?>]" value="d">
                <label class="form-check-label" for="exampleRadios1">
                    <?= $data->dsoal ?>
                </label>
                <br>
                <input class="form-check-input" type="radio" name="pilihan[<?= $data->idsoal ?>]" value="e">
                <label class="form-check-label" for="exampleRadios1">
                    <?= $data->esoal ?>
                </label>
            </div>
            <!-- &nbsp; &nbsp; <input name="pilihan[<?= $data->idsoal ?>]" type="radio" value="a"> <?= $data->asoal ?> <br>
            &nbsp; &nbsp; <input name="pilihan[<?= $data->idsoal ?>]" type="radio" value="b"> <?= $data->bsoal ?> <br>
            &nbsp; &nbsp; <input name="pilihan[<?= $data->idsoal ?>]" type="radio" value="c"> <?= $data->csoal ?> <br>
            &nbsp; &nbsp; <input name="pilihan[<?= $data->idsoal ?>]" type="radio" value="d"> <?= $data->dsoal ?> <br>
            &nbsp; &nbsp; <input name="pilihan[<?= $data->idsoal ?>]" type="radio" value="e"> <?= $data->esoal ?> <br> -->
        </div>
            </div>
        </div>
        
        <?php endforeach; ?>
        <div class="text-center mt-3">
            <button type="submit" onclick="return confirm('Apakah Anda Yakin Dengan Jawaban Anda?')" class="btn btn-md btn-warning"><i class="fas fa-check fa-sm"></i> &nbsp; SUBMIT</button>
        </div>
    </form>

<?php $this->load->view('frontend/layouts/footer') ?>
</body></html>