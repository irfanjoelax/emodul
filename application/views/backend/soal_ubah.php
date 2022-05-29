<?php $this->load->view('backend/layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow mb-4">
                        <div class="card-header bg-success py-3">
                            <h6 class="m-0 font-weight-bold text-white">Ubah Data soal</h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?= site_url('soal/jalankan/ubah/'.$soal->idsoal) ?>" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="txt_tny" class="col-sm-1 col-form-label">Soal</label>
                                            <div class="col-sm-11">
                                                <textarea name="txt_tny" id="txt_tny" class="form-control form-control-sm"><?= $soal->tnysoal ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <label for="txt_a" class="col-sm-3 col-form-label">Pilihan (a)</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="txt_a" id="txt_a" class="form-control form-control-sm" value="<?= $soal->asoal ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="txt_c" class="col-sm-3 col-form-label">Pilihan (c)</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="txt_c" id="txt_c" class="form-control form-control-sm" value="<?= $soal->csoal ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="txt_e" class="col-sm-3 col-form-label">Pilihan (e)</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="txt_e" id="txt_e" class="form-control form-control-sm" value="<?= $soal->esoal ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="txt_gmbr" class="col-sm-3 col-form-label">Gambar</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="txt_gmbr" id="txt_gmbr" class="form-control form-control-sm">
                                                <br>
                                                <img src="<?= base_url('backend/soal/'.$soal->gmbrsoal) ?>" alt="<?= $soal->gmbrsoal ?>" width="100" height="100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <label for="txt_b" class="col-sm-3 col-form-label">Pilihan (b)</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="txt_b" id="txt_b" class="form-control form-control-sm" value="<?= $soal->bsoal ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="txt_d" class="col-sm-3 col-form-label">Pilihan (d)</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="txt_d" id="txt_d" class="form-control form-control-sm" value="<?= $soal->dsoal ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="txt_knc" class="col-sm-3 col-form-label">Kunci Jawaban</label>
                                            <div class="col-sm-9">
                                                <select name="txt_knc" id="txt_knc" class="form-control form-control-sm">
                                                    <option value="a" <?= ($soal->kncsoal == "a") ? "selected" : "" ?>>Pilihan (a)</option>
                                                    <option value="b" <?= ($soal->kncsoal == "b") ? "selected" : "" ?>>Pilihan (b)</option>
                                                    <option value="c" <?= ($soal->kncsoal == "c") ? "selected" : "" ?>>Pilihan (c)</option>
                                                    <option value="d" <?= ($soal->kncsoal == "d") ? "selected" : "" ?>>Pilihan (d)</option>
                                                    <option value="e" <?= ($soal->kncsoal == "e") ? "selected" : "" ?>>Pilihan (e)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="txt_aktf" class="col-sm-3 col-form-label">Status</label>
                                            <div class="col-sm-9">
                                                <select name="txt_aktf" id="txt_aktf" class="form-control form-control-sm">
                                                    <option value="1" <?= ($soal->aktfsoal == 1) ? "selected" : "" ?>>Aktif</option>
                                                    <option value="2" <?= ($soal->aktfsoal == 2) ? "selected" : "" ?>>Tidak Aktif</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 offset-4">
                                        <button type="submit" id="btn_save" class="btn btn-sm btn-primary"><i class="fas fa-check fa-sm"></i> &nbsp; Simpan Perubahan</button>
                                        <a href="<?= site_url('welcome/admin/soal') ?>" class="btn btn-sm btn-warning"><i class="fas fa-reply fa-sm"></i> &nbsp; Batal</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php $this->load->view('backend/layouts/footer') ?>

</body>
</html>