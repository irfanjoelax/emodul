<?php $this->load->view('backend/layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header bg-success py-3">
                    <h6 class="m-0 font-weight-bold text-white">Ubah Data Profil User</h6>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('login/profil/'.$this->session->userdata('idusr')) ?>" method="POST">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group row">
                                    <label for="txt_nama" class="col-sm-3 col-form-label">NIM</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control form-control-sm" id="txt_nim" name="txt_nim" value="<?php echo $this->session->userdata('nimusr') ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="txt_nama" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control form-control-sm" id="txt_nama" name="txt_nama" value="<?php echo $this->session->userdata('namausr') ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="txt_pass" class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control form-control-sm" id="txt_user" name="txt_user" value="<?php echo $this->session->userdata('userusr') ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="txt_pass" class="col-sm-3 col-form-label">Password Baru</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control form-control-sm" id="txt_pass" name="txt_pass">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group row">
                                    <label for="txt_pass" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control form-control-sm" id="txt_email" name="txt_email" value="<?php echo $this->session->userdata('emailusr') ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="txt_pass" class="col-sm-2 col-form-label">Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="txt_tlp" name="txt_tlp" value="<?php echo $this->session->userdata('tlpusr') ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="txt_pass" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea name="txt_almt" id="txt_almt" rows="1" class="form-control formcontrol-sm"><?php echo $this->session->userdata('almtusr') ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-2">
                                        <button type="submit" id="btn_save" class="btn btn-sm btn-primary"><i class="fas fa-check fa-sm"></i> &nbsp; Simpan Perubahan</button>
                                        <a href="<?php echo site_url('welcome/admin/home') ?>" class="btn btn-sm btn-warning"><i class="fas fa-reply fa-sm"></i> &nbsp; Batal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php $this->load->view('backend/layouts/footer') ?>
<script src="<?= base_url('backend/script/validasi_profil.js') ?>"></script>
</body>
</html>