<?php $this->load->view('backend/layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header bg-success py-3">
                    <h6 class="m-0 font-weight-bold text-white">Kompetensi / Tujuan / Bantuan</h6>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('pengaturan/jalankan/ubah/'.$pengaturan->idptr) ?>" method="POST">
                        <div class="form-group row">
                            <label for="txt_kmptnsi" class="col-sm-2 col-form-label">Kompetensi</label>
                            <div class="col-sm-10">
                                <textarea name="txt_kmptnsi" id="txt_kmptnsi" class="form-control form-control-sm "><?= $pengaturan->kmptnsiptr ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="txttjn" class="col-sm-2 col-form-label">Tujuan</label>
                            <div class="col-sm-10">
                                <textarea name="txt_tjn" id="txt_tjn" class="form-control form-control-sm "><?= $pengaturan->tjnptr ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="txt_bntn" class="col-sm-2 col-form-label">Bantuan</label>
                            <div class="col-sm-10">
                                <textarea name="txt_bntn" id="txt_bntn" class="form-control form-control-sm "><?= $pengaturan->bntnptr ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 offset-2">
                                <button type="submit" id="btn_save" class="btn btn-sm btn-primary"><i class="fas fa-check fa-sm"></i> &nbsp; Simpan Perubahan</button>
                                <a href="<?= site_url('admin/menu/materi') ?>" class="btn btn-sm btn-warning"><i class="fas fa-reply fa-sm"></i> &nbsp; Batal / Segarkan</a>
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
<script>
    var roxyFileman = '<?php echo base_url('backend/vendor/fileman/') ?>'; 

    $(document).ready(function () {

        CKEDITOR.replace( 'txt_kmptnsi',{
            filebrowserBrowseUrl:roxyFileman+'/index.html',
            filebrowserImageBrowseUrl:roxyFileman+'/index.html?type=image',
            removeDialogTabs: 'link:upload;image:upload'
        }); 

        CKEDITOR.replace( 'txt_tjn',{
            filebrowserBrowseUrl:roxyFileman+'/index.html',
            filebrowserImageBrowseUrl:roxyFileman+'/index.html?type=image',
            removeDialogTabs: 'link:upload;image:upload'
        }); 
        
        CKEDITOR.replace( 'txt_bntn',{
            filebrowserBrowseUrl:roxyFileman+'/index.html',
            filebrowserImageBrowseUrl:roxyFileman+'/index.html?type=image',
            removeDialogTabs: 'link:upload;image:upload'
        }); 

    });
</script>
</body></html>