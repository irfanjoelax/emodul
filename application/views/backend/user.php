<?php $this->load->view('backend/layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header bg-success">
                    <h6 class="m-0 font-weight-bold text-white">
                        Data User/Pelajar
                    </h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th width="5">No.</th>
                                <th width="35%">Nama Lengkap</th>
                                <th width="25%">Username</th>
                                <th width="10%">Nilai</th>
                                <th width="70">Aksi</th>
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

    <!-- modal untuk melihat data -->
    <div class="modal fade" id="modal-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><div id="txt_nama"></div></h5>
                </div>
                <div class="modal-body">
                    <p><div id="txt_nama2"></div></p>
                    <p><div id="txt_user"></div></p>
                    <p><div id="txt_email"></div></p>
                    <p><div id="txt_tlp"></div></p>
                    <p><div id="txt_almt"></div></p>
                    <p><div id="txt_nli"></div></p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fas fa-times fa-sm"></i> &nbsp; Tutup</button>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view('backend/layouts/footer') ?>

<!-- custom javascript -->
<script>
    $(document).ready(function () {
        table = $('#dataTable').DataTable({
            "processing": true,
            "serverside": true,
            "ajax": {
                "url": "<?php echo site_url('user/data') ?>",
                "type": "GET"
            }
        });
    });

    function getData(id) { 
        $.ajax({
            type: "GET",
            url: "<?= site_url('user/jalankan/lihat/') ?>"+id,
            dataType: "JSON",
            success: function (data) {
                $('#modal-user').modal('show');
                $('#txt_nama').text(data.namausr);
                $('#txt_nama2').html('Nama Lengkap : <strong>'+data.namausr+'</strong>');
                $('#txt_user').html('Username : <strong>'+data.userusr+'</strong>');
                $('#txt_email').html('Email : <strong>'+data.emailusr+'</strong>');
                $('#txt_tlp').html('Nomer Telepon : <strong>'+data.tlpusr+'</strong>');
                $('#txt_almt').html('Alamat : <strong>'+data.almtusr+'</strong>');
                $('#txt_nli').html('Nilai : <strong>'+data.nliusr+'</strong>');
            },
            error: function(){
                alert('data tidak dapat dilihat');
            }
        });
    }

    function deleteData(id) {
        if (confirm("Apakah Anda Yakin Ingin Menghapus Data ?")) {
            $.ajax({
                url: "<?php echo site_url('user/jalankan/hapus/') ?>"+id,
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