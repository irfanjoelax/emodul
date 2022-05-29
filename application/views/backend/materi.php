<?php $this->load->view('backend/layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    <div class="card shadow mb-4">
                        <div class="card-header bg-success py-3">
                            <h6 class="m-0 font-weight-bold text-white"><div id="title-header"></div></h6>
                        </div>
                        <div class="card-body">
                            <form id="form-materi">
                                <input type="hidden" name="txt_id" id="txt_id">
                                <div class="form-group row">
                                    <label for="txt_nama" class="col-sm-3 col-form-label">Nama Materi</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-sm" id="txt_nama" name="txt_nama" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-7 offset-3">
                                        <button type="submit" id="btn_save" class="btn btn-sm btn-primary"><i class="fas fa-check fa-sm"></i> &nbsp; Simpan Perubahan</button>
                                        <a href="<?= site_url('admin/menu/materi') ?>" class="btn btn-sm btn-warning"><i class="fas fa-reply fa-sm"></i> &nbsp; Batal / Segarkan</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header bg-secondary">
                    <h6 class="m-0 font-weight-bold text-white">
                        Data materi
                    </h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th width="5">No.</th>
                                <th width="80%">Nama materi</th>
                                <th width="100">Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php $this->load->view('backend/layouts/footer') ?>

<!-- custom javascript -->
<script>
    var method, site_url;

    $(document).ready(function () {

        $('#title-header').text('Tambah Data materi');
        method = "tambah";

        table = $('#dataTable').DataTable({
            "processing": true,
            "serverside": true,
            "ajax": {
                "url": "<?php echo site_url('materi/data') ?>",
                "type": "GET"
            }
        });

        // function ajax untuk menambahkan data
        $('#form-materi').submit(function (e) { 
            e.preventDefault();
            
            if (method == 'tambah') {
                site_url = "<?= site_url('materi/jalankan/tambah') ?>";
            } 
            else if(method == 'ubah') {
                id = $('#txt_id').val();
                site_url = "<?= site_url('materi/jalankan/ubah/') ?>"+id;
            }

            $.ajax({
                type: "POST",
                url: site_url,
                data: {
                    'txt_nama' : $('#txt_nama').val()
                },
                success: function (response) {
                    table.ajax.reload();

                    // reset input html
                    $('#txt_nama').val('');

                    // set autofocus
                    $('#txt_nama').focus();

                    // set method untuk tambah
                    method = "tambah";
                    $('#title-header').text('Tambah Data materi');
                },
                error: function(){
                    alert('data tidak dapat ditambah');
                }
            });
        });
    });

    // function untuk mengambil data untuk di edit
    function getData(id) {
        $.ajax({
            type: "GET",
            url: "<?php echo site_url('materi/aksi/ubah/') ?>"+id,
            dataType: "JSON",
            success: function (data) {
                method = "ubah";
                $('#title-header').text('Ubah Data materi');
                $('#txt_id').val(data.idmtr);
                $('#txt_nama').val(data.namamtr);
            },
            error: function(){
                alert('data tidak dapat diambil');
            }
        });
    }

    function deleteData(id) {
        if (confirm("Apakah Anda Yakin Ingin Menghapus Data ?")) {
            $.ajax({
                url: "<?php echo site_url('materi/jalankan/hapus/') ?>"+id,
                type: "POST",
                success: function(data){
                    table.ajax.reload();
                },
                error: function(){
                    alert('data tidak dapat menghapus');
                }
            });
        }
    }
</script>


</body>
</html>