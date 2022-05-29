$(document).ready(function () {
    $('#btn_save').click(function () {

        var pass = $('#txt_pass').val();

        if (pass != "") {
            var konfirmasi = confirm('Password Anda akan diganti dengan yang baru ?');

            if (konfirmasi == 1) {
                return true;
            }
            else {
                $('#txt_pass').val('');
                return false;
            }
        }

    });
});