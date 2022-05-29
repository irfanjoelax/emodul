$(document).ready(function () {
    $('#btn_save').click(function () {

        var nama = $('#txt_nama').val();

        if (nama == "") {
            alert('Nama user masih kosong');
            $('#txt_nama').focus()
            return false;
        }
        else {
            return true;
        }
    });
});