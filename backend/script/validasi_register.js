$(document).ready(function () {
    $('#btn_save').click(function () {

        var nama = $('#txt_nama').val();
        var nim = $('#txt_nim').val();
        var user = $('#txt_user').val();
        var pass1 = $('#txt_pass1').val();
        var pass2 = $('#txt_pass2').val();
        var email = $('#txt_email').val();
        var tlp = $('#txt_tlp').val();
        var almt = $('#txt_almt').val();

        if (nama == "") {
            alert('nama lengkap masih kosong');
            $('#txt_nama').focus()
            return false;
        }
        if (nim == "") {
            alert('nim anda masih kosong');
            $('#txt_nim').focus()
            return false;
        }
        if (user == "") {
            alert('username anda masih kosong');
            $('#txt_user').focus()
            return false;
        }
        if (pass1 != pass2) {
            alert('password dan ulang password tidak sama');
            $('#txt_pass1').focus()
            return false;
        }
        if (email == "") {
            alert('email anda masih kosong');
            $('#txt_email').focus()
            return false;
        }
        if (tlp == "") {
            alert('no telepon anda masih kosong');
            $('#txt_tlp').focus()
            return false;
        }
        if (almt == "") {
            alert('alamat anda masih kosong');
            $('#txt_almt').focus()
            return false;
        }
        else {
            return true;
        }
    });
});