<?php $this->load->view('backend/layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow mb-4">
                        <div class="card-header bg-success py-3">
                            <h6 class="m-0 font-weight-bold text-white">Tambah Data soal</h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?= site_url('soal/jalankan/tambah') ?>" enctype="multipart/form-data">
                                <input type="hidden" name="txt_id" id="txt_id">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="txt_tny" class="col-sm-1 col-form-label">Soal</label>
                                            <div class="col-sm-11">
                                                <textarea name="txt_tny" id="txt_tny" class="form-control form-control-sm"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <label for="txt_a" class="col-sm-3 col-form-label">Pilihan (a)</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="txt_a" id="txt_a" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="txt_c" class="col-sm-3 col-form-label">Pilihan (c)</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="txt_c" id="txt_c" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="txt_e" class="col-sm-3 col-form-label">Pilihan (e)</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="txt_e" id="txt_e" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="txt_gmbr" class="col-sm-3 col-form-label">Gambar</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="txt_gmbr" id="txt_gmbr" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <label for="txt_b" class="col-sm-3 col-form-label">Pilihan (b)</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="txt_b" id="txt_b" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="txt_d" class="col-sm-3 col-form-label">Pilihan (d)</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="txt_d" id="txt_d" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="txt_knc" class="col-sm-3 col-form-label">Kunci Jawaban</label>
                                            <div class="col-sm-9">
                                                <select name="txt_knc" id="txt_knc" class="form-control form-control-sm">
                                                    <option value=""></option>
                                                    <option value="a">Pilihan (a)</option>
                                                    <option value="b">Pilihan (b)</option>
                                                    <option value="c">Pilihan (c)</option>
                                                    <option value="d">Pilihan (d)</option>
                                                    <option value="e">Pilihan (e)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="txt_aktf" class="col-sm-3 col-form-label">Status</label>
                                            <div class="col-sm-9">
                                                <select name="txt_aktf" id="txt_aktf" class="form-control form-control-sm">
                                                    <option value="1">Aktif</option>
                                                    <option value="2">Tidak Aktif</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 offset-4">
                                        <button type="submit" id="btn_save" class="btn btn-sm btn-primary"><i class="fas fa-check fa-sm"></i> &nbsp; Simpan Perubahan</button>
                                        <button type="reset" class="btn btn-sm btn-danger"><i class="fas fa-recycle fa-sm"></i> &nbsp; Hapus Perubahan</button>
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

<!-- custom javascript -->
<script src="<?= base_url('backend/script/validasi_tambah_soal.js') ?>"></script>

</body>
</html>