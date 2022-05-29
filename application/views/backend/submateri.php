<?php $this->load->view('backend/layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header bg-success">
                    <h6 class="m-0 font-weight-bold text-white">
                        Data Submateri
                        <a href="<?= site_url('welcome/admin/submateri-tambah') ?>" class="btn btn-sm btn-primary float-right"><i class="fas fa-plus fa-sm"></i> &nbsp; Tambah</a>
                    </h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th width="5">No.</th>
                                <th width="45%">Nama submateri</th>
                                <th width="25%">Materi</th>
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

<?php $this->load->view('backend/layouts/footer') ?>

<!-- custom javascript -->
<script>
    $(document).ready(function () {
        table = $('#dataTable').DataTable({
            "processing": true,
            "serverside": true,
            "ajax": {
                "url": "<?php echo site_url('submateri/data') ?>",
                "type": "GET"
            }
        });
    });

    function deleteData(id) {
        if (confirm("Apakah Anda Yakin Ingin Menghapus Data ?")) {
            $.ajax({
                url: "<?php echo site_url('submateri/jalankan/hapus/') ?>"+id,
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