$(document).ready(function () {
    $('#btn_save').click(function () {

        var nama = $('#txt_nama').val();
        var mtr = $('#txt_mtr').val();

        if (nama == "") {
            alert('nama submateri masih kosong');
            $('#txt_nama').focus()
            return false;
        }
        else if (mtr == "") {
            alert('materi utama tidak boleh kosong');
            $('#txt_mtr').focus()
            return false;
        }
        else {
            return true;
        }
    });
});