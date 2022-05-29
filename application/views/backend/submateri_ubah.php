<?php $this->load->view('backend/layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow mb-4">
                        <div class="card-header bg-success py-3">
                            <h6 class="m-0 font-weight-bold text-white">Ubah Data Submateri</h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?= site_url('submateri/jalankan/ubah/'.$submateri->idsubmtr) ?>">
                                <input type="hidden" name="txt_id" id="txt_id">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-group row">
                                            <label for="txt_nama" class="col-sm-3 col-form-label">Nama Submateri</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control form-control-sm" id="txt_nama" name="txt_nama" value="<?= $submateri->namasubmtr ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group row">
                                            <label for="txt_mtr" class="col-sm-3 col-form-label">Materi</label>
                                            <div class="col-sm-9">
                                                <select name="txt_mtr" id="txt_mtr" class="form-control form-control-sm">
                                                    <option value=""></option>
                                                    <?php foreach ($materi as $mtri): ?> 
                                                    <option <?php if($mtri->idmtr == $submateri->mtrid) echo "selected" ?> value="<?= $mtri->idmtr ?>"><?= $mtri->namamtr ?>
                                                    </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="txt_isi" class="col-sm-2 col-form-label">Isi Materi</label>
                                    <div class="col-sm-10">
                                        <textarea name="txt_isi" id="txt_isi" class="form-control form-control-sm"><?= $submateri->isisubmtr ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-2">
                                        <button type="submit" id="btn_save" class="btn btn-sm btn-primary"><i class="fas fa-check fa-sm"></i> &nbsp; Simpan Perubahan</button>
                                        <a href="<?= site_url('welcome/admin/submateri') ?>" class="btn btn-sm btn-warning"><i class="fas fa-reply fa-sm"></i> &nbsp; Batal</a>
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
<script>
    var roxyFileman = '<?php echo base_url('backend/vendor/fileman/') ?>'; 

    $(document).ready(function () {

        CKEDITOR.replace( 'txt_isi',{
                filebrowserBrowseUrl:roxyFileman+'/index.html',
                filebrowserImageBrowseUrl:roxyFileman+'/index.html?type=image',
                removeDialogTabs: 'link:upload;image:upload'
        }); 

    });
</script>


</body>
</html>